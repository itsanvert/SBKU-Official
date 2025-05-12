
<div class="container mx-auto py-12 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('events.index') }}" class="text-blue-600 hover:underline flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Events
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-96 object-cover object-center">
            
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">{{ $event->title }}</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-500">Date</p>
                            <p class="font-medium">{{ $event->date->format('F j, Y') }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-500">Time</p>
                            <p class="font-medium">{{ $event->time }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center md:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-500">Location</p>
                            <p class="font-medium">{{ $event->location }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
