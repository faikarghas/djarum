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
                        <h2>MEMBERSHIP</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h4>Join us for more!</h4>
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
            console.log(location.path);
        });
    </script>
@endsection