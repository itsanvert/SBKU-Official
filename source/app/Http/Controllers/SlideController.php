<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

class SldieController extends Controller
{
    public function index()
    {
        $slides = Slide::where('is_active', true)
            ->orderByDesc('published_at')
            ->get();

        return view('frontend.slide', compact('slides'));
    }
}
