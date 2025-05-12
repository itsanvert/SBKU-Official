@php
use App\Models\Event;
$events = Event::orderBy('date', 'desc')->get();
@endphp

<div class="aupp-events-section-pro">
    <style>
        .aupp-events-section-pro {
            background: #ffffff;
            padding: 60px 0 80px 0;
        }
        .aupp-events-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .aupp-events-title {
            text-align: center;
            font-size: 2.7rem;
            font-weight: 900;
            color: #002855;
            margin-bottom: 2.7rem;
            letter-spacing: -1px;
        }
        .aupp-events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.2rem;
            margin-bottom: 2.5rem;
            justify-items: center;
        }
        .aupp-event-card {
            background: #ffffff;
            border: 2px solid #002855;
            border-radius: 0;
            width: 340px;
            min-height: 520px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 12px rgba(0,40,85,0.04);
            transition: box-shadow 0.2s, transform 0.2s;
            overflow: hidden;
        }
        .aupp-event-card:hover {
            box-shadow: 0 8px 24px rgba(0,40,85,0.10);
            transform: translateY(-4px) scale(1.01);
        }
        .aupp-event-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-bottom: 2px solid #002855;
            background: #f8f8f8;
        }
        .aupp-event-content {
            width: 100%;
            padding: 1.5rem 1.2rem 1.2rem 1.2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .aupp-event-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #d72638;
            margin: 1rem 0 1.2rem 0;
            text-align: center;
            min-height: 48px;
        }
        .aupp-event-meta {
            width: 100%;
            margin-bottom: 1.2rem;
        }
        .aupp-event-meta-item {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: #002855;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .aupp-event-meta-item i {
            color: #002855;
            margin-right: 0.7rem;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }
        .aupp-event-readmore {
            margin-top: 0.5rem;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .aupp-event-btn {
            background: #ffffff;
            color: #d72638;
            border: 1.5px solid #d72638;
            border-radius: 4px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.2s;
            cursor: pointer;
            text-decoration: none;
        }
        .aupp-event-btn:hover {
            background: #d72638;
            color: #fff;
        }
        .aupp-events-viewmore {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .aupp-viewmore-btn {
            background: #fff;
            color: #d72638;
            border: 2px solid #d72638;
            border-radius: 6px;
            padding: 0.9rem 2.5rem;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.2s;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .aupp-viewmore-btn:hover {
            background: #d72638;
            color: #fff;
        }
        @media (max-width: 900px) {
            .aupp-events-grid {
                gap: 1.5rem;
            }
            .aupp-event-card {
                width: 95vw;
                max-width: 370px;
            }
        }
        @media (max-width: 600px) {
            .aupp-events-title {
                font-size: 2rem;
            }
            .aupp-event-card {
                width: 98vw;
                max-width: 99vw;
            }
            .aupp-event-image {
                height: 220px;
            }
        }
    </style>
    <div class="aupp-events-container">
        <h2 class="aupp-events-title">Events</h2>
        <div class="aupp-events-grid" id="eventsGrid">
            @foreach($events as $index => $event)
            <div class="aupp-event-card" data-index="{{ $index }}" style="display: {{ $index < 3 ? 'flex' : 'none' }};">
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="aupp-event-image">
                <div class="aupp-event-content">
                    <div class="aupp-event-title">{!! $event->title !!}</div>
                    <div class="aupp-event-meta">
                        <div class="aupp-event-meta-item">
                            <i class="fa fa-calendar"></i>
                            <span>Date: {{ $event->date->format('F j, Y') }}</span>
                        </div>
                        <div class="aupp-event-meta-item">
                            <i class="fa fa-clock"></i>
                            <span>Time: {{ $event->time }}</span>
                        </div>
                        <div class="aupp-event-meta-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>Location: {{ $event->location }}</span>
                        </div>
                    </div>
                    <div class="aupp-event-readmore">
                        <a href="{{ route('events.show', $event->id) }}" class="aupp-event-btn">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="aupp-events-viewmore">
            <button type="button" id="viewMoreBtn" class="aupp-viewmore-btn">
                <i class="fa fa-arrow-right"></i>
                <span id="viewMoreText">View More Events</span>
            </button>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.aupp-event-card');
    const btn = document.getElementById('viewMoreBtn');
    const btnText = document.getElementById('viewMoreText');
    let shown = 3;
    const step = 3;
    btn.addEventListener('click', function() {
        let next = shown + step;
        for (let i = shown; i < next && i < cards.length; i++) {
            cards[i].style.display = 'flex';
        }
        shown = next;
        if (shown >= cards.length) {
            btn.classList.add('disabled');
            btn.disabled = true;
            btnText.textContent = 'No more events';
            btn.querySelector('i').className = 'fa fa-check';
        }
    });
    if (cards.length <= shown) {
        btn.classList.add('disabled');
        btn.disabled = true;
        btnText.textContent = 'No more events';
        btn.querySelector('i').className = 'fa fa-check';
    }
});
</script>

