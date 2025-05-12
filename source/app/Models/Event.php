<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'image', 'date', 'time', 'location',
    ];
    
    // Add proper date casting for the date field
    protected $casts = [
        'date' => 'date',
    ];
    
    // Add accessor to get the full image URL
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}


