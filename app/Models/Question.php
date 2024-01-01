<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function Quiz()
    {

        // return $this->belongsTo('App\\Models\\quizze', 'quizzes_id', 'id');
        return $this->belongsTo(quizze::class);
    }

    public function reponses()
    {

        // return $this->hasMany('App\\Models\\Reponse', 'questions_id', 'id');
        return $this->hasMany(Reponse::class);
    }
}
