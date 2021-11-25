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
    <header>
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
                    <div class="box_red">
                        <div>
                            <h4>Mikhail Dimitry</h4>
                            <p>29 year old</p>
                            <p>St. Petersburg</p>
                        </div>
                        <div>
                            <a>READ OTHER REVIEW</a>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="caption">
                        <img class="kutip-l" src="{{asset('images/kutip.png')}}" width="20px" alt="" srcset="">
                        <h3>A PIECE OF KRETEK CIGARETTE, WHICH WAS PREVIOUSLY ONLY A TREAT BETWEEN TWO FINGERS, MAY NOW BE MORE. KRETEK CAN POSSIBLY BE WORN TO ENHANCE YOUR APPEARANCE. THROUGH ITS UNIQUE TASTE ANDAROMA, KRETEK CAN SPEAK ABOUT YOUR AUTHENTIC PERSONALITY AS WELL.</h3>
                        <div class="text-end">
                            <img class="kutip-r" src="{{asset('images/kutip.png')}}" width="20px" alt="" srcset="">
                        </div>
                    </div>
                    <div class="video_yt">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/AU3W-_N0GyE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="section__second">
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
                                <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
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
                                <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
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
                                <a class="to_all_products" href="">SEE ALL PRODUCT LINE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <img src="{{asset('images/peta 1.png')}}" alt="" srcset="">
            </div>
        </section>

        <section class="section__fourth">
            <div class="sf-header">
                <h2>INSPIRATIONS</h2>
                <p>SEE ALL ARTICLES</p>
            </div>
            <div class="inspiration__wrapper">
                <div class="ins-box">
                    <img src="{{asset('images/foto1.png')}}" alt="">
                    <div class="box">

                    </div>
                </div>
                <div class="ins-box">
                    <img src="{{asset('images/foto2.png')}}" alt="">
                    <div class="box">

                    </div>
                </div>
                <div class="ins-box">
                    <img src="{{asset('images/foto3.png')}}" alt="">
                    <div class="box">

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $('.header_slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
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
                variableWidth: true
            });

            $('.btn-search-now').on('click',function () {
                e.preventDefault()
            })

        });
    </script>
@endsection