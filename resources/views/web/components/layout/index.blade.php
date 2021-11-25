<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Djarum</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

        @yield('custom-css')

    </head>
    <body>
        @yield('header')
        @yield('main')

        <div class="cf"></div>

        <div class="menu__showcase">
            <div class="box">
                <img class="btn-close" src="{{asset('images/close.png')}}" alt="">
                <ul>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="{{route('kretek')}}">KRETEK COLLECTIONS</a></li>
                    <li><a href="{{route('inspiration')}}">INSPIRATION</a></li>
                    <li><a href="{{route('store')}}">STORE LOCATION</a></li>
                    <li><a href="{{route('testimonials')}}">TESTIMONIALS</a></li>
                    <li><a href="{{route('contact')}}">CONTACT</a></li>
                    <li><a href="{{route('membership')}}">MEMBERSHIP</a></li>
                </ul>
                <div class="lang">
                    <a class="lang-init" href="">ENG</a>
                    <p>|</p>
                    <a href="">RUS</a>
                    <img class="btn-search" src="{{asset('images/search.png')}}" width="30px" alt="">
                </div>
            </div>
        </div>

        <footer>
            <div class="left">
                <div class="get">
                    <h3>GET IN TOUCH</h3>
                    <h4>FOLLOW US <span><img src="{{asset('images/logof.png')}}" width="15px" alt="" srcset=""></span></h4>
                </div>
                <img class="kretek" src="{{asset('images/kreteworld 1.png')}}" width="155px" alt="" srcset="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem maxime voluptate eveniet, nemo incidunt perferendis officia aperiam ab veniam autem?</p>
            </div>
            <div class="right">
                <ul>
                    <li><p>Sitemap</p></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="{{route('kretek')}}">KRETEK COLLECTIONS</a></li>
                    <li><a href="{{route('inspiration')}}">INSPIRATION</a></li>
                    <li><a href="{{route('store')}}">STORE LOCATION</a></li>
                    <li><a href="{{route('contact')}}">CONTACT</a></li>
                </ul>
            </div>
        </footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/vendor/anime-master/lib/anime.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        @yield('script')

    </body>
</html>

