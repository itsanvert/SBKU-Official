<?php

// app/Http/Controllers/EventController.php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    $events = Event::all(); // Or use paginate, orderBy, etc.
    return view('events.index', compact('events'));
}

    
    public function show(Event $event)
{
    return view('events.show', compact('events'));
}
}
