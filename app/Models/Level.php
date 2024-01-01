<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $filliable = ['id', 'name', 'status', 'created_at', 'updated_at'];
    public function Quizzes()
    {
        // return $this->hasMany('App\\Models\\quizze', 'level_id', 'id');
        return $this->hasMany(quizze::class);
    }
}
