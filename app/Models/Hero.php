<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_name', // Add 'hero_name' to the fillable array
        'type',
        'role',
        // Add other fields as needed
    ];
}
