<!-- filepath: d:\xammp\htdocs\assets\source\resources\views\frontend\nav.blade.php -->
<body class="auth-theme-rashmore font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
  <header class="sabbi-site-head">
    <nav class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header" style="margin-top:10px;">
          <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
              class="icon-bar"></span> <span class="icon-bar"></span></button>
          <a class="navbar-brand" href="{{ url('/') }}"><img alt="" class="img-responsive" src="assets/img/site-logo.png" width="400"></a>
        </div>
        <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
          <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
            <li class="font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
              <a href="{{url('lang/kh')}}" title="English" style="color:red">ខ្មែរ</a>
            </li>
            <li class="font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
              <a href="{{url('lang/en')}}" title="English" style="color:red">English</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
            @foreach ($menuData->menu as $menu)
            @if(isset($menu->submenu))
            <li class="{{$menu->class}} font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" title="{{ $menu->title }}" data-animations="zoomIn">{{__($menu->name)}} <span class="caret"></span></a>
              <ul class=" dropdown-menu" role="menu">
                @foreach ($menu->submenu as $submenu)
                @if(isset($submenu->submenu))
                <li class="dropdown font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
                  <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" title="{{ $menu->title }}" data-animations="zoomIn">{{__($submenu->name)}} <span class="caret"></span></a>
                  <ul class=" dropdown-menu" role="menu">
                    @foreach ($submenu->submenu as $sub_menu)
                    <li class="font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
                      <a href="{{ url($sub_menu->url) }}" title="{{ $sub_menu->title }}">{{ __($sub_menu->name) }}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                @else
                <li class="font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
                  <a href="{{ url($submenu->url) }}" title="{{ $submenu->title }}">{{ __($submenu->name) }}</a>
                </li>
                @endif
                @endforeach
              </ul>
            </li>
            @else
            <li class="{{$menu->class}} font-hanuman" style="-webkit-text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased;">
              <a href="{{url($menu->url)}}" title="Home">{{__($menu->name)}}</a>
            </li>
            @endif
            @endforeach
        </div>
      </div>
    </nav><!-- /.navbar -->