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
    <main page="kretek-detail">
        <section class="section__first forDesktop">
            <img class="bg-kretek-detail" src="{{asset('images/djblackpr1.png')}}" width="400px" alt="">
            <div class="product-detail">
                <div class="left">
                    <div class="box">
                        <p>The perfect combination of cloves and tobacco, with a spicy aromatic flavor.</p>
                        <img class="pr-img" data-category="{{$listProducts[0]->category}}" src="{{asset('images/product')}}/detail/{{$listProducts[0]->image_detail}}" alt="" srcset="">
                    </div>

                </div>
                <div class="right">
                    @if ($listProducts[0]->category == '1')
                        <img class="img2" src="{{asset('images/ciline.png')}}" width="200px" alt="" srcset="">
                    @elseif($listProducts[0]->category == '2')
                        <img class="img2" src="{{asset('images/cigarline.png')}}" width="200px" alt="" srcset="">
                    @elseif($listProducts[0]->category == '3')
                        <img class="img2" src="{{asset('images/siline.png')}}" width="200px" alt="" srcset="">
                    @endif
                    <h2>{{$listProducts[0]->name}}</h2>
                    <p>{{$listProducts[0]->quantity_en}}</p>
                    <p class="desc"> {{$listProducts[0]->description_en}}</p>
                    <a class="to-other" href="{{route('kretek')}}">SEE OTHER COLLECTIONS</a>
                </div>
            </div>
        </section>

        <section class="section__firstM forMobile">
            <div class="logo-wrapper">
                @if ($listProducts[0]->category == '1')
                    <img class="img2" src="{{asset('images/ciline.png')}}" width="200px" alt="" srcset="">
                @elseif($listProducts[0]->category == '2')
                    <img class="img2" src="{{asset('images/cigarline.png')}}" width="200px" alt="" srcset="">
                @elseif($listProducts[0]->category == '3')
                    <img class="img2" src="{{asset('images/siline.png')}}" width="200px" alt="" srcset="">
                @endif
            </div>
            <div class="product-detail">
                @if ($listProducts[0]->category == '1')
                    <img class="bg" src="{{asset('images/djblackpr1.png')}}" width="200px" alt="" srcset="">
                @elseif($listProducts[0]->category == '2')
                    <img class="bg" src="{{asset('images/cigar-bg.jpg')}}" width="200px" alt="" srcset="">
                @elseif($listProducts[0]->category == '3')
                    <img class="bg" src="{{asset('images/shisa-bg.jpg')}}" width="200px" alt="" srcset="">
                @endif
                <div class="red-box">
                    <div class="left">
                        <h2>{{$listProducts[0]->name}}</h2>
                        <div class="box">
                            <p>The perfect combination of cloves and tobacco, with a spicy aromatic flavor.</p>
                        </div>
                    </div>
                    <div class="right">
                        <img class="pr-img" data-category="{{$listProducts[0]->category}}" src="{{asset('images/product')}}/detail/{{$listProducts[0]->image_detail}}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="product-desc">
                <p>{{$listProducts[0]->quantity_en}}</p>
                <p>{{$listProducts[0]->description_en}}</p>
                <a class="to-other mt-5" href="{{route('kretek')}}">SEE OTHER COLLECTIONS</a>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {

        });
    </script>
@endsection