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
    <main page="contact">
        <section class="section__first">
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <h2>CONTACT US</h2>
                        <p> <span><img src="{{asset('images/logof.png')}}" width="32px" alt=""></span> Visit our page: https://vk.com/club21798278</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h4>Reach us for more!</h4>
                        <form action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="NAME">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="PHONE">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="EMAIL">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="MESSAGE"></textarea>
                            </div>
                            <button class="btn-submit">SUMBIT</button>
                        </form>
                    </div>
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