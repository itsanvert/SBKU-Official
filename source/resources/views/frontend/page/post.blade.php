@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')

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
    </div>
</section>

<style>
    .sabbi-thumlinepost-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        border: 1px solid rgba(0,0,0,0.1);
    }

    .sabbi-thumlinepost-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.12) !important;
    }

    .sabbi-thumlinepost-card-figure {
        overflow: hidden;
    }

    .sabbi-thumlinepost-card-figure img {
        transition: transform 0.3s ease;
    }

    .sabbi-thumlinepost-card:hover .sabbi-thumlinepost-card-figure img {
        transform: scale(1.05);
    }

    .overlay {
        opacity: 0.2;
        transition: opacity 0.3s ease;
    }

    .sabbi-thumlinepost-card:hover .overlay {
        opacity: 0.3;
    }

    .meta-title {
        font-size: 1.1rem;
        color: #002855;
        margin-bottom: 0.8rem;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .meta-text {
        font-size: 0.9rem;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .btn-primary {
        background-color: #d72638;
        border-color: #d72638;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #b71c2c;
        border-color: #b71c2c;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .meta-title {
            font-size: 1rem;
        }
        .meta-text {
            font-size: 0.85rem;
        }
    }
</style>

@include('frontend.footer')
