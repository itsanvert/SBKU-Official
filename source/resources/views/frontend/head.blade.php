<!DOCTYPE html>
<html class="no-js" lang="{{ session()->get('locale') ?? app()->getLocale() }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>{{ __('SAMDECH PREAH MAHASANGHARAJAH BOUR KRY UNIVERSITY') }}</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="icon" type="image/x-icon" href="{{ URL::to('assets/img/sbku_logo.ico') }}">
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">

    <!-- Tools -->
    <link href="{{ URL::to('assets/tools/sequence/css/sequence-theme.basic.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::to('assets/tools/dropdownhover/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/tools/dropdownhover/css/bootstrap-dropdownhover.min.css') }}" rel="stylesheet">

    <!-- site spec -->
    <link href="{{ URL::to('assets/tools/dropdownhover/css/bootstrap-dropdownhover.min.css') }}assets/tools/lightbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="{{ URL::to('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
{{--    <script src="{{ URL::to('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>--}}
    <script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.min.js' crossorigin = "anonymous"></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js' crossorigin = "anonymous"></script>
    <script src="{{ URL::to('assets/js/jquery.matchHeight-min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('fonts/fonts.css') }}">
</head>
