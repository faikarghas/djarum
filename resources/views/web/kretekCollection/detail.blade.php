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
                        <img class="pr-img" src="{{asset('images/PackStickBlack1.png')}}" alt="" srcset="">
                    </div>
                </div>
                <div class="right">
                    <img class="img2" src="{{asset('images/ciline.png')}}" width="200px" alt="" srcset="">
                    <h2>DJARUM BLACK</h2>
                    <p>10 kreteks per pack</p>
                    <p class="desc">The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                    <a class="to-other" href="">SEE OTHER COLLECTIONS</a>
                </div>
            </div>
        </section>

        <section class="section__firstM forMobile">
            <div class="logo-wrapper">
                <img class="img2" src="{{asset('images/ciline.png')}}" width="100%" alt="" srcset="">
            </div>
            <div class="product-detail">
                <img class="bg" src="{{asset('images/djblackpr1.png')}}" width="400px" alt="">
                <div class="red-box">
                    <div class="left">
                        <h2>DJARUM <br> BLACK</h2>
                        <div class="box">
                            <p>The perfect combination of cloves and tobacco, with a spicy aromatic flavor.</p>
                        </div>
                    </div>
                    <div class="right">
                        <img class="pr-img" src="{{asset('images/PackStickBlack1.png')}}" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="product-desc">
                <p>10 kreteks per pack</p>
                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
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