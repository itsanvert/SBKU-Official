<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $path = $request->file('image')->storeAs(
    'events', 
    'filename.jpg', 
    'public'  // Your permanent storage disk
);
        $events = Event::query()
            ->where('date', '>=', now()->startOfDay())
            ->orderBy('date')
            ->paginate(9);

        return view('events.index', [
            'events' => $events,
            'now' => now()
        ]);
    }
    
    public function show($id)
{
   
    $event = Event::findOrFail($id);
    return view('events.show', compact('event'));
}

}