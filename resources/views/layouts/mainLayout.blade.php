<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'AALOI') }}</title> --}}
    <title>AALOI</title>


    <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('insideHead')

</head>

<body style="font-family: ubuntu;">
    @include('include.navbar')

    <div class="container">
        @include('include.message')
    </div>
    @yield('system')



    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#articleCkeditor'))
        .then(articleCkeditor => {
            console.log("articleCkeditor");
        })
        .catch(error => {
            console.log("error");
        });
    </script>

@yield('more_js')

</body>

</html>
