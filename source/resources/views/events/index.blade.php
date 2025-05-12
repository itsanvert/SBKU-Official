
<div class="container mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold text-center text-gray-900 mb-12">Events</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
        @forelse($events as $event)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform hover:scale-105">
            <a href="{{ route('events.show', $event->id) }}">
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-56 object-cover">
            </a>
            
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">{{ $event->title }}</h2>
                
                <div class="space-y-2 mb-4">
                    <div class="flex items-center text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $event->date->format('F j, Y') }}
                    </div>
                    
                    <div class="flex items-center text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $event->time }}
                    </div>
                    
                    <div class="flex items-center text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ $event->location }}
                    </div>
                </div>
                
                <a href="{{ route('events.show', $event->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition">
                    Read More
                </a>
            </div>
        </div>
        @empty
        <div class="col-span-3 text-center py-12">
            <p class="text-xl text-gray-500">No events found</p>
        </div>
        @endforelse
    </div>
</div>