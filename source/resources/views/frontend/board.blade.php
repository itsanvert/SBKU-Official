@php($samdech=App\Models\Display::find(10))
@php($sivadthana=App\Models\Display::find(11))
@php($somnoble=App\Models\Display::find(12))
@php($sophorn=App\Models\Display::find(13))

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    .board-section {
        padding: 8rem 0;
        background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    .board-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
        z-index: 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 5rem;
        position: relative;
        z-index: 2;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        background: linear-gradient(45deg, #1e40af, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
        font-family: 'Hanuman', serif;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    .board-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2.5rem;
        padding: 1rem;
        position: relative;
        z-index: 1;
    }

    .member-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        aspect-ratio: 3/4;
    }

    .member-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
    }

    .member-image {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .member-image::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.8));
        opacity: 0;
        transition: opacity 0.6s ease;
    }

    .member-card:hover .member-image::after {
        opacity: 1;
    }

    .member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .member-card:hover .member-image img {
        transform: scale(1.1) rotate(-2deg);
    }

    .member-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 2rem;
        background: linear-gradient(to top, 
            rgba(0,0,0,0.98) 0%, 
            rgba(0,0,0,0.85) 50%, 
            transparent 100%);
        color: white;
        transform: translateY(65%);
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .member-card:hover .member-info {
        transform: translateY(0);
    }

    .member-name {
        font-family: 'Hanuman', serif;
        font-size: 1.35rem;
        font-weight: 700;
        letter-spacing: 0.02em;
        margin-bottom: 1rem;
        color: #ffffff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        line-height: 1.4;
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    .member-role {
        font-family: 'Hanuman', serif;
        font-size: 1rem;
        line-height: 1.8;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        color: rgba(255,255,255,0.95);
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
    }

    .member-card:hover .member-role {
        opacity: 1;
        transform: translateY(0);
    }

    .social-links {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
    }

    .member-card:hover .social-links {
        opacity: 1;
        transform: translateY(0);
    }

    .social-link {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background: #3b82f6;
        transform: translateY(-3px);
    }

    @media (max-width: 1200px) {
        .board-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        .board-grid {
            grid-template-columns: repeat(1, 1fr);
        }
        
        .section-title {
            font-size: 2.25rem;
        }
        
        .member-card {
            aspect-ratio: 4/5;
        }

        .member-info {
            padding: 1.5rem;
        }

        .member-name {
            font-size: 1.25rem;
        }

        .member-role {
            font-size: 0.95rem;
        }
    }
    .member-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1.5rem;
        background: linear-gradient(to top, 
            rgba(0,0,0,0.95) 0%, 
            rgba(0,0,0,0.85) 50%, 
            transparent 100%);
        color: white;
        transform: translateY(45%);  /* Adjusted to show more of the name */
        transition: transform 0.4s ease;
        text-align: center;  /* Center align all text */
    }

    .member-name {
        font-family: 'Hanuman', serif;
        font-size: 1.1rem;
        font-weight: 700;
        line-height: 1.6;
        margin-bottom: 0.5rem;
        color: #ffffff;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        -webkit-text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        padding: 0 0.5rem;
    }

    /* Specific styles for Khmer names */
    [lang="kh"] .member-name {
        font-size: 1rem;
        line-height: 1.8;
        letter-spacing: 0;
    }

    @media (max-width: 768px) {
        .member-name {
            font-size: 1rem;
        }
        
        [lang="kh"] .member-name {
            font-size: 0.95rem;
        }
    }

    // ...rest of existing styles...

</style>

<section class="board-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title">{{ __('Boards of Directors') }}</h2>
        </div>

        <div class="board-grid">
            <!-- Member 1 - Monk -->
            <div class="member-card" data-aos="fade-up" data-aos-delay="100">
                <div class="member-image">
                    <img src="{{ asset('assets/img/profile/boarddirector1.jpg') }}" 
                         alt="សម្តេចព្រះមហាឃោសានន្ទ ញឹម" 
                         loading="lazy">
                </div>
                <div class="member-info">
                    <h3 class="member-name">
                        @if(__('language')=='kh')
                            {!! $samdech->title_kh !!}
                        @else
                            {!! $samdech->title_en !!}
                        @endif
                    </h3>
                    <div class="member-role">
                        @if(__('language')=='kh')
                            {!! $samdech->body_kh !!}
                        @else
                            {!! $samdech->body_en !!}
                        @endif
                    </div>
                </div>
            </div>

            <!-- Member 2 - With Glasses -->
            <div class="member-card" data-aos="fade-up" data-aos-delay="200">
                <div class="member-image">
                    <img src="{{ asset('assets/img/profile/boarddirector2.jpg') }}" 
                         alt="ឯកឧត្តម សាយខី ស៊ីថុល" 
                         loading="lazy">
                </div>
                <div class="member-info">
                    <h3 class="member-name">
                        @if(__('language')=='kh')
                            {!! $sivadthana->title_kh !!}
                        @else
                            {!! $sivadthana->title_en !!}
                        @endif
                    </h3>
                    <div class="member-role">
                        @if(__('language')=='kh')
                            {!! $sivadthana->body_kh !!}
                        @else
                            {!! $sivadthana->body_en !!}
                        @endif
                    </div>
                </div>
            </div>

            <!-- Member 3 - With Mask -->
            <div class="member-card" data-aos="fade-up" data-aos-delay="300">
                <div class="member-image">
                    <img src="{{ asset('assets/img/profile/boarddirector3.jpg') }}" 
                         alt="ឯកឧត្តមបណ្ឌិតសភាចារ្យ បិុន" 
                         loading="lazy">
                </div>
                <div class="member-info">
                    <h3 class="member-name">
                        @if(__('language')=='kh')
                            {!! $somnoble->title_kh !!}
                        @else
                            {!! $somnoble->title_en !!}
                        @endif
                    </h3>
                    <div class="member-role">
                        @if(__('language')=='kh')
                            {!! $somnoble->body_kh !!}
                        @else
                            {!! $somnoble->body_en !!}
                        @endif
                    </div>
                </div>
            </div>

            <!-- Member 4 - With Mask -->
            <div class="member-card" data-aos="fade-up" data-aos-delay="400">
                <div class="member-image">
                    <img src="{{ asset('assets/img/profile/boarddirector4.jpg') }}" 
                         alt="ឯកឧត្តម តាំង សក្កដា" 
                         loading="lazy">
                </div>
                <div class="member-info">
                    <h3 class="member-name">
                        @if(__('language')=='kh')
                            {!! $sophorn->title_kh !!}
                        @else
                            {!! $sophorn->title_en !!}
                        @endif
                    </h3>
                    <div class="member-role">
                        @if(__('language')=='kh')
                            {!! $sophorn->body_kh !!}
                        @else
                            {!! $sophorn->body_en !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
</script>