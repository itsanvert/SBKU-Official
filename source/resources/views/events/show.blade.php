<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
@php
use App\Models\Event;
$events = Event::orderBy('date', 'desc')->get();
@endphp

<div class="events-page-wrapper">
    <style>
        /* Modern Events Page Styling */
        .events-page-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            padding: 2rem 0;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .events-hero {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem 0;
        }

        .events-hero-title {
            font-family: 'Hanuman', serif;
            font-size: 3rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #ff8c42, #fca311);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 4px 8px rgba(255, 140, 66, 0.3);
        }

        .events-hero-subtitle {
            font-size: 1.2rem;
            color: #64748b;
            font-weight: 500;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .events-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .event-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: 2px solid transparent;
            position: relative;
        }

        .event-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff8c42, #fca311, #ff8c42);
            border-radius: 20px 20px 0 0;
        }

        .event-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(255, 140, 66, 0.25);
            border-color: rgba(255, 140, 66, 0.3);
        }

        .event-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.6s ease;
            position: relative;
        }

        .event-card:hover .event-image {
            transform: scale(1.1);
        }

        .event-image-overlay {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ff8c42;
            border: 1px solid rgba(255, 140, 66, 0.2);
        }

        .event-content {
            padding: 2rem;
        }

        .event-date-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #ff8c42, #ff7a28);
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.6rem 1.2rem;
            border-radius: 25px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(255, 140, 66, 0.3);
            transition: all 0.3s ease;
        }

        .event-date-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 140, 66, 0.4);
        }

        .event-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1rem;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .event-card:hover .event-title {
            color: #ff8c42;
        }

        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 12px;
            border-left: 4px solid #ff8c42;
        }

        .event-meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #64748b;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .event-meta-item i {
            color: #ff8c42;
            width: 16px;
            text-align: center;
            font-size: 1rem;
        }

        .event-description {
            color: #475569;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 2rem;
            max-height: 150px;
            overflow: hidden;
            position: relative;
        }

        .event-description::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            background: linear-gradient(transparent, white);
        }

        .event-description p {
            margin-bottom: 1rem;
        }

        .event-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .event-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .event-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .event-btn:hover::before {
            left: 100%;
        }

        .event-btn-primary {
            background: linear-gradient(135deg, #ff8c42, #ff7a28);
            color: white;
            box-shadow: 0 4px 15px rgba(255, 140, 66, 0.3);
        }

        .event-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 140, 66, 0.4);
            color: white;
        }

        .event-btn-secondary {
            background: white;
            color: #64748b;
            border: 2px solid #e2e8f0;
        }

        .event-btn-secondary:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            transform: translateY(-2px);
            color: #475569;
        }

        .back-to-events {
            text-align: center;
            padding: 2rem 0;
        }

        .back-btn {
            background: linear-gradient(135deg, #64748b, #475569);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 15px rgba(100, 116, 139, 0.3);
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(100, 116, 139, 0.4);
            color: white;
            background: linear-gradient(135deg, #475569, #334155);
        }

        .no-events {
            text-align: center;
            padding: 4rem 2rem;
            color: #64748b;
            font-size: 1.2rem;
        }

        .no-events i {
            font-size: 4rem;
            color: #cbd5e1;
            margin-bottom: 1rem;
        }

        .events-count {
            text-align: center;
            margin-bottom: 2rem;
            color: #64748b;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .events-count-number {
            color: #ff8c42;
            font-weight: 700;
            font-size: 1.3rem;
        }

        @media (max-width: 768px) {
            .events-hero-title {
                font-size: 2rem;
            }

            .events-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .event-content {
                padding: 1.5rem;
            }

            .event-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .event-actions {
                flex-direction: column;
                gap: 1rem;
            }

            .event-btn {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .events-page-wrapper {
                padding: 1rem 0;
            }

            .events-container {
                padding: 0 0.5rem;
            }

            .event-image {
                height: 200px;
            }

            .event-content {
                padding: 1rem;
            }
        }

        /* Loading Animation */
        .events-grid {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .event-card {
            animation: slideInUp 0.6s ease-out forwards;
            animation-delay: calc(var(--index) * 0.1s);
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="events-container">
        <!-- Hero Section -->
        <div class="events-hero">
            <h1 class="events-hero-title">Upcoming Events</h1>
            <p class="events-hero-subtitle">
                Discover amazing events happening around you. Join us for unforgettable experiences and connect with like-minded people.
            </p>
        </div>

        @if($events->count() > 0)
            <!-- Events Count -->
            <div class="events-count">
                Showing <span class="events-count-number">{{ $events->count() }}</span>
                {{ $events->count() === 1 ? 'event' : 'events' }}
            </div>

            <!-- Events Grid -->
            <div class="events-grid">
                @foreach ($events as $index => $event)
                <div class="event-card" style="--index: {{ $index }}">
                    {{-- Event Image --}}
                    @if($event->image_url)
                        <div style="position: relative; overflow: hidden;">
                            <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="event-image">
                            @if($event->date)
                            <div class="event-image-overlay">
                                <i class="far fa-calendar-alt"></i>
                                {{ $event->date->format('M j') }}
                            </div>
                            @endif
                        </div>
                    @else
                        <div style="height: 250px; background: linear-gradient(135deg, #ff8c42, #fca311); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem; position: relative; overflow: hidden;">
                            <i class="fa-solid fa-calendar-days" style="opacity: 0.3;"></i>
                            @if($event->date)
                            <div class="event-image-overlay">
                                <i class="far fa-calendar-alt"></i>
                                {{ $event->date->format('M j') }}
                            </div>
                            @endif
                        </div>
                    @endif

                    <div class="event-content">
                        {{-- Date Badge --}}
                        @if($event->date)
                        <div class="event-date-badge">
                            <i class="far fa-calendar-alt"></i>
                            {{ $event->date->format('F j, Y') }}
                            @if($event->date->isToday())
                                <span style="background: rgba(255,255,255,0.2); padding: 0.2rem 0.5rem; border-radius: 10px; margin-left: 0.5rem; font-size: 0.75rem;">TODAY</span>
                            @elseif($event->date->isTomorrow())
                                <span style="background: rgba(255,255,255,0.2); padding: 0.2rem 0.5rem; border-radius: 10px; margin-left: 0.5rem; font-size: 0.75rem;">TOMORROW</span>
                            @endif
                        </div>
                        @endif

                        {{-- Event Title --}}
                        <h2 class="event-title">{!! $event->title ?? 'Untitled Event' !!}</h2>

                        {{-- Event Meta Information --}}
                        <div class="event-meta">
                            @if($event->time)
                            <div class="event-meta-item">
                                <i class="fa-solid fa-clock"></i>
                                <span>{{ $event->time->format('g:i A') }}</span>
                            </div>
                            @endif
                            @if($event->location)
                            <div class="event-meta-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>{{ $event->location }}</span>
                            </div>
                            @endif
                            @if(!$event->time && !$event->location)
                            <div class="event-meta-item">
                                <i class="fa-solid fa-info-circle"></i>
                                <span>Details to be announced</span>
                            </div>
                            @endif
                        </div>

                        {{-- Event Description --}}
                        @if(!empty($event->description))
                        <div class="event-description">
                            {!! Str::limit(strip_tags($event->description), 200) !!}
                        </div>
                        @else
                        <div class="event-description" style="font-style: italic; color: #94a3b8;">
                            No description available for this event.
                        </div>
                        @endif

                        {{-- Event Actions --}}
                        <div class="event-actions">
                            <a href="{{ url("/event/{$event->id}") }}" class="event-btn event-btn-primary">
                                <i class="fa-solid fa-eye"></i>
                                View Details
                            </a>
                            <button onclick="shareEvent('{{ $event->title }}', '{{ url("/event/{$event->id}") }}')" class="event-btn event-btn-secondary">
                                <i class="fa-solid fa-share-alt"></i>
                                Share
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- No Events Found -->
            <div class="no-events">
                <i class="fa-solid fa-calendar-xmark"></i>
                <h3 style="margin-bottom: 1rem; color: #475569;">No Events Found</h3>
                <p>There are currently no events scheduled. Please check back later for updates.</p>
            </div>
        @endif

        {{-- Back to Events or Home --}}
        <div class="back-to-events">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fa fa-home"></i>
                Back to Home
            </a>
        </div>
    </div>
</div>

<script>
function shareEvent(title, url) {
    const eventData = {
        title: title,
        text: `Check out this event: ${title}`,
        url: url
    };

    if (navigator.share) {
        navigator.share(eventData).catch(err => {
            console.log('Error sharing:', err);
            fallbackShare(url);
        });
    } else {
        fallbackShare(url);
    }
}

function fallbackShare(url) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(url).then(() => {
            showNotification('Event link copied to clipboard!');
        });
    } else {
        const textArea = document.createElement('textarea');
        textArea.value = url;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        showNotification('Event link copied to clipboard!');
    }
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: linear-gradient(135deg, #ff8c42, #ff7a28);
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(255, 140, 66, 0.4);
        z-index: 1000;
        font-weight: 600;
        animation: slideInRight 0.3s ease-out;
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease-in forwards';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Add CSS animations for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOutRight {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
`;
document.head.appendChild(style);

// Add smooth page load animation
document.addEventListener('DOMContentLoaded', function() {
    document.body.style.opacity = '0';
    setTimeout(() => {
        document.body.style.transition = 'opacity 0.5s ease-in-out';
        document.body.style.opacity = '1';
    }, 100);
});
</script>

{{-- Include Font Awesome and Google Fonts --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@include('frontend.footer')
