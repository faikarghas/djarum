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
    <main page="about">
        <section class="section__first forDesktop-dflex">
            <div class="left-1">
                <img src="{{asset('images/red1 1.png')}}" alt="" srcset="">
                <h2>ABOUT KRETEK</h2>
            </div>
            <div class="right-1">
                <h5>Kretek consists of three main ingredients: tobacco, natural cloves and spices with  hints of fruit essences. All these elements, grown in the unique climate of Indonesia, give each Djarum cigarette a unique essences.</h5>
                <p>The history of kretek originated in the late 19th century in the Indonesian city of Kudus, Central Java. Over the course of a hundred years, the manufacture of kretek has transformed from a handicraft production into the largest industrial sector, making a huge contribution to the country's economy, second only in importance to oil and gas production.</p>
                <p>What makes kretek so special today, distinguishing it from other cigarettes? First of all, it is the traditional taste and aroma of cloves. The word "kretek" is an onomatopoeia for the crackling sound of burning cloves. Kretek production is much more complicated than conventional cigarette production because, in addition to tobacco, two additional components are used: cloves and a special sauce made from authentic Indonesian spices.</p>
                <p>It should also be noted that in terms of quality and variety, Indonesian tobacco is one of the most valuable assets in the world.</p>
            </div>
            <div class="left-2">
                <h2>ABOUT KRETEK WORLD</h2>
                <h5>With almost a half-century of history behind it, the Djarum company now carries solid weight and is a well-known brand. We credit our success to our goods, which are distinctive clove cigarettes that are well-known across the archipelago. We have established a strong market position and meet the demands of our clients all around the world on a regular basis.</h5>
                <p>On April 21, 1951, the founder of Oei Wie Gwan created the first Djarum workshop in Kudus, central Java. He'd only been making kreteks for 9 months when he got his license. Later, one of Indonesia's most efficient industrial sectors was created on the back of this output. Kudus is historically the birthplace and cradle of the kretek. Djarum, a modest handcraft industry, has evolved into a world-famous brand over the years.</p> 
                <p>Because of the product's authenticity and reputation, global export of Djarum tobacco products has increased quickly since the 1970s. Djarum tobacco products are now accessible on all five continents. Australia, Canada, Eastern Europe, Japan and the Far East, the Middle East, the Netherlands, Russia, Saudi Arabia, Southeast Asia, and the United States of America are among the major export markets. Djarum does not stop there; the company continues to develop innovative products aimed at conquering new markets.</p>
            </div>
            <div class="right-2">
                <img src="{{asset('images/red2 1.jpg')}}" alt="" srcset="">
            </div>
        </section>

        <section class="section__first_m forMobile">
            <div class="about-1">
                <img src="{{asset('images/red1 1.png')}}" alt="" srcset="">
                <div class="box__wrapper">
                    <h2>ABOUT KRETEK</h2>
                    <div class="box">
                        <p>Kretek consists of three main ingredients: tobacco, natural cloves and spices with fruit sauce. All these elements, grown in the unique climate of Indonesia, give each Djarum cigarette a unique taste.</p>
                    </div>
                </div>
            </div>
            <div class="about-1-1">
                <p>The history of kretek originated in the late 19th century in the Indonesian city of Kudus, Central Java. Over the course of a hundred years, the manufacture of kretek has transformed from a handicraft production into the largest industrial sector, making a huge contribution to the country's economy, second only in importance to oil and gas production.</p>
                <p>What makes kretek so special today, distinguishing it from other cigarettes? First of all, it is the traditional taste and aroma of cloves. The word "kretek" is an onomatopoeia for the crackling sound of burning cloves.</p>
                <p>Kretek production is much more complicated than conventional cigarette production because, in addition to tobacco, two additional components are used: cloves and a special sauce made from authentic Indonesian spices. It should also be noted that in terms of quality and variety, Indonesian tobacco is one of the most valuable assets in the world.</p>
            </div>
            <div class="about-2">
                <img src="{{asset('images/red2 1.jpg')}}" alt="" srcset="">
                <h2>ABOUT KRETEK WORLD</h2>
            </div>
            <div class="about-2-1">
                <p>With almost a half-century of history behind it, the Djarum company now carries solid weight and is a well-known brand. We credit our success to our goods, which are distinctive clove cigarettes that are well-known across the archipelago. We have established a strong market position and meet the demands of our clients all around the world on a regular basis.</p>
                <br>
                <p>On April 21, 1951, the founder of Oei Wie Gwan created the first Djarum workshop in Kudus, central Java. He'd only been making kreteks for 9 months when he got his license. Later, one of Indonesia's most efficient industrial sectors was created on the back of this output. Kudus is historically the birthplace and cradle of the kretek. Djarum, a modest handcraft industry, has evolved into a world-famous brand over the years.</p>
                <p>Because of the product's authenticity and reputation, global export of Djarum tobacco products has increased quickly since the 1970s.</p>
                <p>Djarum tobacco products are now accessible on all five continents. Australia, Canada, Eastern Europe, Japan and the Far East, the Middle East, the Netherlands, Russia, Saudi Arabia, Southeast Asia, and the United States of America are among the major export markets.</p>
                <p>Djarum does not stop there; the company continues to develop innovative products aimed at conquering new markets.</p>
            </div>
        </section>

        <img class="bar" src="{{asset('images/bar.png')}}" width="100%" alt="" srcset="">
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $('.header_slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            });

            $(window).scroll(function (event) {
                let scroll = $(document).scrollTop();

                $('.img_on_bg').css('transform',`translateY(${scroll * 2 / 5}px)`)

            });

            $('.slider__products').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                variableWidth: true
            });

            $('.btn-search-now').on('click',function () {
                e.preventDefault()
            })

        });
    </script>
@endsection