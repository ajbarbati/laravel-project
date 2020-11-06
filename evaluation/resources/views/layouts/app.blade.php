<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'LAPP')}}</title>

        <!-- Fonts --> 
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}"> 
        {{-- <script type="text/javascript" src="{{ asset("js/app.js") }}"><script> --}}
    </head>
    <body >
            @include('includes.nav')
            <div class="container">
                @yield('content')
            </div>
    </body>

</html>

