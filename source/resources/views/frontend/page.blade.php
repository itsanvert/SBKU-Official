@include('head')
@include('banner')
@include('nav')
@include('scrollbar')
{{--@include('slide_news')--}}
<div class="container text-center" style="background-color: #f3f0f0">
    <div class="row">
        <div class="col-sm-8" style="text-align:justify;">
            <div class="row" id="content"
                 style="border: 1px solid #e8e8e8; margin-top: 5px;background-color: #ffffffff;padding-left: 10px;padding-right: 10px; padding-top: 10px">
                {!! $pages->body !!}
            </div>
        </div>
        @include('sidebar')
    </div>
</div>
@include('footer')
