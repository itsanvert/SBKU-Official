@include('frontend.head')
@include('frontend.nav')
@include('frontend.slide')
<style>
  p{
    text-align: justify;
  }
  .title{
    font-size: 16px;
    color: blue;
  }
  .stage-future_member{
    margin-top: 20px;
  }
  .attachment img{
    height: auto;
  }
  .attachment__caption{
    text-align: center;
  }
</style>
<div class="auth-breadcrumb-wrap">
    <div class="container">
        <ol class="breadcrumb sabbi-breadcrumb list-unstyled list-inline">
            <li><a href="{{url('/')}}">{{ __('Home') }}</a></li>
            <li><a href="{{url('/page-news')}}">News</a></li>
        </ol>
    </div>
</div><!-- /.auth-breadcrumb-wrap -->
<section class="sabbi-section stage-future_member">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="sabbi-thumlinepost-card solitude-bg__x item">
                    <div class="sabbi-thumlinepost-card-meta">
                        <h2 class="meta-title ht-5" style="font-size:18px">@if(__('language')=='kh'){!! $page->title_kh !!}@else{!! $page->title_en !!}@endif</h2>
                        <p class="future_member-text" style="margin-bottom:15px">@if(__('language')=='kh'){!! $page->body_kh !!}@else{!! $page->body_en !!}@endif</p>
                          <p class="future_member-text" style="margin-bottom:15px">{!! $page->photos !!}</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-4">
                <article class="sabbi-thumlinepost-card solitude-bg__x item">
                    <address>
                        <div class="sabbi-thumlinepost-card-meta">
                            <h3 class="entry-title" style="text-align:center;font-size:18px">{{ __("SBKU's activity") }}</h3>
                            <ul class="event-list list-unstyled">
                              @foreach ($pages as $key => $value)
                                <li style="border-bottom: 1px solid black;padding: 3px;">
                                    <div class="title"><a href="{{ url("/page-detail&$value->id") }}">@if(__('language')=='kh'){{ $value->title_kh }}@else{{ $value->title_en }}@endif</a></div>
                                    <div class="date" style="font-size:12px;">{{ $value->created_at }}</div>
                                </li>
                              @endforeach
                            </ul>
                        </div>
                    </address>
                </article>
                {{-- <div class="footer-site-info">
                   <address>
                       <h3 class="entry-title">Latest Events</h3>
                       <ul class="event-list list-unstyled">
                           <li>
                               <h4 class="title"><a href="events_single.html">Study Tour and Christmas Trip</a></h4>
                               <div class="date">21st June 2016</div>
                           </li>
                           <li>
                               <h4 class="title"><a href="events_single.html">Mid Year Lab Party and Summer vacation</a></h4>
                               <div class="date">21st June 2016</div>
                           </li>
                           <li>
                               <h4 class="title"><a href="events_single.html">Science Award 2015-2016</a></h4>
                               <div class="date">21st June 2016</div>
                           </li>
                       </ul>
                       <div class="action-wrap"><a href="events.html" class="btn btn-unsolemn btn-action">View all Events</a></div>
                   </address>
               </div> --}}
            </div>
        </div>
    </div>
</section><!-- /.stage-future_member -->

@include('frontend.footer')
