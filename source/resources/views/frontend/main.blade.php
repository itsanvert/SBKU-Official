@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')

<section class="sabbbi-section home-info mt_10">
  <div class="container text-center">
    <img alt="Intro Visual" class="img-fluid" src="{{ asset('assets/img/human.gif') }}">
  </div>
</section>

{{-- Section with Event  --}}
  @include('events.index')






{{-- Blog Post Grid --}}
@include('frontend.news')


{{-- Additional Sections --}}
@include('frontend.statistic')
@include('frontend.vision')
@include('frontend.board')
@include('frontend.page.mou')

@include('frontend.footer')

