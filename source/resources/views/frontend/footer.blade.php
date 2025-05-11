<footer class="section-footer mt_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-site-info">
                    <header>
                        <a class="footer-brand" href="#"><img alt="" class="img-responsive" src="assets/img/site-logo.png"></a>
                    </header>
                    <address>
                        <h3 class="entry-title">{{ __('Address1') }}</h3>
                        <div class="address-entry">
                            {{-- <p class="__adtext">វត្តព្រះឥន្ទសាមគ្គីធម៌
                                 </p> --}}
                            <p class="__ad-num">{{ __('Tropang Kraper Village, Krang Mkak Commune, Angk Snuol district, Kandal Province') }}</p>
                            {{-- <p class="__ad-num">ខេត្តកណ្តាល</p>--}}
                        </div>
                    </address>
                    <address>
                        <h3 class="entry-title">{{ __('Address2') }}</h3>
                        <div class="address-entry">
                            <p class="__adtext">{{ __('Roka Thum Village, Baek Chan Commune, Angk Snuol district, Kandal Province') }}</p>
                            {{-- <p class="__ad-num">ខេត្តកណ្តាល</p>--}}
                        </div>
                    </address>
                    <footer class="contact-info">
                        <h3 class="entry-title">{{ __('Contact phone number') }}</h3>
                        <p class="__ad-num">Call: <span>012 78 99 57 / 097 577 9 577 </span></p>
                        <p class="__ad-num"> 098 59 52 01</p>
                        <p class="__ad-num">Email: <span>info@sbku.edu.kh</span></p>
                    </footer>
                </div>
            </div>
            <div>

            </div>
            <div class="col-sm-8 font-hanuman">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-2">
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title font-hanuman">{{__('News and Events')}}</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">{{__('International Exchange')}}</a></li>
                                    <li><a href="#">{{__('Interns & Volunteers')}}</a></li>
                                    <li><a href="#">{{__('Announcement')}}</a></li>
                                    <li><a href="#">{{__('Career Opportunities')}}</a></li>
                                    <li><a href="#">{{__('Scholarships & Grants')}}</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title font-hanuman">{{__('Admission')}}</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">{{__('Intakes')}}</a></li>
                                    <li><a href="#">{{__('Academic Calendar')}}</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-5">
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title font-hanuman">{{__('IACO (International Affairs and Cooperation)')}}</h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">{{__('International Education Center')}}</a></li>
                                    <li><a href="#">{{__('International Affairs and Cooperation')}}</a></li>
                                </ul>
                            </div>
                        </section>
                        <section class="widget widget_sec">
                            <div class="widget-main">
                                <h2 class="widget-title font-hanuman">{{__('Other')}} </h2>
                                <ul class="list list-unstyled list-footer-nav">
                                    <li><a href="#">{{__('Alumni')}}</a></li>
                                    <li><a href="{{ url('/admin') }}">{{__('E-mail Log-in')}}</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="site-footer-bar" class="footer-bar mt_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="widget_black_studio_tinymce" id="black-studio-tinymce-4">
                        <div class="copyright">Copyright {{ date('Y') }} - <a href="#">{{ __('SAMDECH PREAH MAHASANGHARAJAH BOUR KRY UNIVERSITY') }}</a></div>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="powredby">Developed and Managed by: <a href="#">San Bunna</a></div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /.section-footer -->
<style>
    .item {
        /*float:left;*/
        /*width:150px;*/
        /*border:1px solid #ccc;*/
        /*margin-right:15px;*/
    }
</style>
<script>
    // $(document).ready(function(){
    //     $('.container .box').matchHeight();
    // })
    $(document).ready(function() {
        $('.item').matchHeight({});
    });
</script>
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
<script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<!-- tools -->
<script src="{{ URL::to('assets/tools/sequence/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::to('assets/tools/sequence/js/hammer.min.js') }}"></script>
<script src="{{ URL::to('assets/tools/sequence/js/sequence.min.js') }}"></script>
<script src="{{ URL::to('assets/tools/lightbox/ekko-lightbox.min.js') }}"></script>
<script src="{{ URL::to('assets/tools/dropdownhover/js/bootstrap-dropdownhover.min.js') }}"></script>

<!-- site-spec -->
<script src="{{ URL::to('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/plugins.js') }}"></script>
<script src="{{ URL::to('assets/js/main.js') }}"></script> <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

{{-- <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script> --}}
</body>

</html>