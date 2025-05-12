<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('date', 'desc')->get();
        return view('events.index', compact('events'));
    }
    
    /**
     * Display the specified event.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }
    
    /**
     * Method to get events for a partial/component
     * 
     * @return \Illuminate\Http\Response
     */
    public function getEventsPartial()
    {
        $events = Event::orderBy('date', 'desc')->get();
        return view('partials.events-section', compact('events'));
    }
}
