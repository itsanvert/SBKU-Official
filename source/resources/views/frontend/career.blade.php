@include('frontend.head')
@include('frontend.nav')
@php
$jobListings = [
    [
        'id' => 1,
        'title' => 'Senior Software Developer',
        'title_kh' => 'អ្នកអភិវឌ្ឍន៍កម្មវិធីជាន់ខ្ពស់',
        'department' => 'Information Technology',
        'department_kh' => 'បច្ចេកវិទ្យាព័ត៌មាន',
        'type' => 'Full-time',
        'type_kh' => 'ពេញម៉ោង',
        'location' => 'Phnom Penh',
        'location_kh' => 'ភ្នំពេញ',
        'description' => 'We are looking for an experienced Software Developer to join our IT team. The ideal candidate should have strong programming skills and experience with modern web technologies.',
        'description_kh' => 'យើងកំពុងស្វែងរកអ្នកអភិវឌ្ឍន៍កម្មវិធីដែលមានបទពិសោធន៍ដើម្បីចូលរួមក្នុងក្រុមអ៊ីធីរបស់យើង។ អ្នកដែលមានសមត្ថភាពគួរតែមានជំនាញក្នុងការសរសេរកម្មវិធី និងមានបទពិសោធន៍ជាមួយបច្ចេកវិទ្យាវេបទំនើបៗ។',
        'requirements' => [
            'Bachelor\'s degree in Computer Science or related field',
            '5+ years of experience in software development',
            'Strong knowledge of PHP, JavaScript, and MySQL',
            'Experience with Laravel framework',
            'Good communication skills in English'
        ],
        'requirements_kh' => [
            'ជាន់ខ្ពស់ផ្នែកវិទ្យាសាស្ត្រកុំព្យូទ័រ ឬវិស័យដែលពាក់ព័ន្ធ',
            'បទពិសោធន៍អស់យ៉ាងតិច ៥ឆ្នាំក្នុងការអភិវឌ្ឍន៍កម្មវិធី',
            'ចេះចាំច្បាស់លាស់អំពី PHP, JavaScript និង MySQL',
            'មានបទពិសោធន៍ជាមួយ Laravel framework',
            'មានជំនាញក្នុងការទំនាក់ទំនងជាភាសាអង់គ្លេស'
        ],
        'salary' => 'Competitive',
        'salary_kh' => 'ប្រាក់ខែគួរឱ្យចាប់អារម្មណ៍',
        'deadline' => '30 April 2024',
        'deadline_kh' => '៣០ មេសា ២០២៤'
    ],
    [
        'id' => 2,
        'title' => 'Marketing Manager',
        'title_kh' => 'អ្នកគ្រប់គ្រងទីផ្សារ',
        'department' => 'Marketing',
        'department_kh' => 'ទីផ្សារ',
        'type' => 'Full-time',
        'type_kh' => 'ពេញម៉ោង',
        'location' => 'Phnom Penh',
        'location_kh' => 'ភ្នំពេញ',
        'description' => 'We are seeking a creative and strategic Marketing Manager to lead our marketing initiatives and drive brand awareness.',
        'description_kh' => 'យើងកំពុងស្វែងរកអ្នកគ្រប់គ្រងទីផ្សារដែលមានភាពច្នៃប្រឌិត និងយុទ្ធសាស្ត្រដើម្បីដឹកនាំគំនិតផ្តួចផ្តើមទីផ្សាររបស់យើង និងជំរុញការយល់ដឹងអំពីម៉ាក។',
        'requirements' => [
            'Bachelor\'s degree in Marketing or related field',
            '3+ years of marketing experience',
            'Strong digital marketing skills',
            'Experience with social media management',
            'Excellent communication skills'
        ],
        'requirements_kh' => [
            'ជាន់ខ្ពស់ផ្នែកទីផ្សារ ឬវិស័យដែលពាក់ព័ន្ធ',
            'បទពិសោធន៍អស់យ៉ាងតិច ៣ឆ្នាំក្នុងវិស័យទីផ្សារ',
            'មានជំនាញខ្ពស់ក្នុងទីផ្សារឌីជីថល',
            'មានបទពិសោធន៍ក្នុងការគ្រប់គ្រងបណ្តាញសង្គម',
            'មានជំនាញខ្ពស់ក្នុងការទំនាក់ទំនង'
        ],
        'salary' => 'Competitive',
        'salary_kh' => 'ប្រាក់ខែគួរឱ្យចាប់អារម្មណ៍',
        'deadline' => '25 April 2024',
        'deadline_kh' => '២៥ មេសា ២០២៤'
    ],
    [
        'id' => 3,
        'title' => 'Academic Advisor',
        'title_kh' => 'អ្នកប្រឹក្សាសិក្សា',
        'department' => 'Academic Affairs',
        'department_kh' => 'កិច្ចការសិក្សា',
        'type' => 'Full-time',
        'type_kh' => 'ពេញម៉ោង',
        'location' => 'Phnom Penh',
        'location_kh' => 'ភ្នំពេញ',
        'description' => 'Join our academic team as an Academic Advisor to help students achieve their educational goals.',
        'description_kh' => 'ចូលរួមជាមួយក្រុមសិក្សារបស់យើងជាអ្នកប្រឹក្សាសិក្សាដើម្បីជួយសិស្ស-និស្សិតសម្រេចគោលដៅអប់រំរបស់ពួកគេ។',
        'requirements' => [
            'Master\'s degree in Education or related field',
            '2+ years of experience in academic advising',
            'Strong interpersonal skills',
            'Knowledge of higher education systems',
            'Bilingual in English and Khmer'
        ],
        'requirements_kh' => [
            'ជាន់ខ្ពស់ផ្នែកអប់រំ ឬវិស័យដែលពាក់ព័ន្ធ',
            'បទពិសោធន៍អស់យ៉ាងតិច ២ឆ្នាំក្នុងការប្រឹក្សាសិក្សា',
            'មានជំនាញខ្ពស់ក្នុងការទំនាក់ទំនងជាមួយអ្នកដទៃ',
            'ចេះចាំច្បាស់លាស់អំពីប្រព័ន្ធអប់រំឧត្តមសិក្សា',
            'ចេះភាសាអង់គ្លេស និងខ្មែរ'
        ],
        'salary' => 'Competitive',
        'salary_kh' => 'ប្រាក់ខែគួរឱ្យចាប់អារម្មណ៍',
        'deadline' => '20 April 2024',
        'deadline_kh' => '២០ មេសា ២០២៤'
    ]
];
@endphp

<div class="aupp-career-wrapper">
    <style>
        .aupp-career-wrapper {
            background: #f8f9fa;
            padding: 60px 20px;
            font-family: 'Montserrat', Arial, sans-serif;
        }
        .career-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .career-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .career-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #002855;
            margin-bottom: 1rem;
        }
        .career-subtitle {
            font-size: 1.2rem;
            color: #495057;
            max-width: 800px;
            margin: 0 auto;
        }
        .career-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }
        .job-listings {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .job-card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }
        .job-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #002855;
            margin-bottom: 0.5rem;
        }
        .job-meta {
            display: flex;
            gap: 1rem;
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .job-meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .job-meta-item i {
            color: #d72638;
        }
        .job-description {
            color: #495057;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        .job-requirements {
            margin-bottom: 1.5rem;
        }
        .job-requirements h4 {
            color: #002855;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }
        .job-requirements ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .job-requirements li {
            color: #495057;
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        .job-requirements li::before {
            content: '•';
            color: #d72638;
            position: absolute;
            left: 0;
        }
        .job-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e9ecef;
        }
        .job-salary {
            color: #002855;
            font-weight: 600;
        }
        .job-deadline {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .apply-btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #d72638;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s;
        }
        .apply-btn:hover {
            background: #b71c2c;
        }
        .enrollment-form {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            position: sticky;
            top: 2rem;
        }
        .enrollment-form h3 {
            color: #002855;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            color: #495057;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e9ecef;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #d72638;
            outline: none;
        }
        .form-select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e9ecef;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #fff;
            cursor: pointer;
        }
        .form-select:focus {
            border-color: #d72638;
            outline: none;
        }
        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: #d72638;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .submit-btn:hover {
            background: #b71c2c;
        }
        @media (max-width: 992px) {
            .career-grid {
                grid-template-columns: 1fr;
            }
            .enrollment-form {
                position: static;
                margin-top: 2rem;
            }
        }
        @media (max-width: 768px) {
            .aupp-career-wrapper {
                padding: 40px 15px;
            }
            .career-title {
                font-size: 2rem;
            }
            .job-header {
                flex-direction: column;
            }
            .job-meta {
                flex-wrap: wrap;
            }
        }
    </style>

    <div class="career-container" style="margin-top: 100px;">
        <div class="career-header">
            <h1 class="career-title">{{ __('Join Our Team') }}</h1>
            <p class="career-subtitle">{{ __('Discover exciting career opportunities at AUPP. We\'re looking for talented individuals who are passionate about education and making a difference.') }}</p>
        </div>

        <div class="career-grid">
            <div class="job-listings">
                @foreach($jobListings as $job)
                <div class="job-card">
                    <div class="job-header">
                        <div>
                            <h2 class="job-title">{{ app()->getLocale() == 'kh' ? $job['title_kh'] : $job['title'] }}</h2>
                            <div class="job-meta">
                                <span class="job-meta-item">
                                    <i class="fa fa-building"></i> {{ app()->getLocale() == 'kh' ? $job['department_kh'] : $job['department'] }}
                                </span>
                                <span class="job-meta-item">
                                    <i class="fa fa-clock"></i> {{ app()->getLocale() == 'kh' ? $job['type_kh'] : $job['type'] }}
                                </span>
                                <span class="job-meta-item">
                                    <i class="fa fa-map-marker-alt"></i> {{ app()->getLocale() == 'kh' ? $job['location_kh'] : $job['location'] }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="job-description">
                        {{ app()->getLocale() == 'kh' ? $job['description_kh'] : $job['description'] }}
                    </div>
                    <div class="job-requirements">
                        <h4>{{ __('Requirements:') }}</h4>
                        <ul>
                            @foreach($job['requirements'] as $key => $requirement)
                                <li>{{ app()->getLocale() == 'kh' ? $job['requirements_kh'][$key] : $requirement }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="job-footer">
                        <div>
                            <div class="job-salary">{{ __('Salary:') }} {{ app()->getLocale() == 'kh' ? $job['salary_kh'] : $job['salary'] }}</div>
                            <div class="job-deadline">{{ __('Application Deadline:') }} {{ app()->getLocale() == 'kh' ? $job['deadline_kh'] : $job['deadline'] }}</div>
                        </div>
                        <button class="apply-btn" onclick="showEnrollmentForm({{ $job['id'] }}, '{{ app()->getLocale() == 'kh' ? $job['title_kh'] : $job['title'] }}')">{{ __('Apply Now') }}</button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="enrollment-form">
                <h3>{{ __('Application Form') }}</h3>
                <form id="applicationForm" action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="job_id" id="job_id">
                    <input type="hidden" name="job_title" id="job_title">
                    
                    <div class="form-group">
                        <label for="full_name">{{ __('Full Name') }}</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">{{ __('Phone Number') }}</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="education">{{ __('Highest Education') }}</label>
                        <select class="form-select" id="education" name="education" required>
                            <option value="">{{ __('Select Education Level') }}</option>
                            <option value="bachelor">{{ __('Bachelor\'s Degree') }}</option>
                            <option value="master">{{ __('Master\'s Degree') }}</option>
                            <option value="phd">{{ __('PhD') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="experience">{{ __('Years of Experience') }}</label>
                        <select class="form-select" id="experience" name="experience" required>
                            <option value="">{{ __('Select Experience') }}</option>
                            <option value="0-2">{{ __('0-2 years') }}</option>
                            <option value="3-5">{{ __('3-5 years') }}</option>
                            <option value="5-10">{{ __('5-10 years') }}</option>
                            <option value="10+">{{ __('10+ years') }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="resume">{{ __('Resume/CV (PDF only)') }}</label>
                        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf" required>
                    </div>

                    <div class="form-group">
                        <label for="cover_letter">{{ __('Cover Letter') }}</label>
                        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">{{ __('Submit Application') }}</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showEnrollmentForm(jobId, jobTitle) {
            document.getElementById('job_id').value = jobId;
            document.getElementById('job_title').value = jobTitle;
            document.getElementById('applicationForm').scrollIntoView({ behavior: 'smooth' });
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</div>
@include('frontend.footer')
