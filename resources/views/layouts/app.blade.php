<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Jost:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="preloader">
            <button class="th-btn style3 preloaderCls">Cancel Preloader</button>
            <div class="preloader-inner"><span class="loader"></span></div>
        </div>
        
        <div id="wrapper">
            @livewire('common.header')
            <div id="content" role="main" class="no-padding">
                {{ $slot }}
            </div>
            @livewire('common.footer')
        </div>    

        @stack('modals')

        @livewireScripts

        <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
