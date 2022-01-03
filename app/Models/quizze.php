<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizze extends Model {

    protected $table='quizzes';

    public function user(){
        return $this->belongsTo('App\\Models\\User', 'app_users_id', 'id');
    }

    public function question(){
        //recuperer la cles etrangere liée a la cles primaire de quizzes 
        return $this->hasMany('App\\Models\\Question', 'quizzes_id', 'id');
    }

    public function tag(){
        //recuperer la cles etrangere liée a la cles primaire de quizzes 
        return $this->belongsToMany('App\\Models\\Tag', 'quizzes_id', 'tags_id');
    }



}
