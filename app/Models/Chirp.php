<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];
}
