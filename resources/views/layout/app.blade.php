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
        <!-- bootstrap css file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

        <!-- custom css file -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" content="text/css" />

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
        <main class="container">
            @yield('content')
        </main>

        <!-- include bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- include custom javascript -->
        <script src="{{ asset('js/app.js') }}" content="text/javascript"></script>
        <!-- section for additional javascript on specific sites -->
        @yield('additional_js')
    </body>
</html>
