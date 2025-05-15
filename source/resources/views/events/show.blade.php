

<div class="container">
    <a href="{{ route('events.index') }}" class="btn btn-secondary mb-4">← Back to Events</a>
    <div class="card">
        @if($event->image)
        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->title }}">
        @endif
        <div class="card-body">
            <h2 class="card-title">{{ $event->title }}</h2>
            <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}</p>
            <p class="card-text"><strong>Time:</strong> {{ $event->time }}</p>
            <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
            <div class="mt-3">
                {!! nl2br(e($event->description)) !!}
            </div>
        </div>
    </div>
</div>

