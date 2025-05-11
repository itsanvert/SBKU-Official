<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_kh',
        'title_en',
        'body_kh',
        'body_en',
        'published_at',
    ];
}
