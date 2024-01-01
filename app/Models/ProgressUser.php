<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressUser extends Model
{
    protected $table = 'user_quiz_progress';

    public function User()
    {
        // return $this->belongsTo('App\\Models\\User', 'user_id', 'id');
        return $this->belongsTo(User::class);
    }
    public function Quiz()
    {
        // return $this->belongsTo('App\\Models\\quizze', 'quiz_id', 'id');
        return $this->belongsTo(quizze::class);
    }
}
