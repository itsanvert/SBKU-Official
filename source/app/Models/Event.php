<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Add 'title' to the fillable property
    protected $fillable = [
        'title',
        // Add other fields that you want to allow mass assignment
    ];
}
