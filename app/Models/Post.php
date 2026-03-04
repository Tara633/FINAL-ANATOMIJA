<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // kolone koje se mogu masovno upisivati
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    // relacija s korisnikom
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}