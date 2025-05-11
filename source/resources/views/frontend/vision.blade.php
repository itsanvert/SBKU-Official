@php($message=App\Models\Display::find(6))
@php($vision=App\Models\Display::find(7))
@php($about=App\Models\Display::find(8))
@php($scholarship=App\Models\Display::find(9))
<section class="sabbi-section section-selected_publication">
    <div class="container">
        <div class="selected_pulication-wrap">
            <div class="row">
                <div class="col-sm-4" style="text-align: justify">
                    <div class="entry-meta">
                        <h2 class="stage-title">@if(__('language')=='kh'){!! $vision->title_kh !!}@else{!! $vision->title_en !!}@endif</h2>
                        <p class="entry-meta-text">
                          @if(__('language')=='kh'){!! $vision->body_kh !!}@else{!! $vision->body_en !!}@endif
                         </p>
                        <h2 class="stage-title">@if(__('language')=='kh'){!! $scholarship->title_kh !!}@else{!! $scholarship->title_en !!}@endif</h2>
                        <p class="entry-meta-text">
                          @if(__('language')=='kh'){!! $scholarship->body_kh !!}@else{!! $scholarship->body_en !!}@endif
                         </p>
                    </div><!-- /.entry-meta -->
                </div>
                <aside class="col-sm-8">
                    <div class="paper_cut">
                      <div class="pub-item with-icon">
                          <div class="elem-wrapper">
                              <i class="ion-ios-paper-outline"></i>
                          </div>
                          <div class="content-wrapper">
                              <h3 class="title mb_0" style="font-size: 16px; font-weight: bold;">@if(__('language')=='kh'){!! $message->title_kh !!}@else{!! $message->title_en !!}@endif</h3>
                              <div class="slc_des">
                                  <div class="authr" style="text-align: justify">
                                    @if(__('language')=='kh'){!! $message->body_kh !!}@else{!! $message->body_en !!}@endif
                                  </div>
                              </div>
                          </div>
                      </div>
                        <div class="pub-item with-icon">
                            <div class="elem-wrapper">
                                <i class="ion-ios-paper-outline"></i>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="title mb_0" style="font-size: 16px; font-weight: bold;">@if(__('language')=='kh'){!! $about->title_kh !!}@else{!! $about->title_en !!}@endif</h3>
                                <div class="slc_des">
                                    <div class="authr" style="text-align: justify">
                                      @if(__('language')=='kh'){!! $about->body_kh !!}@else{!! $about->body_en !!}@endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="pub-item with-icon">
                            <div class="elem-wrapper">
                                <i class="ion-ios-paper-outline"></i>
                            </div>
                            <div class="content-wrapper">
                                <h3 class="title mb_0" style="font-size: 16px; font-weight: bold">អាហារូបករណ៍សិក្សា</h3>
                                <div class="slc_des">
                                    <div class="authr">សាកលវិទ្យាល័យសម្តេចព្រះមហាសង្ឃរាជ បួរ គ្រី ផ្តល់អាហារូបករណ៍១០០%
                                        ដោយស្វ័យប្រវត្តិ ដល់និស្សិតគ្រប់រូប លើគ្រប់មុខជំនាញ រហូតដល់បញ្ចប់ការ
                                        សិក្សា។</div>
                                </div>
                                <div class="description">
                                    <a class="link-with-icon" href="#" target="black"><i class="ion-ios-browsers-outline"></i>សមណនិស្សិត-និស្សិតមានកាតព្វកិច្ចចូលរួមបរិច្ចាគជួយឧបត្ថម្ភ
                                        ទឹក-ភ្លើង ១០$​/ខែ  ៦០$/ឆមាស  ១២០$/ឆ្នាំ
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div><!-- /.paper_cut -->
                </aside>
            </div>
        </div><!-- /.selected_pulication-wrap -->
    </div>
</section><!-- /.section-selected_publication -->
