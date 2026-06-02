<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
//use App\Models\Post;
use App\Mail\ApplicationReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SipayController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
      
    {
      
        $query = Post::where('category_id', '2');

        if ($request->filled('q')) {
            $query->where('title', 'LIKE', '%' . $request->q . '%');
        }

        $offer = $query->take(5)->get();
      
        return view('carriere.index', ['offer' => $offer]);
    }
  
    public function blog()
      
    {
        $blogs = Post::where('category_id', '1')->take(5)->get();

        return view('welcome', compact('blogs'));
    }
  

    public function send(Request $request)
    {
        $request->validate([
          	'slug' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // max 5 Mo
        ]);
        // ✅ Validation manuelle de reCAPTCHA
       /* $recaptchaResponse = $request->input('g-recaptcha-response');
        if (!$recaptchaResponse) {
            return back()->withErrors(['recaptcha' => 'Veuillez cocher la case reCAPTCHA.']);
        }

        // Appel à l'API Google pour vérifier
        $secret = env('RECAPTCHA_SECRET_KEY');
        $verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}&remoteip={$request->ip()}";

        $response = file_get_contents($verifyUrl);
        $responseData = json_decode($response, true);

        if (!$responseData['success']) {
            return back()->withErrors(['recaptcha' => 'reCAPTCHA invalide. Veuillez réessayer.']);
        }*/
        $cv = $request->file('cv');

        // Envoi de l'email avec le CV en pièce jointe
      
        Mail::to('mohcine.elhanoune@sispay.net')->send(
            new ApplicationReceived($request->all(), $cv)
        );

        return back()->with('success', 'Votre candidature a été envoyée avec succès !');
    }
    

    /**
     * Display the specified resource.
     */
  
    public function show($slug)
      
    {
        //
       $offer = Post::where('slug', $slug)->firstOrFail();
      
        return view('carriere.show',compact('offer'));
    }
       public function Postuler($slug)
      
    {
        //
       $offer = Post::where('slug', $slug)->firstOrFail();
      
        return view('carriere.postuler',compact('offer'));
    }
}
