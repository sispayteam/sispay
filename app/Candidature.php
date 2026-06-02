<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Candidature extends Model
{
    protected $fillable = [
        'slug',
        'fullName',
        'email',
        'phone',
        'question1',
        'question2',
        'question3',
        'message',
        'cv_path',
    ];
}
