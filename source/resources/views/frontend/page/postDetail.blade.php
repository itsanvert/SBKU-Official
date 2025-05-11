@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')

<style>
  /* University-themed design inspired by logo colors */
  body {
    font-family: 'Poppins', 'Segoe UI', Roboto, -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.7;
    color: #333333;
    background-color: #fffdf5;
  }
  
  /* Custom gradients and colors based on university logo */
  :root {
    --primary-red: #e30613;
    --primary-gold: #ffc70d;
    --accent-red-gradient: linear-gradient(135deg, #e30613 0%, #b30c10 100%);
    --accent-gold-gradient: linear-gradient(135deg, #ffc70d 0%, #f7a600 100%);
    --card-shadow: 0 10px 30px rgba(227, 6, 19, 0.08);
    --hover-transform: translateY(-6px) scale(1.005);
  }
  
  /* Animated breadcrumb with university colors */
  .breadcrumb-wrapper {
    background: var(--accent-red-gradient);
    padding: 30px 0;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    border-bottom: 4px solid var(--primary-gold);
  }
  
  .breadcrumb-wrapper::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5z' fill='%23ffffff' fill-opacity='0.15' fill-rule='evenodd'/%3E%3C/svg%3E");
    z-index: 1;
  }
  
  .breadcrumb-container {
    position: relative;
    z-index: 2;
  }
  
  .creative-breadcrumb {
    display: flex;
    padding: 0;
    margin: 0;
  }
  
  .creative-breadcrumb li {
    position: relative;
    margin-right: 30px;
    font-weight: 500;
  }
  
  .creative-breadcrumb li:not(:last-child):after {
    content: '';
    position: absolute;
    top: 50%;
    right: -20px;
    width: 10px;
    height: 10px;
    border-top: 2px solid var(--primary-gold);
    border-right: 2px solid var(--primary-gold);
    transform: translateY(-50%) rotate(45deg);
  }
  
  .creative-breadcrumb a {
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    padding: 5px 0;
    position: relative;
  }
  
  .creative-breadcrumb a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--primary-gold);
    transition: width 0.3s ease;
  }
  
  .creative-breadcrumb a:hover::after {
    width: 100%;
  }
  
  /* Main content styling with university-themed elements */
  .content-wrapper {
    position: relative;
    margin-bottom: 80px;
  }
  
  .content-wrapper::before {
    content: '';
    position: absolute;
    top: 20%;
    right: -5%;
    width: 300px;
    height: 300px;
    background: var(--accent-gold-gradient);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    opacity: 0.07;
    z-index: -1;
    animation: morphing 15s ease-in-out infinite;
  }
  
  .content-wrapper::after {
    content: '';
    position: absolute;
    bottom: 10%;
    left: -5%;
    width: 250px;
    height: 250px;
    background: var(--accent-red-gradient);
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    opacity: 0.07;
    z-index: -1;
    animation: morphing 18s ease-in-out infinite reverse;
  }
  
  @keyframes morphing {
    0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
    25% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
    50% { border-radius: 50% 60% 50% 40% / 40% 30% 60% 50%; }
    75% { border-radius: 40% 60% 30% 70% / 60% 40% 60% 30%; }
    100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
  }
  
  /* Modern post card with university styling */
  .post-article {
    background-color: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    margin-bottom: 40px;
    border-top: 4px solid var(--primary-red);
  }
  
  .post-article:hover {
    transform: var(--hover-transform);
    box-shadow: 0 15px 35px rgba(227, 6, 19, 0.12);
  }
  
  .post-article::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100px;
    background: var(--accent-gold-gradient);
    opacity: 0.15;
    border-radius: 0 0 0 100%;
    z-index: 1;
  }
  
  .post-header {
    padding: 40px 40px 20px;
    position: relative;
    z-index: 2;
  }
  
  .post-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 20px;
    background: var(--accent-red-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    line-height: 1.3;
  }
  
  .post-meta {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
    font-size: 14px;
    color: #64748b;
  }
  
  .post-meta .date {
    display: flex;
    align-items: center;
    padding: 6px 15px;
    background-color: #fff8e1;
    border-radius: 30px;
    font-weight: 500;
    border: 1px solid rgba(247, 166, 0, 0.2);
  }
  
  .post-meta .date i {
    margin-right: 6px;
    color: var(--primary-red);
  }
  
  .post-content {
    padding: 0 40px 40px;
    position: relative;
    z-index: 2;
  }
  
  .post-content p {
    margin-bottom: 20px;
    text-align: justify;
    color: #334155;
  }
  
  /* Enhanced image styling */
  .post-gallery {
    margin: 25px 0;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    border: 3px solid #fff;
    box-shadow: 0 5px 15px rgba(227, 6, 19, 0.1);
  }
  
  .post-gallery img {
    width: 100%;
    height: auto;
    transition: transform 0.7s ease;
    display: block;
  }
  
  .post-gallery:hover img {
    transform: scale(1.03);
  }
  
  .attachment__caption {
    text-align: center;
    font-size: 14px;
    color: #64748b;
    background-color: #fff8e1;
    padding: 12px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top: 1px solid rgba(247, 166, 0, 0.1);
  }
  
  /* Creative sidebar with university colors */
  .sidebar-wrapper {
    position: relative;
  }
  
  .sidebar {
    background-color: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--card-shadow);
    position: sticky;
    top: 30px;
    border-top: 4px solid var(--primary-gold);
  }
  
  .sidebar-header {
    padding: 25px 20px;
    background: var(--accent-gold-gradient);
    position: relative;
    overflow: hidden;
  }
  
  .sidebar-header::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 60%);
    animation: rotate 10s linear infinite;
  }
  
  @keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }
  
  .sidebar-title {
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #800000;
    margin: 0;
    position: relative;
    z-index: 2;
    text-shadow: 0 1px 2px rgba(255,255,255,0.3);
  }
  
  .activity-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .activity-list li {
    padding: 18px 20px;
    border-bottom: 1px solid #f5f5dc;
    transition: all 0.3s ease;
    position: relative;
  }
  
  .activity-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0;
    background: var(--accent-red-gradient);
    opacity: 0.1;
    transition: width 0.3s ease;
  }
  
  .activity-list li:hover::before {
    width: 5px;
  }
  
  .activity-list li:hover {
    background-color: #fff8e1;
  }
  
  .activity-list li:last-child {
    border-bottom: none;
  }
  
  .activity-list .title {
    margin-bottom: 8px;
  }
  
  .activity-list .title a {
    color: #333333;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  
  .activity-list .title a:hover {
    color: var(--primary-red);
  }
  
  .activity-list .date {
    font-size: 12px;
    color: #64748b;
    display: flex;
    align-items: center;
  }
  
  .activity-list .date::before {
    content: '';
    display: inline-block;
    width: 8px;
    height: 8px;
    background: var(--accent-red-gradient);
    border-radius: 50%;
    margin-right: 8px;
  }
  
  /* Special decorative elements */
  .university-corner-decoration {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 150px;
    height: 150px;
    background: var(--accent-gold-gradient);
    opacity: 0.05;
    border-radius: 100% 0 0 0;
    z-index: -1;
    pointer-events: none;
  }
  
  /* Responsive design */
  @media (max-width: 991px) {
    .post-header, .post-content {
      padding: 30px;
    }
    
    .post-title {
      font-size: 28px;
    }
    
    .sidebar-wrapper {
      margin-top: 40px;
    }
    
    .university-corner-decoration {
      display: none;
    }
  }
  
  @media (max-width: 767px) {
    .post-header, .post-content {
      padding: 25px;
    }
    
    .post-title {
      font-size: 24px;
    }
    
    .breadcrumb-wrapper {
      padding: 20px 0;
    }
    
    .content-wrapper::before,
    .content-wrapper::after {
      display: none;
    }
  }
</style>

<!-- Decorative Corner Element -->
<div class="university-corner-decoration"></div>

<!-- Creative Breadcrumb -->
<div class="breadcrumb-wrapper">
  <div class="container breadcrumb-container">
    <ol class="creative-breadcrumb list-unstyled list-inline">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><a href="{{url('/page-news')}}">News</a></li>
    </ol>
  </div>
</div>

<!-- Post Content Area -->
<section class="content-wrapper">
  <div class="container">
    <div class="row">
      <!-- Main Content -->
      <div class="col-lg-8">
        <article class="post-article">
          <div class="post-header">
            <h1 class="post-title">@if(__('language')=='kh'){!! $post->title_kh !!}@else{!! $post->title_en !!}@endif</h1>
            <div class="post-meta">
              <span class="date"><i class="far fa-calendar-alt"></i> {{ $post->created_at }}</span>
            </div>
          </div>
          <div class="post-content">
            <div class="post-text">@if(__('language')=='kh'){!! $post->content_kh !!}@else{!! $post->content_en !!}@endif</div>
            <div class="post-gallery">{!! $post->photos !!}</div>
          </div>
        </article>
      </div>
      
      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="sidebar-wrapper">
          <div class="sidebar">
            <div class="sidebar-header">
              <h3 class="sidebar-title">{{ __("SBKU's Activity")}}</h3>
            </div>
            <ul class="activity-list">
              @foreach ($posts as $key => $value)
              <li>
                <div class="title"><a href="{{ url("/page-detail&$value->id") }}">@if(__('language')=='kh'){!! $value->title_kh !!}@else{!! $value->title_en !!}@endif</a></div>
                <div class="date">{{ $value->created_at }}</div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('frontend.footer')