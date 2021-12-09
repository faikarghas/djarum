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
@endsection
@section('main')
    <main page="kretekCollection">
        <section class="section__first">
            <div class="product__item">
                <div class="left">
                    <div class="cs-kretek">
                        <div class="nav" role="tablist">
                            <h2>KRETEK COLLECTION</h2>
                            <a class="btn-collapse-cs nav-link active" data-target="#kretek-cigarette" id="nav-cigarette-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarette" type="button" role="tab" aria-controls="nav-cigarette" aria-selected="true">
                                KRETEK CIGARETTE
                            </a>
                            <div class="collapse" id="kretek-cigarette">
                                <p class="first_p">Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                <div class="slider-product forMobile">
                                    <div class="product_item">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <span>10 kreteks per pack</span>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_item">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <span>10 kreteks per pack</span>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-cigarillo" class="nav-link" id="nav-cigarillo-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarillo" type="button" role="tab" aria-controls="nav-cigarillo" aria-selected="false">
                                KRETEK CIGARILLO
                            </a>
                            <div class="collapse" id="kretek-cigarillo">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-shisha">
                                KRETEK SHISHA
                            </a>
                            <div class="collapse" id="kretek-shisha">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right forDesktop">
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-cigarette" role="tabpanel" aria-labelledby="nav-cigarette-tab">
                            <div class="slider-product">
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cigarillo" role="tabpanel" aria-labelledby="nav-cigarillo-tab">
                            <div class="slider-product-cigarillo">
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/Djarum_black.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM<br/>BLACK</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
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
            $('.btn-collapse-cs').each(function (params) {
                $(this).on('click',function (params) {
                    $($(this).data('target')).toggleClass('d-block')

                    $('.collapse').not($(this).data('target')).removeClass('d-block')
                    $(`.slider-product`).slick('refresh');
                    $(`.slider-product-cigarillo`).slick('refresh');
                    $('.product_item').css('opacity',0)

                    setTimeout(() => {
                        $('.product_item').css('opacity',1)
                    }, 500);

                })
            })

            $('.slider-product').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            });

            $('.slider-product-cigarillo').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            });
        });
    </script>
@endsection