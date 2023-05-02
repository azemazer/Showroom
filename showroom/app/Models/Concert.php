<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'artiste',
        'genre',
        'description',
        'organisateur',
        'date',
        'lieu',
        'imgartiste',
        'imglieu',
    ];
}
