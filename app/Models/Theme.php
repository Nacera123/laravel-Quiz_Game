<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    // use HasFactory;
    protected $table = 'theme';
    protected $fillable = ['name', 'picture'];

    public function questions()
    {
        return $this->hasMany(quizze::class);
    }
}
