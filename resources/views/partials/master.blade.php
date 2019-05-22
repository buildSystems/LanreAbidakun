<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>


        @yield('extra-css')


        <!-- Styles -->
        
        <!-- Scripts -->

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/animate.css">
        <link rel="stylesheet" type="text/css" href="/css/fontawesome/all.css">
        <script src="/js/jquery3.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/popper.js"></script>
        
        <!-- jquery -->
         <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        
        <!-- popper -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

        <!-- bootstrap css -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

        <!-- bootstrap js -->
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-50oBUHEmvpQ4-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

        
        <!-- fontawesome -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

        <!-- animate.css-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

        <!--recaptcha-->
        <!-- <script src="https://www.google.com/reCAPTCHA/api.js" async defer></script> -->
        
        <!-- my stylesheets -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/themefy/themify-icons.css" rel="stylesheet">
        <link href="/css/lanre.css" rel="stylesheet">

        <script src="/js/app.js" defer></script>
        <script src="/js/lanre.js" defer></script>
        

        <!-- Add favicon -->
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>


    </head>
    <body>
        <div id="app">
            @yield('navigation')

            <main>
                @yield('content')
            </main>

            <footer>
                @yield('footer')
            </footer>
            <div class="scroll-top hide"><i class="fas fa-angle-up" style="font-size: 1.5em; line-height: 50px;"></i>
            </div>
        </div>
        @include('partials.mobile-nav')
        
        <!-- @if(session('success'))
            @include('partials.flash')
        @endif -->
        
    </body>
</html>
