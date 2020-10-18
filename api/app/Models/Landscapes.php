<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landscapes extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'bio', 'profile_pic'];

    protected $casts =[
        'album' => 'array'
    ];
}
