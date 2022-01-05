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
        <section class="section__first animate-testimonials">
            <h2>TESTIMONIALS</h2>
            <div class="iframe-yt">
                <iframe id="iframeYT" width="100%" height="100%" src="https://www.youtube.com/embed/RLnGX_oRq2U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img class="close-yt" src="{{asset('images/cross.png')}}" alt="" srcset="">
            </div>
            <div class="testimonials__item yt">
                <div class="left">
                    <img src="{{asset('images/ins1.png')}}" alt="" srcset="">
                    <img class="play-yt" src="{{asset('images/play-yt.png')}}" width="20px" alt="">
                </div>
                <div class="right">
                    <div class="box__wrapper">
                        <div class="border-box">
                            <p>“Kretek has a really pleasant taste with a hint of sweet from the mix of tobacco and other spices. Smoking this basically gives an experience that you would never forget. I simply have no regret trying it.”</p>
                            <h4>@siairis_</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials__item">
                <div class="right">
                    <div class="box__wrapper even-bw">
                        <div class="border-box">
                            <p>"This has to be a very indulging cigarette to enjoy during your spare time or whenever you feel your authentic self. Each cigarette somehow gives out a warm feeling of youth with every puff, making it even harder to resist."<p>
                            <h4>Maria Bliznyuk<br/>@maria_bliznyuk</h4>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="{{asset('images/ins2.jpg')}}" alt="" srcset="">
                </div>
            </div>
            <div class="testimonials__item">
                <div class="left">
                    <img src="{{asset('images/ins3.jpg')}}" alt="" srcset="">
                </div>
                <div class="right">
                    <div class="box__wrapper">
                        <div class="border-box">
                            <p>“I can’t deny the fact that this cigarette did a great job in giving such a nice flavor. The aromatic spices makes it taste more lavish, and each cig surprisingly gives you enough time to enjoy the moment.”</p>
                            <h4>Anya Strada<br/>@a.stradaa</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials__item">
                <div class="right">
                    <div class="box__wrapper even-bw">
                        <div class="border-box">
                            <p>“First time trying this kretek and I would say that this got a really unique, smooth, and irresistible taste. I honestly feel the relaxing sensation from the crackle. Truly enjoyable, especially when you spend time together with friends.”</p>
                            <h4>@n.perovskaya</h4>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="{{asset('images/ins4.png')}}" alt="" srcset="">
                </div>
            </div>

        </section>

        <img class="v-img" src="{{asset('images/smoke.jpg')}}" alt="">
        <img class="v-img-2" src="{{asset('images/smoke.jpg')}}" alt="">
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $('.play-yt').each(function (params) {
                $(this).on('click',function (params) {
                    $('.iframe-yt').addClass('open')
                })
            })

            $('.close-yt').each(function (params) {
                $(this).on('click',function (params) {
                    $('.iframe-yt').removeClass('open')
                    $('#iframeYT').each(function(){
                        $(this).stopVideo();
                    });
                })
            })
        });
    </script>
@endsection