<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="utf-8" />
        <title>Poly Haven</title>
        <meta name="description" content="The Public 3D Asset Library" />
        <meta name="keywords" content="Arch-viz,Game,Unreal,Unity,Blender,Maya,Max,free,cc0,creative commons" />
        <meta name="author" content="Poly Haven" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="rgb(234, 91, 12)" />
        <link rel="canonical" href="index.html" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Poly Haven • Poly Haven" />
        <meta property="og:description" content="The Public 3D Asset Library" />
        <meta property="og:url" content="index.html" />
        <meta property="og:site_name" content="Poly Haven" />
        <meta property="og:image" content="{{asset('cdn.polyhaven.com/site_images/home/window_rend1007.jpg?width=630')}}" />
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="@polyhaven" />
        <meta property="twitter:image" content="{{asset('cdn.polyhaven.com/site_images/home/window_rend1007.jpg?width=630')}}" />
        <meta name="next-head-count" content="18" />
        <link rel="icon" href="favicon.ico" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" />
        <link rel="stylesheet" href="{{asset('cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Poly Haven" />
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
        <meta content="utf-8" http-equiv="encoding" />
        <meta name="theme-color" content="rgb(190, 111, 255)" />
        <meta property="commit_hash" content="7c0423dfb5ef6240c946a3ec0ea511ef9e8a4917" />
        <script src="{{asset('download-js/ua-parser.min.js')}}"></script>
        <script src="{{asset('download-js/zip.js')}}"></script>
        <script src="{{asset('download-js/download.js')}}"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-D4YXRFPL5Z"></script>
        <script data-ad-client="ca-pub-2284751191864068" async src="{{asset('pagead2.googlesyndication.com/pagead/js/f.txt')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }

            gtag("consent", "default", {
                ad_storage: "denied",
                analytics_storage: "denied",
            });

            gtag("js", new Date());
            gtag("config", "G-D4YXRFPL5Z", {
                page_path: window.location.pathname,
            });
        </script>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link rel="preload" href="{{asset('_next/static/css/f9c060e45cadad4c.css')}}" as="style" />
        <link rel="stylesheet" href="{{asset('_next/static/css/f9c060e45cadad4c.css')}}" data-n-g />
        <link rel="preload" href="{{asset('_next/static/css/80dfbeb1e8fca219.css')}}" as="style" />
        <link rel="stylesheet" href="{{asset('_next/static/css/80dfbeb1e8fca219.css')}}" data-n-p />
        <link rel="preload" href="{{asset('_next/static/css/d559538603f5352f.css')}}" as="style" />
        <link rel="stylesheet" href="{{asset('_next/static/css/d559538603f5352f.css')}}" data-n-p />
        <link rel="preload" href="{{asset('_next/static/css/c934ba4fc5b0df3e.css')}}" as="style" />
        <link rel="stylesheet" href="{{asset('_next/static/css/c934ba4fc5b0df3e.css')}}" data-n-p />
        <noscript data-n-css></noscript>
        <script defer nomodule src="{{asset('_next/static/chunks/polyfills-78c92fac7aa8fdd8.js')}}"></script>
        <script src="{{asset('_next/static/chunks/webpack-73e54862943620ad.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/framework-aec4381329cec0e4.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/main-af75fc7f4d2f8fc6.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/pages/_app-cc8b82eacd17ef87.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/d0447323-d30ab890110b88b8.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/9734-cd5034aa3923ecfb.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/8966-4a58755092780ae2.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/6413-71fe32d1a8a1804d.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/2010-76ad865dc6f9247f.js')}}" defer></script>
        <script src="{{asset('_next/static/chunks/pages/index-ca46a3e2433e85d3.js')}}" defer></script>
        <script src="{{asset('_next/static/7c0423dfb5ef6240c946a3ec0ea511ef9e8a4917/_buildManifest.js')}}" defer></script>
        <script src="{{asset('_next/static/7c0423dfb5ef6240c946a3ec0ea511ef9e8a4917/_ssgManifest.js')}}" defer></script>
        <style data-href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0C4k.woff) format("woff");
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: normal;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1y4k.woff) format("woff");
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0370-03FF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-mu0SC55I.woff2) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+1F00-1FFF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0370-03FF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu0SC55K5gw.woff2) format("woff2");
                unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-stretch: 100%;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v36/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-mu0SC55I.woff2) format("woff2");
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }
            .Slider_wrapper__cK0mf h1 {
    position: relative;
    font-size: 3rem !important;
    white-space: nowrap;
    margin: 2rem 1rem 0.5rem;
    z-index: 4;
}
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        @stack('js')
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
