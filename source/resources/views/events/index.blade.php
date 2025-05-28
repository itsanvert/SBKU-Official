@php
use App\Models\Event;
$events = Event::orderBy('date', 'desc')->get();
@endphp

<div class="aupp-events-section-pro">
   <style>
        /* Events Section with News Card Style */
        .aupp-events-section-pro {
            background: #f8fafc;
            padding: 80px 0;
            position: relative;
        }

        .aupp-events-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .aupp-events-title {
            font-family: 'Hanuman', serif;
            -webkit-text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            text-align: center;
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 3rem;
            position: relative;
        }

        .aupp-events-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #ff8c42;
            border-radius: 2px;
        }

        .aupp-events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .aupp-event-card {
            background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease-in-out;
    border: 1.5px solid #fca311;
        }

        .aupp-event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(255, 140, 66, 0.4), 0 10px 10px -5px rgba(255, 140, 66, 0.3);
        }

        .aupp-event-image {
            width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
        }

        .aupp-event-card:hover .aupp-event-image {
            transform: scale(1.05);
        }

        .aupp-event-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .aupp-event-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .aupp-event-meta {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .aupp-event-meta-item {
            display: flex;
            align-items: center;
            color: #64748b;
            font-size: 0.875rem;
        }

        .aupp-event-meta-item i {
            margin-right: 0.5rem;
            color: rgb(63, 63, 253);
            width: 16px;
            text-align: center;
        }

        .aupp-event-date {
            background: linear-gradient(135deg, #ff8c42, #ff7a28);
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .aupp-event-excerpt {
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex: 1;
        }

        .aupp-event-readmore {
            margin-top: auto;
        }

        .aupp-event-btn {
            background: #fff;
            color: #d72638;
            border: 1.5px solid #d72638;
            border-radius: 4px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .aupp-event-btn:hover {
            background: #d72638;
            color: #fff;
        }

        .aupp-events-viewmore {
            display: flex;
            justify-content: center;
            margin-top: 2.5rem;
        }

        .aupp-viewmore-btn {
            background: linear-gradient(135deg, #ff8c42, #ff7a28);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.9rem 2.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 15px rgba(255,140,66,0.3);
        }

        .aupp-viewmore-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,140,66,0.4);
            background: linear-gradient(135deg, #ff7a28, #ff6914);
        }

        @media (max-width: 1024px) {
            .aupp-events-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .aupp-events-section-pro {
                padding: 60px 0;
            }

            .aupp-events-title {
                font-size: 2rem;
            }

            .aupp-events-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }

            .aupp-event-image {
                height: 200px;
            }
        }
    </style>

    <div class="aupp-events-container">
        <h2 class="aupp-events-title">{{__('Events')}}</h2>
        <div class="aupp-events-grid" id="eventsGrid">
            @foreach($events as $index => $event)
            <div class="aupp-event-card" data-index="{{ $index }}" style="display: {{ $index < 3 ? 'flex' : 'none' }};">

                {{-- Event Image --}}
                <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="aupp-event-image">




                <div class="aupp-event-content">
                    {{-- Date Badge --}}
                    <div class="aupp-event-date">
                        <i class="far fa-calendar-alt"></i>
                        {{ $event->date->format('d M Y') }}
                    </div>

                    {{-- Event Title --}}
                    <div class="aupp-event-title">{!! $event->title !!}</div>

                    {{-- Event Meta Information --}}
                    <div class="aupp-event-meta">
                        <div class="aupp-event-meta-item">
<i class="fa-solid fa-clock"></i>
                            <span>{{ $event->time->format('H:i') }}</span>
                        </div>
                        <div class="aupp-event-meta-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>{{ $event->location }}</span>
                        </div>
                    </div>

                    {{-- Event Excerpt/Description --}}
                    @if(isset($event->description))
                    <div class="aupp-event-excerpt">
                        {{ Str::limit(strip_tags($event->description), 120) }}
                    </div>
                    @endif

                    {{-- Read More Button --}}
                    <div class="aupp-event-readmore">
                        <a href="{{ url("/event/{$event['id']}") }}" class="aupp-event-btn">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- View More Button --}}
        <div class="aupp-events-viewmore">
            <button type="button" id="viewMoreBtn" class="aupp-viewmore-btn">
                <span id="viewMoreText">View More Events</span>
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>
