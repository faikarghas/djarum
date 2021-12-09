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
    <main page="store">
        <section class="section__first">
            <div class="filter_wrapper">
                <div class="bg"></div>
                <div class="filter-map">
                    <h2>STORE LOCATION</h2>
                    <form action="">
                        <div class="column">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>FIND CIGARETTE</option>
                                <option value="1">One</option>
                            </select>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>FIND CIGARETTE</option>
                                <option value="1">One</option>
                            </select>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>FIND CIGARETTE</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                        <button class="btn-search-now">SEARCH NOW</button>
                    </form>
                </div>
            </div>
            <div class="map--search">
                <img src="{{asset('images/peta 1.png')}}" alt="" srcset="">
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