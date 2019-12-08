<!DOCTYPE html>
<html style="min-height: 100%" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>{{config('app.name','WebProg')}}</title>
    </head>
    <body style="margin: 0;  height: 100%; padding: 0">
        @include('inc.navbar')
        <div class="container">
            @yield('content') 
        </div>  
        <div>
            <footer id="footer" class="py-4 bg-dark text-white-50">
            @include('inc.footer')
        </footer>
        </div>
    </body>
</html>

