<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EventController;
use Illuminate\Http\Request;

// Language Routes
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// Page Routes
Route::get('/', [PageController::class, 'index']);
Route::get('/post', [PageController::class, 'post']);
Route::get('/post-detail&{id}', [PageController::class, 'postDetail']);
Route::get('/page-detail&{id}', [PageController::class, 'pageDetail']);
// Route::get('/post-detail/{id}', [PageController::class, 'postDetail'])->name('post-detail');
// Route::get('/page-detail/{id}', [PageController::class, 'pageDetail'])->name('page-detail');
Route::get('/contactUs', [PageController::class, 'contactUs']);
Route::get('/test_view', [PageController::class, 'test_view']);

// Contact Form Route
Route::post('/post-message', [ContactFormController::class, 'post_message'])->name('post-message');



// routes/web.php
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');



// Career Routes
Route::get('/career', function () {
    return view('frontend.career');
})->name('careers.index');

Route::post('/career/apply', function (Request $request) {
    // Validate the request
    $validated = $request->validate([
        'job_id' => 'required|integer',
        'job_title' => 'required|string',
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'education' => 'required|string',
        'experience' => 'required|string',
        'resume' => 'required|file|mimes:pdf|max:5120', // Max 5MB
        'cover_letter' => 'required|string',
    ]);

    // Handle file upload
    if ($request->hasFile('resume')) {
        $resumePath = $request->file('resume')->store('resumes', 'public');
    }

    // Save to database, send email, etc.

    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
})->name('career.apply');
