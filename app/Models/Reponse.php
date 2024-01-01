<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $table = 'answers';

    public function Question()
    {
        // return $this->belongsTo('app\\Models\\Question', 'questions_id', 'id');
        return $this->belongsTo(Question::class);
    }
}
