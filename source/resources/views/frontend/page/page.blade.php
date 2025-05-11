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
</style>

<section class="deff-timeline-section">
        <div class="container">
            <div class="auth-deff_timeline_timeline-segment">
                <ul class="auth-deff_timeline list-unstyled">
                  @foreach ($posts as $key => $value)
                    <li>
                        <div class="time-span">
                        <img src='{{ asset("source/storage/app/public") }}/{{ $value->banner }}' alt="" class="img-responsive img-thumpost">
                        </div>
                        <div class="timeline-meta">
                          <a href='{{ url("/page-detail&$value->id") }}'  <h3 class="staff-title">{{$value->title}}</h3></a>
                            <div class="__time">{{ date_format($value->created_at,"d-m-Y") }}</div>
                            <p class="meta-text">{{$value->excerpt}}</p>
                        </div>
                    </li><!-- /timeline-item -->
                  @endforeach
                </ul><!-- /.auth-deff_timeline -->
            </div>
        </div>
    </section>
@include('frontend.footer')
