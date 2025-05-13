<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'date',
        'time',
        'location',
        'image',
        'description',
    ];

    // Cast date and time fields properly
    protected $casts = [
        'date' => 'date',
        'time' => 'datetime:H:i',
    ];
}
