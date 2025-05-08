@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')

<section class="sabbbi-section home-info mt_10">
  <div class="container text-center">
    <img alt="Intro Visual" class="img-fluid" src="{{ asset('assets/img/human.gif') }}">
  </div>
</section>
  @include('frontend.page.event')



{{-- Section with Hero Image (optional) --}}


{{-- Blog Post Grid --}}
<section class="sabbbi-section home-info mt_10">
  
  <div class="container">
    <div class="row g-4">
      @foreach ($posts as $key => $value)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex">
          <article class="sabbi-thumlinepost-card shadow-sm rounded overflow-hidden w-100 d-flex flex-column">
            {{-- Thumbnail --}}
            <figure class="sabbi-thumlinepost-card-figure position-relative">
              <img src="{{ asset("source/storage/app/public/{$value->banner}") }}"
                   alt="post banner"
                   class="img-fluid w-100"
                   style="height: 180px; object-fit: cover;">
              <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark"></div>
            </figure>

            {{-- Meta Info --}}
            <div class="sabbi-thumlinepost-card-meta p-3 d-flex flex-column flex-grow-1">
              <h2 class="meta-title hanuman-bold" style="text-align: justify;">
                {{ app()->getLocale() == 'kh' ? $value->title_kh : $value->title_en }}
              </h2>
              <p class="meta-text hanuman-regular text-muted flex-grow-1" style="text-align: justify; overflow: hidden;">
                {!! app()->getLocale() == 'kh' ? $value->excerpt_kh : $value->excerpt_en !!}
              </p>
              <a href="{{ url("/post-detail&$value->id") }}" class="btn btn-primary btn-sm mt-2 w-100 hanuman-regular">
                {{ __('Read More') }}
              </a>
            </div>
          </article>
        </div>
      @endforeach
    </div>

    {{-- Conference Section --}}
    @include('frontend.conference')
  </div>
</section>

{{-- Additional Sections --}}
@include('frontend.statistic')
@include('frontend.vision')
@include('frontend.board')
@include('frontend.page.mou')
@include('frontend.footer')

<style>
  .sabbi-thumlinepost-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .sabbi-thumlinepost-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  }

  .sabbi-thumlinepost-card-figure {
    overflow: hidden;
    position: relative;
  }

  .sabbi-thumlinepost-card-figure img {
    transition: transform 0.3s ease;
  }

  .sabbi-thumlinepost-card:hover .sabbi-thumlinepost-card-figure img {
    transform: scale(1.05);
  }

  .overlay {
    background: rgba(0, 0, 0, 0.4);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .sabbi-thumlinepost-card:hover .overlay {
    opacity: 1;
  }

  .meta-title {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 0.5rem;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }

  .meta-text {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.5;
    max-height: 4.5em;
  }

  .btn-primary {
    background-color: #2563eb;
    border-color: #2563eb;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #1d4ed8;
    border-color: #1d4ed8;
  }

  /* Responsive columns handled by Bootstrap (no need for manual media queries) */
</style>

{{-- News Grid Section --}}
<style>
.news-section-pro {
    background: #f8fafc;
    padding: 80px 0;
    position: relative;
}

.news-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.news-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 3rem;
    position: relative;
}

.news-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #2563eb;
    border-radius: 2px;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-bottom: 2rem;
}

.news-card {
    background: #ffffff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.news-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-image {
    transform: scale(1.05);
}

.news-content {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.news-title-text {
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

.news-meta {
    display: flex;
    align-items: center;
    color: #64748b;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

.news-meta i {
    margin-right: 0.5rem;
    color: #2563eb;
}

.news-excerpt {
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

.news-readmore {
    margin-top: auto;
}

.news-btn {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    background: #2563eb;
    color: #ffffff;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.news-btn:hover {
    background: #1d4ed8;
    transform: translateX(5px);
}

@media (max-width: 1024px) {
    .news-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}

@media (max-width: 768px) {
    .news-section-pro {
        padding: 60px 0;
    }
    
    .news-title {
        font-size: 2rem;
    }
    
    .news-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .news-image {
        height: 200px;
    }
}
</style>

<section class="news-section-pro">
    <div class="news-container">
        <h2 class="news-title">Latest News</h2>
        <div class="news-grid">
            @foreach ($posts as $key => $value)
                <div class="news-card">
                    <img src="{{ asset("source/storage/app/public/{$value->banner}") }}" alt="post banner" class="news-image">
                    <div class="news-content">
                        <div class="news-title-text">
                            {{ app()->getLocale() == 'kh' ? $value->title_kh : $value->title_en }}
                        </div>
                        <div class="news-meta">
                            <i class="far fa-calendar-alt"></i>
                            {{ $value->created_at->format('d M Y') }}
                        </div>
                        <div class="news-excerpt">
                            {!! app()->getLocale() == 'kh' ? $value->excerpt_kh : $value->excerpt_en !!}
                        </div>
                        <div class="news-readmore">
                            <a href="{{ url("/post-detail&$value->id") }}" class="news-btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</section>
