<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;
use Illuminate\Http\Request;

Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/', [PageController::class, 'index']);
Route::get('/post', [PageController::class, 'post']);
Route::get('/post-detail&{id}', [PageController::class, 'postDetail']);
Route::get('/page-detail&{id}', [PageController::class, 'pageDetail']);
Route::get('/contactUs', [PageController::class, 'contactUs']);
Route::get('/test_view', [PageController::class, 'test_view']);
// web.php
Route::post('/post-message', [ContactFormController::class, 'post_message'])->name('post-message');

// Events Routes
Route::get('/events', function () {
    return view('frontend.page.event');
})->name('events.index');

Route::get('/event/{id}', function ($id) {
    // In a real application, you would fetch the event data from your database
    $event = [
        'id' => $id,
        'image' => 'http://localhost/assets/source/storage/app/public/blog/6K04sIt61t1lzJvRa46MObssohftMU-meta4Z+hLmpwZw==-.jpg',
        'title' => '🎉 Sangkran AUPP 🎉',
        'date' => '11 April 2025',
        'time' => '10:00 AM to 10:00 PM',
        'location' => 'AUPP Campus',
        'description' => 'Join us for the biggest celebration of the Khmer New Year at AUPP! Experience traditional Khmer culture, music, dance performances, and delicious food. This event is open to all students, staff, and the community.',
        'organizer' => 'AUPP Student Life',
        'contact' => 'studentlife@aupp.edu.kh',
        'registration_required' => true,
        'registration_deadline' => '10 April 2025',
        'max_participants' => 500,
        'current_participants' => 350,
    ];
    return view('frontend.page.eventDetail', ['event' => $event]);
})->name('events.show');

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

    // Here you would typically:
    // 1. Save the application to the database
    // 2. Send notification emails
    // 3. Store the resume file

    // For now, we'll just return a success message
    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
})->name('career.apply');
