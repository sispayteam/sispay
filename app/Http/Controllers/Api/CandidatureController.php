<?php

namespace App\Http\Controllers\Api;

use App\Candidature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatures = Candidature::latest()->get()->map(function ($item) {
            $item->cv_url = $item->cv_path ? Storage::disk('public')->url($item->cv_path) : null;
            return $item;
        });

        return response()->json(['data' => $candidatures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'slug' => 'required|string',
            'fullName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'Question1' => 'nullable|string',
            'Question2' => 'nullable|string',
            'Question3' => 'nullable|string',
            'message' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $path = $request->file('cv')->store('cvs', 'public');

        $candidature = Candidature::create([
            'slug' => $data['slug'],
            'fullName' => $data['fullName'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'question1' => $data['Question1'] ?? null,
            'question2' => $data['Question2'] ?? null,
            'question3' => $data['Question3'] ?? null,
            'message' => $data['message'] ?? null,
            'cv_path' => $path,
        ]);

        $candidature->cv_url = Storage::disk('public')->url($candidature->cv_path);

        return response()->json(['data' => $candidature], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidature = Candidature::findOrFail($id);
        $candidature->cv_url = $candidature->cv_path ? Storage::disk('public')->url($candidature->cv_path) : null;

        return response()->json(['data' => $candidature]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidature = Candidature::findOrFail($id);

        $data = $request->validate([
            'slug' => 'sometimes|string',
            'fullName' => 'sometimes|string',
            'email' => 'sometimes|email',
            'phone' => 'sometimes|string',
            'Question1' => 'nullable|string',
            'Question2' => 'nullable|string',
            'Question3' => 'nullable|string',
            'message' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        if ($request->hasFile('cv')) {
            Storage::disk('public')->delete($candidature->cv_path);
            $data['cv_path'] = $request->file('cv')->store('cvs', 'public');
        }

        $candidature->update([
            'slug' => $data['slug'] ?? $candidature->slug,
            'fullName' => $data['fullName'] ?? $candidature->fullName,
            'email' => $data['email'] ?? $candidature->email,
            'phone' => $data['phone'] ?? $candidature->phone,
            'question1' => $data['Question1'] ?? $candidature->question1,
            'question2' => $data['Question2'] ?? $candidature->question2,
            'question3' => $data['Question3'] ?? $candidature->question3,
            'message' => $data['message'] ?? $candidature->message,
            'cv_path' => $data['cv_path'] ?? $candidature->cv_path,
        ]);

        $candidature->cv_url = $candidature->cv_path ? Storage::disk('public')->url($candidature->cv_path) : null;

        return response()->json(['data' => $candidature]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidature = Candidature::findOrFail($id);
        Storage::disk('public')->delete($candidature->cv_path);
        $candidature->delete();

        return response()->json(['message' => 'Candidature supprimée.']);
    }
}
