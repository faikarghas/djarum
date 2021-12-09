@extends('web/components/layout.index')
@section('header')
    <menu>
        <a href="{{route('home')}}">
            <img src="{{asset('images/kreteworld 1.png')}}" width="276px" alt="" srcset="">
        </a>
        <div id="menu-hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </menu>
    <header class="forDesktop">
        {{-- <img class="v-img" src="{{asset('images/Vector2.png')}}" alt=""> --}}
        <div class="header_slider">
            <div class="header_slider_item">
                <img class="bg" src="{{asset('images/bannerpsd 2.png')}}" alt="">
                <img class="img_on_bg" src="{{asset('images/Banner.png')}}" alt="">
                <div class="box_banner">
                    <div class="left">
                        <img src="{{asset('images/djblack1.png')}}" alt="" srcset="">
                    </div>
                    <div class="right">
                        <h3>KRETEK FROM DJARUM ALLOWS YOU TO EXPRESS YOURSELF IN A UNIQUE AND AUTHENTIC WAY THROUGH ITS DISTINCTIVE TASTE AND AROMA. </h3>
                    </div>
                </div>
            </div>
            <div class="header_slider_item">
                <img class="bg" src="{{asset('images/bannerpsd 2.png')}}" alt="">
                <img class="img_on_bg" src="{{asset('images/Banner.png')}}" alt="">
                <div class="box_banner">
                    <div class="left">
                        <img src="{{asset('images/djblack1.png')}}" alt="" srcset="">
                    </div>
                    <div class="right">
                        <h3>KRETEK FROM DJARUM ALLOWS YOU TO EXPRESS YOURSELF IN A UNIQUE AND AUTHENTIC WAY THROUGH ITS DISTINCTIVE TASTE AND AROMA. </h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="forMobile header-mobile">
        <div class="header_slider">
            <div class="header_slider_item">
                <img src="{{asset('images/bannerpsd 2m.png')}}" alt="">
                <div class="box_banner">
                    <div class="left">
                        <img src="{{asset('images/djblack1.png')}}" alt="" srcset="">
                    </div>
                    <div class="right">
                        <h3>KRETEK FROM DJARUM ALLOWS YOU TO EXPRESS YOURSELF IN A UNIQUE AND AUTHENTIC WAY THROUGH ITS DISTINCTIVE TASTE AND AROMA. </h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('main')
    <main page="home">
        <section class="section__first">
            <div class="smoke_bg"><img src="{{asset('images/smoke.jpg')}}" alt="" srcset=""></div>
            <div class="title__sf">
                <h2>HERE TO <span>STAND OUT</span>,</h2>
                <h2>NOT TO BLEND IN.</h2>
            </div>
            <div class="box__sf">
                <div class="left">
                    <img src="{{'images/Djarum_kretek2 1.png'}}" alt="">
                </div>
                <div class="right">
                    <div class="caption">
                        <h3>A PIECE OF KRETEK CIGARETTE, WHICH WAS PREVIOUSLY ONLY A TREAT BETWEEN TWO FINGERS, MAY NOW BE MORE. KRETEK CAN POSSIBLY BE WORN TO ENHANCE YOUR APPEARANCE. THROUGH ITS UNIQUE TASTE ANDAROMA, KRETEK CAN SPEAK ABOUT YOUR AUTHENTIC PERSONALITY AS WELL.</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__second forDesktop">
            <img class="v-img" src="{{asset('images/Vector2.png')}}" alt="">
            <div class="slider__products">
                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <h3 class="title">KRETEK CIGARETTE</h3>
                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                            <div class="description">
                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                <a class="to_all_products" href="{{route('kretek')}}">SEE ALL PRODUCT LINE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <h3 class="title">KRETEK CIGARILLO</h3>
                            <img class="bg" src="{{asset('images/bg-djarumruby.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_ruby.png')}}" width="100%" alt="" srcset="">
                            <div class="description">
                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                <a class="to_all_products" href="{{route('kretek')}}">SEE ALL PRODUCT LINE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <h3 class="title">KRETEK SHISHA</h3>
                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_shisha.png')}}" width="100%" alt="" srcset="">
                            <div class="description">
                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                <a class="to_all_products" href="{{route('kretek')}}">SEE ALL PRODUCT LINE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__second forMobile">
            <h2 class="titleM">KRETEK COLLECTIONS</h2>
            <img class="v-img" src="{{asset('images/Vector2.png')}}" alt="">
            <div class="slider__products">
                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                        </div>
                        <div class="description">
                            <h3 class="title">KRETEK CIGARETTE</h3>
                            <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                            <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
                        </div>
                    </div>
                </div>

                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <img class="bg" src="{{asset('images/bg-djarumruby.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_ruby.png')}}" width="100%" alt="" srcset="">
                        </div>
                        <div class="description">
                            <h3 class="title">KRETEK CIGARILLO</h3>
                            <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                            <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
                        </div>
                    </div>
                </div>

                <div class="slider__products-item">
                    <div class="item__wrapper">
                        <div class="box">
                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="" srcset="">
                            <img class="product" src="{{asset('images/Djarum_shisha.png')}}" width="100%" alt="" srcset="">
                        </div>
                        <div class="description">
                            <h3 class="title">KRETEK SHISHA</h3>
                            <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                            <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
                        </div>
                    </div>
                </div>


            </div>
            {{-- <img class="asep-img" src="{{asset('images/asep 3.png')}}" alt=""> --}}
        </section>


        <section class="section__third">
            <div class="left">
                <h3>STORE LOCATOR</h3>
                <form action="">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>CHOOSE CITY</option>
                        <option value="1">One</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>CHOOSE METRO</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>CHOOSE STORE TYPE</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="btn-search-now">SEARCH NOW</button>
                </form>
            </div>
            <div class="right">
                <div id="map"></div>
                {{-- <img src="{{asset('images/peta 1.png')}}" alt="" srcset=""> --}}
            </div>
        </section>

        <section class="section__fourth">
            <div class="sf-header">
                <h2>INSPIRATIONS</h2>
                <p class="forDesktop">SEE ALL ARTICLES</p>
            </div>
            <div class="inspiration__wrapper slider-inpiration">
                <div class="ins-box">
                    <img src="{{asset('images/foto1.png')}}" alt="">
                    <div class="box">
                        <span>02 November 2021</span>
                        <div>
                            <p>3 minutes reading</p>
                            <a href="">READ NOW</a>
                        </div>
                    </div>
                </div>
                <div class="ins-box">
                    <img src="{{asset('images/foto2.png')}}" alt="">
                    <div class="box">
                        <span>02 November 2021</span>
                        <div>
                            <p>3 minutes reading</p>
                            <a href="">READ NOW</a>
                        </div>
                    </div>
                </div>
                <div class="ins-box">
                    <img src="{{asset('images/foto3.png')}}" alt="">
                    <div class="box">
                        <span>02 November 2021</span>
                        <div>
                            <p>3 minutes reading</p>
                            <a href="">READ NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCT4Omb8kNS-CKd0NYmGw129_BVyGVoB3E" type="text/javascript"></script>
    <script>
        $( document ).ready(function() {
            $('.header_slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
            });

            $(window).scroll(function (event) {
                let scroll = $(document).scrollTop();

                $('.img_on_bg').css('transform',`translateY(${scroll * 2 / 5}px)`)
                // $('.section__first').css('transform',`translateY(${-scroll * 2 / 20 }px)`)
                // $('.section__first title__sf').css('transform',`translateY(${scroll * 2 / 20 + 50}px)`)

            });

            $('.slider__products').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                variableWidth: true,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        variableWidth: false,
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        variableWidth: false,
                    }
                    }
                ]
            });

            $('.slider-inpiration').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                variableWidth: false,
                arrows:false,
                responsive: [
                    {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1
                    }
                    }
                ]
            });

            $('.btn-search-now').on('click',function () {
                e.preventDefault()
            })

            const directionsService = new google.maps.DirectionsService();
            const directionsDisplay = new google.maps.DirectionsRenderer();
            const uluru = { lat: -6.280008964188023, lng:  106.70123074866336 };
            const mapOptions = {
              zoom:12,
              center: uluru
            }

            function initMap() {

                const map = new google.maps.Map(document.getElementById('map'), mapOptions);
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });

            }

            initMap()

        });
    </script>
@endsection