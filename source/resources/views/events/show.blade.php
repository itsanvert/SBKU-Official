@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
@php
use Carbon\Carbon;
@endphp

<div class="aupp-event-detail-section">
    <style>
        .aupp-event-detail-section {
            background: #ffffff;
            padding: 60px 0 80px 0;
            min-height: 100vh;
        }
        .aupp-event-detail-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .aupp-event-detail-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .aupp-event-detail-title {
            font-size: 2.5rem;
            font-weight: 900;
            color: #002855;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }
        .aupp-event-detail-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border: 2px solid #002855;
            margin-bottom: 2rem;
        }
        .aupp-event-detail-grid {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 3rem;
            margin-bottom: 3rem;
        }
        .aupp-event-detail-content {
            background: #f8fafc;
            padding: 2rem;
            border: 2px solid #002855;
        }
        .aupp-event-detail-sidebar {
            background: #f8fafc;
            padding: 2rem;
            border: 2px solid #002855;
            height: fit-content;
        }
        .aupp-event-meta-item {
            display: flex;
            align-items: center;
            font-size: 1.1rem;
            color: #002855;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        .aupp-event-meta-item i {
            color: #002855;
            margin-right: 1rem;
            font-size: 1.3rem;
            width: 25px;
            text-align: center;
        }
        .aupp-event-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 2rem;
        }
        .aupp-event-register-btn {
            background: #d72638;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 1rem 2rem;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.2s;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
        }
        .aupp-event-register-btn:hover {
            background: #b21e2d;
        }
        .aupp-back-to-events {
            display: inline-block;
            margin-bottom: 2rem;
            color: #d72638;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }
        .aupp-back-to-events:hover {
            color: #b21e2d;
        }
        @media (max-width: 900px) {
            .aupp-event-detail-grid {
                grid-template-columns: 1fr;
            }
            .aupp-event-detail-image {
                height: 350px;
            }
            .aupp-event-detail-title {
                font-size: 2rem;
            }
        }
        @media (max-width: 600px) {
            .aupp-event-detail-image {
                height: 250px;
            }
            .aupp-event-detail-content,
            .aupp-event-detail-sidebar {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="aupp-event-detail-container">
        <a href="{{ url('/') }}" class="aupp-back-to-events">
            <i class="fas fa-arrow-left"></i> Back to Events
        </a>

        <div class="aupp-event-detail-header">
            <h1 class="aupp-event-detail-title">{{ $event->title }}</h1>
            <img src="{{ $event->image }}" alt="{{ $event->title }}" class="aupp-event-detail-image">
        </div>

        <div class="aupp-event-detail-grid">
            <div class="aupp-event-detail-content">
                <div class="aupp-event-description">
                    {!! $event->description !!}
                </div>

                @if($event->gallery)
                <div class="aupp-event-gallery">
                    <!-- Add gallery implementation here -->
                </div>
                @endif
            </div>

            <div class="aupp-event-detail-sidebar">
                <div class="aupp-event-meta">
                    <div class="aupp-event-meta-item">
                        <i class="fas fa-calendar"></i>
                        <div>
                            <div class="aupp-event-meta-label">Date</div>
                            <div class="aupp-event-meta-value">
                                {{ Carbon::parse($event->date)->format('F j, Y') }}
                            </div>
                        </div>
                    </div>

                    <div class="aupp-event-meta-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <div class="aupp-event-meta-label">Time</div>
                            <div class="aupp-event-meta-value">
                                {{ $event->time }}
                            </div>
                        </div>
                    </div>

                    <div class="aupp-event-meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <div class="aupp-event-meta-label">Location</div>
                            <div class="aupp-event-meta-value">
                                {{ $event->location }}
                            </div>
                        </div>
                    </div>
                </div>

                <button class="aupp-event-register-btn">
                    Register Now
                </button>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>
@include('frontend.footer')