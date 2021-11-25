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
    <main page="testimonials">
        <section class="section__first">
            <h2>TESTIMONIALS</h2>
            <div class="testimonials__item">
                <div class="left">
                    <img src="{{asset('images/ins1.png')}}" alt="" srcset="">
                </div>
                <div class="right">
                    <div class="box__wrapper">
                        <div class="border-box">
                            <p>Similar to fashion, Kretek from Djarum allows you to express yourself in a unique & authentic way through it’s distinctive taste & aroma.</p>
                            <h4>Miroslava, 24 y.o</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials__item">
                <div class="right">
                    <div class="box__wrapper even-bw">
                        <div class="border-box">
                            <p>Similar to fashion, Kretek from Djarum allows you to express yourself in a unique & authentic way through it’s distinctive taste & aroma.</p>
                            <h4>Miroslava, 24 y.o</h4>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="{{asset('images/ins2.png')}}" alt="" srcset="">
                </div>
            </div>
            <div class="testimonials__item">
                <div class="left">
                    <img src="{{asset('images/ins3.png')}}" alt="" srcset="">
                </div>
                <div class="right">
                    <div class="box__wrapper">
                        <div class="border-box">
                            <p>Similar to fashion, Kretek from Djarum allows you to express yourself in a unique & authentic way through it’s distinctive taste & aroma.</p>
                            <h4>Miroslava, 24 y.o</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials__item">
                <div class="right">
                    <div class="box__wrapper even-bw">
                        <div class="border-box">
                            <p>Similar to fashion, Kretek from Djarum allows you to express yourself in a unique & authentic way through it’s distinctive taste & aroma.</p>
                            <h4>Miroslava, 24 y.o</h4>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="{{asset('images/ins4.png')}}" alt="" srcset="">
                </div>
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