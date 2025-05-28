<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        // In your controller

        $filename = Str::slug($request->title).'.'.$request->file('image')->extension();
        $path = $request->file('image')->storeAs('events', $filename, 'public');
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

    public function show(Event $event)
{
    return view('events.show', compact('event'));
}
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:events,slug',
        'date' => 'required|date',
        'time' => 'required',
        'location' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'description' => 'nullable|string',
        'registration_required' => 'nullable|boolean',
        'max_participants' => 'nullable|integer',
        'registration_deadline' => 'nullable|date',
        'schedule' => 'nullable|json',
    ]);

    $event = new Event();
    $event->title = $request->title;
    $event->slug = $request->slug;
    $event->date = $request->date;
    $event->time = $request->time;
    $event->location = $request->location;
    $event->description = $request->description;
    $event->registration_required = $request->registration_required ?? false;
    $event->max_participants = $request->max_participants;
    $event->registration_deadline = $request->registration_deadline;
    $event->schedule = $request->schedule;

    if ($request->hasFile('image')) {
        $filename = Str::slug($request->title) . '.' . $request->file('image')->extension();
        $path = $request->file('image')->storeAs('events', $filename, 'public'); // Store in public disk
        $event->image = $filename; // Save only the filename (e.g., "event-photo.jpg")
    }
    $event->save();

    return redirect()->route('events.index')->with('success', 'Event created successfully!');
}



}
