<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/styles.css?v=2')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/app.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <link rel="stylesheet" href="{{asset('admin_assets/plugins/summernote/summernote-bs4.min.css')}}">
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
            <link href="{{asset('admin_assets/bower_components/jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('admin_assets/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        @livewireStyles
        <script type="text/javascript">
          var base_url = "{!!url('/')!!}"
          var images_limit = 1
        </script>
        <!-- Scripts -->
        @stack('css')
    </head>
    <body class="nav-fixed">
        <input type="hidden" id="user-type" value="{!! Auth::user()->role !!}">
        <livewire:admin.common.navbar />
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <livewire:admin.common.sidebar />    
            </div>
            <div id="layoutSidenav_content">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div> 

        @stack('modals')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/datatables/datatables-simple-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin_assets/js/litepicker.js')}}"></script>
        <script src="{{asset('admin_assets/assets/js/dynamic-form.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{asset('admin_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{asset('admin_assets/bower_components/jquery.filer/js/jquery.filer.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.dataTables.min.js')}}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js"></script>
        <script>
            window.onload = () => {
                Alpine.start();

                // Handle client-side navigation
                window.addEventListener('turbo:load', () => {
                    Alpine.start();
                });
            };
        </script>

        @stack('js')
    </body>
</html>
