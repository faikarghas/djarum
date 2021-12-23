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
        <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

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
                    <li><a href="{{route('inspiration')}}">INSPIRATIONS</a></li>
                    <li><a href="{{route('store')}}">STORE LOCATION</a></li>
                    <li><a href="{{route('testimonials')}}">TESTIMONIALS</a></li>
                    <li><a href="{{route('contact')}}">CONTACT</a></li>
                    <li><a href="{{route('membership')}}">MEMBERSHIP</a></li>
                </ul>
                <div class="lang">
                    <div class="lang-ind">
                        <a class="lang-init" href="">ENG</a>
                        <p>|</p>
                        <a href="">RUS</a>
                    </div>
                    <img class="btn-search" src="{{asset('images/search.png')}}" width="30px" alt="">
                </div>
            </div>
        </div>

        <footer>
            <div class="left">
                <div class="get forDesktop">
                    <h3>GET IN TOUCH</h3>
                    <a href="https://vk.com/club21798278" target="_blank" rel="noopener">FOLLOW US <span><img src="{{asset('images/logof.png')}}" width="15px" alt="" srcset=""></span></a>
                </div>
                <div>
                    <img class="kretek" src="{{asset('images/kreteworld 1.png')}}" width="155px" alt="" srcset="">
                    <br>
                    <a class="forMobile mb-5 color-white" href="https://vk.com/club21798278" target="_blank" rel="noopener">FOLLOW US <span><img src="{{asset('images/logof.png')}}" width="18px" alt="" srcset=""></span></a>
                    <p class="forDesktop copyright">© 2022 - KRETEK WORLD - All Rights Reserved.</p>
                </div>
            </div>
            <div class="right forDesktop-dflex">
                <ul>
                    <li><p>Sitemap</p></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>
                    <li><a href="{{route('kretek')}}">KRETEK COLLECTIONS</a></li>
                    <li><a href="{{route('inspiration')}}">INSPIRATIONS</a></li>
                    <li><a href="{{route('store')}}">STORE LOCATION</a></li>
                    <li><a href="{{route('testimonials')}}">TESTIMONIALS</a></li>
                    <li><a href="{{route('contact')}}">CONTACT</a></li>
                    <li><a href="{{route('membership')}}">MEMBERSHIP</a></li>
                </ul>
            </div>
            <div class="w-100">
                {{-- <p class="copyright">© 2022 - KRETEK WORLD - All Rights Reserved.</p> --}}
            </div>
        </footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="{{ asset('/js/vendor/anime-master/lib/anime.min.js') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR7cr-cpxNkX31I0EKrcujGCNz0KmcCZ8&callback=initMap" async defer></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        @yield('script')

    </body>
</html>


