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
    <main page="inspiration">
        <section class="section__first">
            <h2>INSPIRATIONS</h2>
            <div class="container-fluid g-0 forDesktop">
                <div class="row g-0">
                    <div class="col-12 col-lg-8 pr-2">
                        <a href="">
                            <div class="inspiration__item big">
                                <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                                <div class="box_inspiration big">
                                    <h2>CHOOSE YOUR CIGS BY YOUR CHARACTER</h2>
                                    <p class="date">02 November 2021</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 mb-5rem">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="inspiration__item mb-2rem">
                                    <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                                    <div class="box_inspiration">
                                        <h2>WHICH KRETEK ARE YOU?</h2>
                                        <p class="date">02 November 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="inspiration__item">
                                    <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                                    <div class="box_inspiration">
                                        <h2>WHICH KRETEK ARE YOU?</h2>
                                        <p class="date">02 November 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inspiration__list">
            <div class="inspiration__item box-list">
                    <a href="{{route('inspiration-detail','choose-your-cigs-by-your-character')}}">
                        <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                        <div class="box_inspiration">
                            <h2>CHOOSE YOUR CIGS BY YOUR CHARACTER</h2>
                            <p class="date">02 November 2021</p>
                        </div>
                    </a>
                </div>
                <div class="inspiration__item box-list">
                    <a href="{{route('inspiration-detail','choose-your-cigs-by-your-character')}}">
                        <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                        <div class="box_inspiration">
                            <h2>WHICH KRETEK ARE YOU?</h2>
                            <p class="date">02 November 2021</p>
                        </div>
                    </a>
                </div>
                <div class="inspiration__item box-list">
                    <a href="{{route('inspiration-detail','choose-your-cigs-by-your-character')}}">
                        <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                        <div class="box_inspiration">
                            <h2>WHICH KRETEK ARE YOU?</h2>
                            <p class="date">02 November 2021</p>
                        </div>
                    </a>
                </div>
                <div class="inspiration__item box-list">
                    <a href="{{route('inspiration-detail','choose-your-cigs-by-your-character')}}">
                        <img src="{{asset('images/foto1.png')}}" alt="" srcset="">
                        <div class="box_inspiration">
                            <h2>WHICH KRETEK ARE YOU?</h2>
                            <p class="date">02 November 2021</p>
                        </div>
                    </a>
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