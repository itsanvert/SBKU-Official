@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
@php
$eventId = request()->segment(2); // Get the event ID from URL

$events = [
    1 => [
        'image' => 'http://localhost/assets/source/storage/app/public/blog/6K04sIt61t1lzJvRa46MObssohftMU-meta4Z+hLmpwZw==-.jpg',
        'title' => '🎉 Sangkran AUPP 🎉',
        'date' => '11 April 2025',
        'time' => '10:00 AM to 10:00 PM',
        'location' => 'AUPP Campus',
        'description' => 'Join us for the biggest celebration of the Khmer New Year at AUPP! Experience traditional Khmer culture, music, dance performances, and delicious food. This event is open to all students, staff, and the community.',
        'organizer' => 'AUPP Student Life',
        'contact' => 'studentlife@aupp.edu.kh',
        'registration_required' => true,
        'registration_deadline' => '10 April 2025',
        'max_participants' => 500,
        'current_participants' => 350,
        'event_type' => 'Cultural Celebration',
        'target_audience' => 'All AUPP Students, Staff, and Community Members',
        'dress_code' => 'Traditional Khmer Attire Encouraged',
        'what_to_bring' => 'Water bottle, Camera, Traditional Games',
        'schedule' => [
            ['time' => '10:00 AM', 'activity' => 'Opening Ceremony'],
            ['time' => '11:00 AM', 'activity' => 'Traditional Dance Performances'],
            ['time' => '12:00 PM', 'activity' => 'Traditional Games'],
            ['time' => '2:00 PM', 'activity' => 'Cultural Workshops'],
            ['time' => '4:00 PM', 'activity' => 'Food Festival'],
            ['time' => '6:00 PM', 'activity' => 'Evening Entertainment'],
            ['time' => '10:00 PM', 'activity' => 'Closing Ceremony']
        ],
        'highlights' => [
            'Traditional Khmer Dance Performances',
            'Cultural Workshops',
            'Traditional Games',
            'Food Festival',
            'Live Music',
            'Cultural Exhibitions'
        ],
        'faq' => [
            [
                'question' => 'Is this event open to the public?',
                'answer' => 'Yes, this event is open to all AUPP students, staff, and community members.'
            ],
            [
                'question' => 'Do I need to register to attend?',
                'answer' => 'Yes, registration is required due to limited capacity. Please register before the deadline.'
            ],
            [
                'question' => 'Is there a dress code?',
                'answer' => 'Traditional Khmer attire is encouraged but not mandatory.'
            ],
            [
                'question' => 'Will food be provided?',
                'answer' => 'Yes, there will be a food festival with various traditional Khmer dishes available for purchase.'
            ]
        ]
    ],
    2 => [
        'image' => 'https://aupp.edu.kh/wp-content/uploads/2024/03/career-fair-2025.jpg',
        'title' => 'AUPP Career Fair Spring 2025',
        'date' => '27 March 2025',
        'time' => '1:45 PM - 3:15 PM',
        'location' => 'AUPP Campus - ATC',
        'description' => 'Connect with leading employers and explore exciting career opportunities at the AUPP Career Fair. Network with industry professionals, attend workshops, and discover your future career path.',
        'organizer' => 'AUPP Career Services',
        'contact' => 'careers@aupp.edu.kh',
        'registration_required' => true,
        'registration_deadline' => '25 March 2025',
        'max_participants' => 300,
        'current_participants' => 250,
        'event_type' => 'Career Development',
        'target_audience' => 'AUPP Students and Alumni',
        'dress_code' => 'Business Professional',
        'what_to_bring' => 'Resume, Business Cards, Portfolio',
        'schedule' => [
            ['time' => '1:45 PM', 'activity' => 'Opening Remarks'],
            ['time' => '2:00 PM', 'activity' => 'Company Presentations'],
            ['time' => '2:30 PM', 'activity' => 'Networking Session'],
            ['time' => '3:00 PM', 'activity' => 'Resume Review'],
            ['time' => '3:15 PM', 'activity' => 'Closing']
        ],
        'highlights' => [
            'Top Companies Recruitment',
            'Resume Review Sessions',
            'Career Counseling',
            'Networking Opportunities',
            'Industry Insights',
            'Job Application Support'
        ],
        'faq' => [
            [
                'question' => 'Who can attend the Career Fair?',
                'answer' => 'The event is open to all AUPP students and alumni.'
            ],
            [
                'question' => 'Do I need to bring my resume?',
                'answer' => 'Yes, please bring multiple copies of your updated resume.'
            ],
            [
                'question' => 'What companies will be present?',
                'answer' => 'Various leading companies from different industries will participate. The complete list will be shared before the event.'
            ],
            [
                'question' => 'Is there a dress code?',
                'answer' => 'Yes, business professional attire is required.'
            ]
        ]
    ],
    3 => [
        'image' => 'https://aupp.edu.kh/wp-content/uploads/2024/03/alumni-engagement-day.jpg',
        'title' => 'AUPP Alumni Engagement Day',
        'date' => '05 March 2025',
        'time' => '1:30 PM - 3:00 PM',
        'location' => 'AUPP Campus - ATC',
        'description' => 'Join us for a special day dedicated to connecting AUPP alumni. Share experiences, network with fellow graduates, and learn about opportunities to stay involved with the AUPP community.',
        'organizer' => 'AUPP Alumni Relations',
        'contact' => 'alumni@aupp.edu.kh',
        'registration_required' => true,
        'registration_deadline' => '03 March 2025',
        'max_participants' => 200,
        'current_participants' => 150,
        'event_type' => 'Alumni Networking',
        'target_audience' => 'AUPP Alumni',
        'dress_code' => 'Business Casual',
        'what_to_bring' => 'Business Cards, Alumni ID',
        'schedule' => [
            ['time' => '1:30 PM', 'activity' => 'Welcome Reception'],
            ['time' => '2:00 PM', 'activity' => 'Alumni Success Stories'],
            ['time' => '2:30 PM', 'activity' => 'Networking Session'],
            ['time' => '3:00 PM', 'activity' => 'Closing Remarks']
        ],
        'highlights' => [
            'Alumni Networking',
            'Success Stories Sharing',
            'Career Development',
            'Mentorship Opportunities',
            'Community Building',
            'Future Collaborations'
        ],
        'faq' => [
            [
                'question' => 'Who can attend this event?',
                'answer' => 'This event is exclusively for AUPP alumni.'
            ],
            [
                'question' => 'Do I need to register?',
                'answer' => 'Yes, registration is required to attend.'
            ],
            [
                'question' => 'Can I bring a guest?',
                'answer' => 'This event is for AUPP alumni only.'
            ],
            [
                'question' => 'Will there be refreshments?',
                'answer' => 'Yes, light refreshments will be provided.'
            ]
        ]
    ]
];

$event = $events[$eventId] ?? null;

if (!$event) {
    abort(404);
}
@endphp

<div class="aupp-event-detail-wrapper">
    <style>
        .aupp-event-detail-wrapper {
            background: #fff;
            padding: 40px 20px;
            font-family: 'Montserrat', Arial, sans-serif;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 80px;
        }
        .event-detail-header {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 12px;
        }
        .event-detail-image {
            flex: 1;
            max-width: 500px;
        }
        .event-detail-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .event-detail-info {
            flex: 1;
        }
        .event-detail-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #002855;
            margin-bottom: 1rem;
        }
        .event-detail-meta {
            margin-bottom: 1.5rem;
        }
        .event-detail-meta-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
            color: #002855;
        }
        .event-detail-meta-item i {
            color: #d72638;
            margin-right: 0.8rem;
            width: 20px;
        }
        .event-detail-section {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .event-detail-section h3 {
            color: #002855;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            border-bottom: 2px solid #d72638;
            padding-bottom: 0.5rem;
        }
        .event-detail-description p {
            color: #333;
            line-height: 1.8;
            font-size: 1.1rem;
        }
        .event-schedule {
            display: grid;
            gap: 1rem;
        }
        .schedule-item {
            display: flex;
            gap: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .schedule-time {
            font-weight: 600;
            color: #d72638;
            min-width: 100px;
        }
        .highlights-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        .highlight-item {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .highlight-item i {
            color: #d72638;
        }
        .faq-item {
            margin-bottom: 1rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }
        .faq-question {
            font-weight: 600;
            color: #002855;
            margin-bottom: 0.5rem;
        }
        .faq-answer {
            color: #666;
        }
        .event-detail-registration {
            background: #fff;
            border: 2px solid #d72638;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .registration-status {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .registration-progress {
            flex: 1;
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            margin: 0 1rem;
        }
        .registration-progress-bar {
            height: 100%;
            background: #d72638;
            border-radius: 4px;
            width: 70%;
        }
        .event-detail-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: #d72638;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1.1rem;
        }
        .event-detail-btn:hover {
            background: #b71c2c;
            transform: translateY(-2px);
        }
        .event-detail-btn.disabled {
            background: #6c757d;
            cursor: not-allowed;
        }
        @media (max-width: 768px) {
            .event-detail-header {
                flex-direction: column;
            }
            .event-detail-image {
                max-width: 100%;
            }
            .highlights-list {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="event-detail-header" style="padding-top: 100px;">
        <div class="event-detail-image">
            <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}">
        </div>
        <div class="event-detail-info">
            <h1 class="event-detail-title">{{ $event['title'] }}</h1>
            <div class="event-detail-meta">
                <div class="event-detail-meta-item">
                    <i class="fa fa-calendar"></i>
                    <span><strong>Date:</strong> {{ $event['date'] }}</span>
                </div>
                <div class="event-detail-meta-item">
                    <i class="fa fa-clock"></i>
                    <span><strong>Time:</strong> {{ $event['time'] }}</span>
                </div>
                <div class="event-detail-meta-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <span><strong>Location:</strong> {{ $event['location'] }}</span>
                </div>
                <div class="event-detail-meta-item">
                    <i class="fa fa-user"></i>
                    <span><strong>Organizer:</strong> {{ $event['organizer'] }}</span>
                </div>
                <div class="event-detail-meta-item">
                    <i class="fa fa-envelope"></i>
                    <span><strong>Contact:</strong> {{ $event['contact'] }}</span>
                </div>
                <div class="event-detail-meta-item">
                    <i class="fa fa-tag"></i>
                    <span><strong>Event Type:</strong> {{ $event['event_type'] }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="event-detail-section">
        <h3>About This Event</h3>
        <p>{{ $event['description'] }}</p>
    </div>

    <div class="event-detail-section">
        <h3>Event Schedule</h3>
        <div class="event-schedule">
            @foreach($event['schedule'] as $item)
            <div class="schedule-item">
                <span class="schedule-time">{{ $item['time'] }}</span>
                <span class="schedule-activity">{{ $item['activity'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="event-detail-section">
        <h3>Event Highlights</h3>
        <div class="highlights-list">
            @foreach($event['highlights'] as $highlight)
            <div class="highlight-item">
                <i class="fa fa-star"></i>
                <span>{{ $highlight }}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="event-detail-section">
        <h3>Additional Information</h3>
        <div class="event-detail-meta">
            <div class="event-detail-meta-item">
                <i class="fa fa-users"></i>
                <span><strong>Target Audience:</strong> {{ $event['target_audience'] }}</span>
            </div>
            <div class="event-detail-meta-item">
                <i class="fa fa-tshirt"></i>
                <span><strong>Dress Code:</strong> {{ $event['dress_code'] }}</span>
            </div>
            <div class="event-detail-meta-item">
                <i class="fa fa-suitcase"></i>
                <span><strong>What to Bring:</strong> {{ $event['what_to_bring'] }}</span>
            </div>
        </div>
    </div>

    <div class="event-detail-section">
        <h3>Frequently Asked Questions</h3>
        @foreach($event['faq'] as $faq)
        <div class="faq-item">
            <div class="faq-question">{{ $faq['question'] }}</div>
            <div class="faq-answer">{{ $faq['answer'] }}</div>
        </div>
        @endforeach
    </div>

    @if($event['registration_required'])
    <div class="event-detail-registration">
        <h3>Registration</h3>
        <div class="registration-status">
            <span>{{ $event['current_participants'] }} / {{ $event['max_participants'] }} registered</span>
            <div class="registration-progress">
                <div class="registration-progress-bar" style="width: {{ ($event['current_participants'] / $event['max_participants']) * 100 }}%"></div>
            </div>
        </div>
        <p><strong>Registration Deadline:</strong> {{ $event['registration_deadline'] }}</p>
        @if($event['current_participants'] < $event['max_participants'])
            <a href="#" class="event-detail-btn">Register Now</a>
        @else
            <button class="event-detail-btn disabled">Registration Full</button>
        @endif
    </div>
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>
@include('frontend.footer')