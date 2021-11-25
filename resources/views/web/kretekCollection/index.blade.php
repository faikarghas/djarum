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
                    <img src="{{asset('images/cl.png')}}" alt="" srcset="">
                    <p class="cp">Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing your vigor.</p>
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>FIND CIGARETTE</option>
                            <option value="1">One</option>
                        </select>
                    </form>
                </div>
                <div class="right">
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
                </div>
            </div>
            <div class="product__item">
                <div class="right">
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
                </div>
                <div class="left">
                    <img src="{{asset('images/cl.png')}}" alt="" srcset="">
                    <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing your vigor.</p>
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>FIND CIGARETTE</option>
                            <option value="1">One</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="product__item">
                <div class="left">
                    <img src="{{asset('images/cl.png')}}" alt="" srcset="">
                    <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing your vigor.</p>
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>FIND CIGARETTE</option>
                            <option value="1">One</option>
                        </select>
                    </form>
                </div>
                <div class="right">
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