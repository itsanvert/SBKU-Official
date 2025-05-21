@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
@php
use Carbon\Carbon;
@endphp

<div class="aupp-event-detail-section">
    <style>
        /* Base styles */
        .aupp-event-detail-section {
            background: #f8f9fa; /* Light gray background for a clean look */
            padding: 80px 0; /* More vertical padding */
            min-height: 100vh;
            font-family: 'Arial', sans-serif; /* Modern, clean font */
            color: #333; /* Darker text for readability */
        }

        .aupp-event-detail-container {
            max-width: 1000px; /* Slightly narrower container for better content focus */
            margin: 0 auto;
            padding: 0 25px; /* Consistent padding */
        }

        /* Back to Events button */
        .aupp-back-to-events {
            display: inline-flex; /* Align icon and text */
            align-items: center;
            margin-bottom: 40px; /* More space below the button */
            color: #007bff; /* Primary blue for links */
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .aupp-back-to-events i {
            margin-right: 8px;
            font-size: 14px;
        }

        .aupp-back-to-events:hover {
            color: #0056b3; /* Darker blue on hover */
        }

        /* Header section */
        .aupp-event-detail-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .aupp-event-detail-title {
            font-size: 38px; /* Larger, more prominent title */
            color: #212529; /* Darker title for emphasis */
            margin-bottom: 25px; /* Space below title */
            font-weight: 700;
            line-height: 1.2;
        }

        .aupp-event-detail-image {
            width: 100%;
            max-height: 500px; /* Max height for images */
            object-fit: cover; /* Cover the area, crop if necessary */
            border-radius: 10px; /* Slightly rounded corners for softness */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .aupp-event-image-placeholder {
            width: 100%;
            max-height: 500px;
            background: #e9ecef; /* Light gray placeholder */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 20px;
            font-weight: 600;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        /* Grid layout for content and sidebar */
        .aupp-event-detail-grid {
            display: grid;
            grid-template-columns: 2fr 1fr; /* Main content wider than sidebar */
            gap: 50px; /* Increased gap for better separation */
            align-items: flex-start; /* Align items to the top */
        }

        @media (max-width: 992px) {
            .aupp-event-detail-grid {
                grid-template-columns: 1fr; /* Stack columns on smaller screens */
                gap: 40px;
            }
        }

        /* Event description */
        .aupp-event-description {
            line-height: 1.8; /* Improved readability for paragraphs */
            font-size: 17px;
            color: #495057;
        }

        .aupp-event-description h2,
        .aupp-event-description h3 {
            color: #212529;
            margin-top: 30px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .aupp-event-description p + p {
            margin-top: 15px; /* Spacing between paragraphs */
        }

        /* Gallery */
        .aupp-event-gallery {
            margin-top: 50px; /* Space above gallery */
            padding-top: 40px;
            border-top: 1px solid #e0e0e0; /* Separator line */
        }

        .aupp-event-gallery h2 {
            font-size: 28px;
            color: #212529;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); /* Responsive grid */
            gap: 20px; /* Space between gallery items */
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden; /* Hide overflow for rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 180px; /* Fixed height for consistent gallery images */
            object-fit: cover;
            display: block;
        }

        /* Sidebar */
        .aupp-event-detail-sidebar {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); /* Softer shadow for sidebar */
        }

        .aupp-event-meta {
            margin-bottom: 30px;
        }

        .aupp-event-meta-item {
            display: flex;
            align-items: flex-start; /* Align text to top if multiple lines */
            margin-bottom: 25px; /* Spacing between meta items */
        }

        .aupp-event-meta-item i {
            font-size: 24px;
            color: #007bff; /* Blue icons */
            margin-right: 15px;
            width: 30px; /* Fixed width for icon alignment */
            text-align: center;
        }

        .aupp-event-meta-label {
            font-size: 15px;
            color: #6c757d; /* Lighter label color */
            margin-bottom: 5px;
            font-weight: 500;
        }

        .aupp-event-meta-value {
            font-size: 18px;
            color: #343a40; /* Stronger value color */
            font-weight: 600;
        }

        /* Register button (if re-enabled) */
        .aupp-event-register-btn {
            display: block;
            width: 100%;
            padding: 15px 20px;
            background-color: #28a745; /* Green for action button */
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .aupp-event-register-btn:hover {
            background-color: #218838; /* Darker green on hover */
            transform: translateY(-2px);
        }
    </style>

    <div class="aupp-event-detail-container">
        <a href="{{ url('/') }}" class="aupp-back-to-events">
            <i class="fas fa-arrow-left"></i> Back to Events
        </a>

        <div class="aupp-event-detail-header">
            <h1 class="aupp-event-detail-title">{{ $event->title }}</h1>
            @if($event->image_url)
                <img src="{{ $event->image_url }}"
                     alt="{{ $event->title }}"
                     class="aupp-event-detail-image">
            @else
                <div class="aupp-event-image-placeholder">No Image Available</div>
            @endif
        </div>

        <div class="aupp-event-detail-grid">
            <div class="aupp-event-detail-content">
                <div class="aupp-event-description">
                    {!! $event->description !!}
                </div>

                @if($event->gallery)
                <div class="aupp-event-gallery">
                    <h2>Event Gallery</h2>
                    <div class="gallery-grid">
                        @foreach($event->gallery as $image)
                        <div class="gallery-item">
                            <img src="{{ Storage::url($image) }}" alt="Event gallery image">
                        </div>
                        @endforeach
                    </div>
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
                                {{ $event->date->format('F j, Y') }}
                            </div>
                        </div>
                    </div>

                    <div class="aupp-event-meta-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <div class="aupp-event-meta-label">Time</div>
                            <div class="aupp-event-meta-value">
                                {{ $event->time->format('h:i A') }}
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

                {{-- <form action="{{ route('events.register', $event) }}" method="POST">
                    @csrf
                    <button type="submit" class="aupp-event-register-btn">
                        Register Now
                    </button>
                </form> --}}
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>
@include('frontend.footer')
