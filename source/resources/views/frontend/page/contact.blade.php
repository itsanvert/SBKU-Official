<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@include('frontend.head')
@include('frontend.nav')

<style>
    /* Apply Hanuman font globally */
    body {
        font-family: "Hanuman", serif;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    .hanuman-regular {
        font-family: "Hanuman", serif;
        font-weight: 400;
    }

    .hanuman-bold {
        font-family: "Hanuman", serif;
        font-weight: 700;
    }

    .notification-card {
        border-left: 4px solid #198754;
        background-color: #f8f9fa;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .notification-card .card-body {
        display: flex;
        align-items: center;
    }

    .notification-icon {
        color: #198754;
        margin-right: 12px;
        font-size: 24px;
    }

    @keyframes fade-in {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
        animation: fade-in 0.5s ease-out;
    }
</style>

<body>
    <section class="contact-section py-5 hanuman-regular" style="padding-top: 150px;">
        <h1 class="text-center mb-5 hanuman-bold">{{ __('Contact Us') }}</h1>
        <div class="container py-5">
            <h2 class="text-center mb-5 hanuman-bold">{{ __('Get In Touch') }}</h2>

            <!-- Success Message -->
            @if (Session::has('msg'))
            <div class="row justify-content-center animate-fade-in">
                <div class="col-md-10">
                    <div class="card notification-card">
                        <div class="card-body py-3">
                            <i class="bi bi-check-circle-fill notification-icon"></i>
                            <div>
                                <h5 class="card-title mb-0 hanuman-bold">{{ __('Success') }}</h5>
                                <p class="card-text mb-0">{{ Session::get('msg') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row g-4">
                <!-- Contact Form Card -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <form action="{{ route('post-message') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Full Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('Your Name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('Your Email') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="{{ __('Message Subject') }}">
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">{{ __('Message') }}</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="{{ __('How can we help you?') }}" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg w-100 hanuman-regular mt-2" style=" margin-top: 10px;">{{ __('Submit Message') }}</button>                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information Card -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4 hanuman-bold">{{ __('Contact Information') }}</h3>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-geo-alt-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="hanuman-bold">{{ __('Address') }}</h5>
                                    <p class="mb-2">{{ __('Tropang Kraper Village, Krang Mkak Commune, Angk Snuol district, Kandal Province') }}</p>
                                    <p class="mb-0">{{ __('Roka Thum Village, Baek Chan Commune, Angk Snuol district, Kandal Province') }}</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-telephone-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="hanuman-bold">{{ __('Phone') }}</h5>
                                    <p class="mb-0">Call: 012 78 99 57 / 097 577 9 577 / 098 59 52 01</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="contact-icon text-primary me-3">
                                    <i class="bi bi-envelope-fill fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="hanuman-bold">{{ __('Email') }}</h5>
                                    <p class="mb-0"><a href="mailto:info@sbku.edu.kh" class="text-decoration-none">info@sbku.edu.kh</a></p>
                                </div>
                            </div>

                            <div class="social-links mt-5">
                                <h5 class="hanuman-bold">{{ __('Connect With Us') }}</h5>
                                <div class="d-flex gap-3 mt-3">
                                    <a href="https://web.facebook.com/sbkuuniversity" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="https://t.me/SBKUtelegram" class="btn btn-outline-primary rounded-circle">
                                        <i class="bi bi-telegram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="card shadow-sm border-0">
                        <div class="card-header text-black py-3">
                            <h3 class="mb-0 text-center hanuman-bold">{{ __('Find Our Campus') }}</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.google.com/maps/embed?pb=!4v1743797920369!6m8!1m7!1sSDIiPMkL83e--gVrstvGcg!2m2!1d11.4950986854781!2d104.7470557613159!3f244.5126725773414!4f13.007707862799876!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="card-footer bg-white p-3">
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-info-circle text-primary me-2"></i>
                                <p class="mb-0 hanuman-regular">{{ __('Click on the map to get directions to our campus') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Auto-dismiss notification after 5 seconds -->
    @if (Session::has('msg'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var notification = document.querySelector('.notification-card');
                if (notification) {
                    notification.style.transition = 'opacity 0.5s';
                    notification.style.opacity = '0';
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 500);
                }
            }, 5000);
        });
    </script>
    @endif
</body>

@include('frontend.footer')