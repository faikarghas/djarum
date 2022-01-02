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
                            <a class="btn-collapse-cs" data-target="#kretek-cigarette" id="nav-cigarette-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarette" type="button" role="tab" aria-controls="nav-cigarette" aria-selected="true">
                                KRETEK CIGARETTE
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-cigarette">
                                <p class="first_p">Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                <div class="slider-product forMobile">
                                    @foreach ($listCigarette as $item)
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail',$item->slug)}}">
                                                <div class="photo_product">
                                                    {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                    <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>{{$item->name}}</h4>
                                                        <p>{{$item->quantity_en}}</p>
                                                        <p>{{$item->description_en}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-cigarillo" class="nav-link" id="nav-cigarillo-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarillo" type="button" role="tab" aria-controls="nav-cigarillo" aria-selected="false">
                                KRETEK CIGARILLO
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-cigarillo">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                <div class="slider-product forMobile">
                                    @foreach ($listCigarillos as $item)
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail',$item->slug)}}">
                                                <div class="photo_product">
                                                    {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                    <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>{{$item->name}}</h4>
                                                        <p>{{$item->quantity_en}}</p>
                                                        <p>{{$item->description_en}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-shisha" class="nav-link" id="nav-shisha-tab" data-bs-toggle="tab" data-bs-target="#nav-shisha" type="button" role="tab" aria-controls="nav-shisha" aria-selected="false">
                                KRETEK SHISHA
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-shisha">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                    <div class="slider-product-shisha forMobile">
                                         @foreach ($listShisha as $item)
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail',$item->slug)}}">
                                                <div class="photo_product">
                                                    {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                    <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>{{$item->name}}</h4>
                                                        <p>{{$item->quantity_en}}</p>
                                                        <p>{{$item->description_en}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right forDesktop">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-default" role="tabpanel" aria-labelledby="nav-default-tab">
                            <div class="slider-product">
                                <div class="product_item default">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="product" src="{{asset('images/all-collection-kretek (1).png')}}" width="100%" alt="" srcset="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cigarette" role="tabpanel" aria-labelledby="nav-cigarette-tab">
                            <div class="slider-product-cigarette">
                                @foreach ($listCigarette as $item)
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail',$item->slug)}}">
                                            <div class="photo_product">
                                                {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{$item->quantity_en}}</p>
                                                    <p>{{$item->description_en}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="arrow_wrapper">
                                <img class="cigarette-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="cigarette-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cigarillo" role="tabpanel" aria-labelledby="nav-cigarillo-tab">
                            <div class="slider-product">
                                @foreach ($listCigarillos as $item)
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail',$item->slug)}}">
                                            <div class="photo_product">
                                                {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{$item->quantity_en}}</p>
                                                    <p>{{$item->description_en}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="arrow_wrapper">
                                <img class="cigarillo-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="cigarillo-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-shisha" role="tabpanel" aria-labelledby="nav-shisha-tab">
                            <div class="slider-product-shisha">
                                 @foreach ($listShisha as $item)
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail',$item->slug)}}">
                                            <div class="photo_product">
                                                {{-- <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt=""> --}}
                                                <img class="product" src="{{asset('images/product')}}/{{$item->image}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{$item->quantity_en}}</p>
                                                    <p>{{$item->description_en}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="arrow_wrapper">
                                <img class="shisha-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="shisha-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bar" src="{{asset('images/bar.png')}}" width="100%" alt="" srcset="">
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
                    $(`.slider-product-cigarette`).slick('refresh');
                    $(`.slider-product-shisha`).slick('refresh');

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
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.cigarillo-prev'),
                nextArrow: $('.cigarillo-next'),
               
            });

            $('.slider-product-cigarette').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.cigarette-prev'),
                nextArrow: $('.cigarette-next'),
                 responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                    }
                }]
            });

            $('.slider-product-shisha').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.shisha-prev'),
                nextArrow: $('.shisha-next')
            });
        });
    </script>
@endsection