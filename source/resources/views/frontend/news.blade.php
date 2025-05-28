<section class="news-section-pro">
    <div class="news-container">
        <h2 class="news-title">{{ __('News') }}</h2>
        <div class="news-grid">
            @foreach ($posts as $value)
                <div class="news-card">
                    <div class="image-wrapper">
                        <img src="{{ asset("source/storage/app/public/{$value->banner}") }}"
                             alt="{{ app()->getLocale() == 'kh' ? $value->title_kh : $value->title_en }}"
                             class="news-image">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title-text">
                            {{ app()->getLocale() == 'kh' ? $value->title_kh : $value->title_en }}
                        </h3>
                        <div class="news-meta">
                            <i class="far fa-calendar-alt"></i>
                            {{ $value->created_at->format('d M Y') }}
                        </div>
                        <p class="news-excerpt">
                            {!! app()->getLocale() == 'kh' ? $value->excerpt_kh : $value->excerpt_en !!}
                        </p>
                        <a href="{{ url("/post-detail&$value->id") }}" class="news-btn">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Fonts and Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@400;700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</section>

<style>
/* Section Layout */
.news-section-pro {
    background: #f8fafc;
    padding: 80px 20px;
}

/* Container */
.news-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Title */
.news-title {
    font-family: 'Hanuman', serif;
    font-size: 2.75rem;
    font-weight: 800;
    color: #1e293b;
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}
.news-title::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: #2563eb;
    margin: 10px auto 0;
    border-radius: 4px;
}

/* Grid */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 2rem;
}

/* Card */
.news-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease-in-out;
    border: 1.5px solid #fca311;
}
.news-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 30px rgba(252, 163, 17, 0.3);
}

/* Image */
.image-wrapper {
    overflow: hidden;
    height: 220px;
}
.news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.news-card:hover .news-image {
    transform: scale(1.05);
}

/* Content */
.news-content {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.news-title-text {
    font-family: 'Hanuman', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 0.75rem;
    line-height: 1.4;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    -webkit-text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
}



.news-meta {
    font-size: 0.875rem;
    color: #64748b;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
}
.news-meta i {
    margin-right: 0.5rem;
    color: #2563eb;
}
.news-excerpt {
    font-family: 'Hanuman', serif;


    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    -webkit-text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
    flex: 1;
    margin-bottom: 1.5rem;

}

/* Button */
.news-btn {
    align-self: start;
    background-color: transparent;
    color: #d72638;
    border: 2px solid #d72638;
    padding: 0.5rem 1.25rem;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}
.news-btn:hover {
    background-color: #d72638;
    color: #fff;
}
</style>
