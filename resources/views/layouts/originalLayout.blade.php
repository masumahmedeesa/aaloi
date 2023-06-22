<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'ALOY') }}</title> --}}
    <title>AALOI</title>

    @yield('extra')

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- <link rel="stylesheet" href="{{asset('css/animate.css')}}" /> -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}" />
    <!-- <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('css/slick.css')}}" /> -->
    <!-- <link rel="stylesheet" href="{{asset('css/all.css')}}" /> -->

    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />


    @yield('insideHead')

</head>

<body style="font-family: ubuntu;">
@include('include.oNav')

<div class="container">
    @include('include.message')
</div>
@yield('system')


@include('include.footer')

<!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#articleCkeditor'))
        .then(articleCkeditor => {
            console.log(articleCkeditor);
        })
        .catch(error => {
            // console.log(error);
        });
</script>
<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> -->
<!-- <script src="{{asset('js/popper.min.js')}}"></script> -->
<!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->

<!-- <script src="{{asset('js/jquery.magnific-popup.js')}}"></script> -->
<!-- <script src="{{asset('js/swiper.min.js')}}"></script> -->
<!-- <script src="{{asset('js/masonry.pkgd.js')}}"></script> -->
<!-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> -->
<!-- <script src="{{asset('js/slick.min.js')}}"></script> -->
<!-- <script src="{{asset('js/jquery.nice-select.min.js')}}"></script> -->
<!-- <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script> -->

<!-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> -->
<!-- <script src="{{asset('js/slick.min.js')}}"></script> -->
<!-- <script src="{{asset('js/navFooter.js')}}"></script> -->

<!-- <script src="{{asset('js/custom.js')}}"></script> -->

<!-- @yield('queryQuota') -->

</body>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#articleCkeditor'))
        .then(articleCkeditor => {
            console.log(articleCkeditor);
        })
        .catch(error => {
            // console.log(error);
        });
</script>
<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/navFooter.js')}}"></script>
@yield('queryQuota')

</html>