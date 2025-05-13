@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Upcoming Events</h2>
    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
                @endif
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</p>
                    <p class="card-text"><strong>Time:</strong> {{ $event->time }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
