<!DOCTYPE html>
<html lang="de">
    <head>
        <!-- meta data
        =============================================================================================================-->
        <!-- set content type and charset -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="UTF-8" />

        <!-- set viewport for responsive design -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- set author and description -->
        <meta name="author" content="Christian Bauer" />
        <meta name="description" content="Müllbot und -kalender" />

        <!-- favicon -->
        <!-- TODO: insert favicon -->


        <!-- site title
        =============================================================================================================-->
        <title>Müllkalender</title>


        <!-- style sheets
        =============================================================================================================-->
        <!-- app css file with bootstrap and fontawesome -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" content="text/css" />

        <!-- livewire style sheets -->
        @livewireStyles

        <!-- custom css file -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" content="text/css" />

        <!-- section for additional styles on specific sites -->
        @yield('additional_css')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-light">
                <div class="container">
                    <a href="/" class="navbar-brand">
                        <img src="{{ asset('img/logo.svg') }}" alt="logo" width="auto" height="24" class="d-inline-block align-text-top">
                        M&uuml;llkalender
                    </a>
                </div>
            </nav>
        </header>

        <!-- site content -->
        <main class="container mt-3">
            @yield('content')
        </main>

        <!-- include jquery scripts -->
        <script src="{{ asset('js/jquery.js') }}" content="text/javascript"></script>
        <!-- include app javascript with bootstrap and fontawesome -->
        <script src="{{ asset('js/app.js') }}" content="text/javascript"></script>
        <!-- include livewire scripts -->
        @livewireScripts
        <!-- include custom javascript -->
        <script src="{{ asset('js/custom.js') }}" content="text/javascript"></script>
        <!-- section for additional javascript on specific sites -->
        @yield('additional_js')
    </body>
</html>
