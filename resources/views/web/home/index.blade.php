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
                <img class="bg" src="{{asset('images/bannerpsd 2.jpg')}}" alt="">
                <img class="img_on_bg" src="{{asset('images/Banner.png')}}" alt="">
                <div class="box_banner">
                    <div class="left">
                        <img src="{{asset('images/djblack1.png')}}" alt="" srcset="">
                    </div>
                    <div class="right">
                        <h3>Kretek for Authenticity/for Vigor/for Pride/for Boldness</h3>
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
                <img class="img_on_bg" src="{{asset('images/Banner.png')}}" alt="">
                <div class="box_banner">
                    <div class="left">
                        <img src="{{asset('images/djblack1.png')}}" alt="" srcset="">
                    </div>
                    <div class="right">
                        <h3>Kretek for Authenticity/for Vigor/for Pride/for Boldness</h3>
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
                        <h3>Most people believe that what you wear defines your personality. There are times when you decide to dress in a certain way in order to express something about your inner self. Similar to fashion, Kretek from Djarum allows you to express yourself in a unique and authentic way through its distinctive taste and aroma. A piece of Kretek, that was previously hidden and unseen may now be more. Nowadays, Kretek can possibly be worn to enhance your appearance. Through its unique taste and aroma, Kretek can speak about your authentic personality as well. </h3>
                    </div>
                    <a class="read_all_testimonials" href="{{route('kretek')}}">READ ALL TESTIMONIALS</a>
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
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing your vigor. </p>
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
                                <p>An exotic line of cigarillos made with chopped cloves, a wooden mouthpiece, and a natural tobacco leaf wrapper. Choose your Kretek Cigarillos now!</p>
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
                                <p>Exceptional product manufactured in Indonesia that come from ancestral heritage receipe. A special collection of six distinct aroma’s derived from handpicked tobacco leaves, sauces, and spices from the Indonesian island of Java.</p>
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
                    <select class="form-select select-city" aria-label="Default select example">
                        <option selected>CITY</option>
                        @foreach ($listCity as $item)
                            <option data-id="{{$item->city}}" value="{{$item->city}}">{{$item->city}}</option>
                        @endforeach
                    </select>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>METRO</option>
                    </select>
                    <select class="form-select select-store" aria-label="Default select example">
                        <option selected>STORE NAME</option>
                    </select>
                    <button class="btn-search-now">SEARCH NOW</button>
                </form>
            </div>
            <div class="right">
                <div id="googleMap" class="h-100"></div>
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

    <script>
        $( document ).ready(function() {
            var base_url = window.location.origin;

            $('.header_slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
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

            $('.select-city').each(function name(params) {
                $(this).on('change',function (params) {
                    let idenCity = $(this).find("option:selected").attr('data-id')

                    $.ajax({
                        type: "GET",
                        url: `${base_url}/api-store-name/api/${idenCity}`,
                        data: "",
                        cache: false,
                        success: function(result){
                            $('.select-store').empty()
                            $('.select-store').append('<option selected>STORE NAME</option>')

                            result.data.map((i,a)=>{
                                $('.select-store').append(`<option value="${i.store_name}" data-id="${i.store_name}">${i.store_name}</option>`)
                            })
                        }
                    });
                })
            })

            var locations = [];

            $('.btn-search-now').on('click',function name(e) {
                e.preventDefault()

                let city = $('.select-city').find(":selected").text();
                let store = $('.select-store').find(":selected").text();
                let url = `${base_url}/api-store-location/api/${city}/${store}`;

                if (store == 'STORE NAME') {
                    url = `${base_url}/api-store-location/api/${city}`;
                } else {
                    url = `${base_url}/api-store-location/api/${city}/${store}`;
                }

                $.ajax({
                        type: "GET",
                        url: url,
                        data: "",
                        cache: false,
                        success: function(result){
                            locations = []
                            result.data.map((i,a)=>{
                                locations.push([i.address,i.coordinate.split(',')[0],i.coordinate.split(',')[1]])
                            })
                            initialize([locations[0][1],locations[0][2]])
                        }
                });

            })
            function initialize(cor=[59.975352, 30.407865]) {

                var map = new google.maps.Map(document.getElementById('googleMap'), {
                    zoom: 10,
                    center: new google.maps.LatLng(cor[0], cor[1]),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#212121"
                            }]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [{
                            "visibility": "off"
                            }]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                            "color": "#212121"
                            }]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#9e9e9e"
                            }]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "stylers": [{
                            "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#bdbdbd"
                            }]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#181818"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#616161"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                            "color": "#1b1b1b"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [{
                            "color": "#2c2c2c"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#8a8a8a"
                            }]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#373737"
                            }]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#3c3c3c"
                            }]
                        },
                        {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#4e4e4e"
                            }]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#616161"
                            }]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#000000"
                            }]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#3d3d3d"
                            }]
                        }
                    ]
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }

            initialize()

        });
    </script>
@endsection