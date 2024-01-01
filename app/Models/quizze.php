<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizze extends Model
{

    protected $table = 'quizzes';
    protected $filliable = ['title', 'description', 'status', 'created_at', 'updated_at', 'level_id', 'theme_id'];

    public function Level()
    {
        // return $this->belongsTo('App\\Models\\Level', 'level_id', 'id');
        return $this->belongsTo(Level::class);
    }

    public function question()
    {
        //recuperer la cles etrangere liée a la cles primaire de quizzes 
        // return $this->hasMany('App\\Models\\Question', 'quizzes_id', 'id');
        return $this->hasMany(Question::class);
    }
    public function Progresses()
    {
        //recuperer la cles etrangere liée a la cles primaire de quizzes 
        return $this->hasMany(ProgressUser::class);
    }
    public function Theme()
    {
        // return $this->belongsTo('App\\Models\\Level', 'level_id', 'id');
        return $this->belongsTo(Theme::class);
    }


    public function tag()
    {
        //recuperer la cles etrangere liée a la cles primaire de quizzes 
        return $this->belongsToMany('App\\Models\\Tag', 'quizzes_id', 'tags_id');
    }
}
