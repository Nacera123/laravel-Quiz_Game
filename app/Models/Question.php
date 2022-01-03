<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function reponses(){

        return $this->hasMany('App\\Models\\Reponse', 'questions_id', 'id');

    }

    public function level(){
        
        return $this->belongsTo('App\\Models\\Level', 'levels_id', 'id');
    }
}
