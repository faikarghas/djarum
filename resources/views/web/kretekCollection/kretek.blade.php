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
                    <div class="cs-kretek">
                        <div class="nav" role="tablist">
                            <h2>KRETEK COLLECTION</h2>
                            <a class="btn-collapse-cs" data-target="#kretek-cigarette" id="nav-cigarette-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarette" type="button" role="tab" aria-controls="nav-cigarette" aria-selected="true">
                                KRETEK CIGARETTE
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-cigarette">
                                <p class="first_p">Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                <div class="slider-product forMobile">
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes1.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM<br/>BLACK</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes2.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK AMBER</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>The only kretek in the world with the scent of jasmine tea. A unique combination of strong tobacco, clove and mild relaxing jasmine tea aroma will give you an extraordinary new smoking experience.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes3.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK MINT</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>An incredible exotic blend of tobacco, chopped cloves with sweet mint, and jasmine tea aroma</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes4.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK AMETHYST</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>A one-of-a-kind blend of tobacco and cloves with a ripe grape aroma. This special aroma was developed specifically for Russia and is not available anywhere else on the planet.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes5.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK MENTHOL</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>The best exotic blend of tobacco and chopped cloves with menthol hat leaves strong taste and menthol aroma.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes6.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK ICE</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>A cooling blend of tobacco and cloves with a fresh mint aroma.
                                                        It suits the best for you who is on fire.
                                                        </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes7.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK RUBY</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>An original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable cherry aroma.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes8.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK GOLD</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>A blend of selected cloves and tobacco with a warm, pleasant vanilla aroma.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes9.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK BALIHAI</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>A dazzling mix of chosen Indonesian tobacco and chopped clove - the distinct flavor of Bali's tropical island.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarettes10.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>DJARUM BLACK CLASSIC</h4>
                                                    <p>10 kreteks per pack</p>
                                                    <p>Indonesian heritage hand-rolled cigarette without filter for immerse experiences of its authentic aroma and flavor with an exceptional taste from selected Indonesia nature clove and spices.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-cigarillo" class="nav-link" id="nav-cigarillo-tab" data-bs-toggle="tab" data-bs-target="#nav-cigarillo" type="button" role="tab" aria-controls="nav-cigarillo" aria-selected="false">
                                KRETEK CIGARILLO
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-cigarillo">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                <div class="slider-product forMobile">
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarillos1.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>Djarum Wood<br/>tip Ruby </h4>
                                                    <p>5 individually wrapped cigarillos</p>
                                                    <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced cherry aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarillos2.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>Djarum Wood <br/>tip Ivory</h4>
                                                    <p>5 individually wrapped cigarillos </p>
                                                    <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced vanilla aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product_item">
                                        <a href="{{route('kretek-detail','test')}}">
                                            <div class="photo_product">
                                                <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                <img class="product" src="{{asset('images/product/Cigarillos3.png')}}" width="100%" alt="" srcset="">
                                            </div>
                                            <div class="desc">
                                                <div class="desc-box">
                                                    <h4>Djarum Wood<br/>tip Royal</h4>
                                                    <p>5 individually wrapped cigarillos </p>
                                                    <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced rum aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <a class="btn-collapse-cs" data-target="#kretek-shisha" class="nav-link" id="nav-shisha-tab" data-bs-toggle="tab" data-bs-target="#nav-shisha" type="button" role="tab" aria-controls="nav-shisha" aria-selected="false">
                                KRETEK SHISHA
                                <span class="arrow"><img src="{{asset('images/arrow.png')}}" width="10px" alt="" srcset=""></span>
                            </a>
                            <div class="collapse" id="kretek-shisha">
                                <p>Kretek cigarettes is made of premium tobacco and clove which give you strong taste and aroma. This product line of cigarettes is created for enhancing
                                    your vigor.</p>
                                    <div class="slider-product-cigarillo forMobile">
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai1.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Triple Red</h4>
                                                        <p>50 gr. packaged </p>
                                                        <p>The triple apple, which slightly spicy in the Indonesian manner, is one of the most popular hookah tobacco aromas in the world.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai2.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Crimson Red</h4>
                                                        <p>50 gr. packaged.</p>
                                                        <p>The classic combination of apple and cinnamon is complemented by a hint of anise, which makes the bright taste unforgettable moment.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai3.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Ocean Breeze</h4>
                                                        <p>50 gr. packaged </p>
                                                        <p>Tropical lemon and lemongrass tastes are vibrant, exotic, and one-of-a-kind, evoking strong emotions and lasting delight.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai4.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Signature Kretek</h4>
                                                        <p>50 gr. packaged </p>
                                                        <p>A unique, extraordinary, and very rich taste of kretek (tobacco leaf with chopped cloves and an bold aroma).</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai5.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Kretek Mint</h4>
                                                        <p>50 gr. packaged </p>
                                                        <p>Hookah tobacco - kretek (a mixture of tobacco leaf and chopped cloves) have a distinct aroma that is tastefully kretek with complimented by mint.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product_item">
                                            <a href="{{route('kretek-detail','test')}}">
                                                <div class="photo_product">
                                                    <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                                    <img class="product" src="{{asset('images/product/Balihai6.png')}}" width="100%" alt="" srcset="">
                                                </div>
                                                <div class="desc">
                                                    <div class="desc-box">
                                                        <h4>Djarum Balihai<br/>Shisha Scarlet Frost</h4>
                                                        <p>50 gr. packed </p>
                                                        <p>Distinct aroma of watermelon and sweet mint give you refreshing and relaxing aromas of summer coolness.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right forDesktop">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-default" role="tabpanel" aria-labelledby="nav-default-tab">
                            <div class="slider-product">
                                <div class="product_item default">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="product" src="{{asset('images/all-collection-Kretek 1.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cigarette" role="tabpanel" aria-labelledby="nav-cigarette-tab">
                            <div class="slider-product-cigarette">
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes1.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The most popular kretek around the world in stylish black paper with an original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable taste.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes2.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK AMBER</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The only kretek in the world with the scent of jasmine tea. A unique combination of strong tobacco, clove and mild relaxing jasmine tea aroma will give you an extraordinary new smoking experience.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes3.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK MINT</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>An incredible exotic blend of tobacco, chopped cloves with sweet mint, and jasmine tea aroma</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes4.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK AMETHYST</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>A one-of-a-kind blend of tobacco and cloves with a ripe grape aroma. This special aroma was developed specifically for Russia and is not available anywhere else on the planet.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes5.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK MENTHOL</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>The best exotic blend of tobacco and chopped cloves with menthol hat leaves strong taste and menthol aroma.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes6.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK ICE</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>A cooling blend of tobacco and cloves with a fresh mint aroma.
                                                    It suits the best for you who is on fire.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes7.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK RUBY</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>An original blend of tobacco and natural chopped cloves. The only natural flavored kretek that has a bright, memorable cherry aroma.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes8.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK GOLD</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>A blend of selected cloves and tobacco with a warm, pleasant vanilla aroma.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes9.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK BALIHAI</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>A dazzling mix of chosen Indonesian tobacco and chopped clove - the distinct flavor of Bali's tropical island.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarettes10.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>DJARUM BLACK CLASSIC</h4>
                                                <p>10 kreteks per pack</p>
                                                <p>Indonesian heritage hand-rolled cigarette without filter for immerse experiences of its authentic aroma and flavor with an exceptional taste from selected Indonesia nature clove and spices.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="arrow_wrapper">
                                <img class="cigarette-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="cigarette-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cigarillo" role="tabpanel" aria-labelledby="nav-cigarillo-tab">
                            <div class="slider-product">
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarillos1.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Wood tip Ruby </h4>
                                                <p>5 individually wrapped cigarillos</p>
                                                <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced cherry aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarillos2.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Wood tip Ivory</h4>
                                                <p>5 individually wrapped cigarillos </p>
                                                <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced vanilla aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Cigarillos3.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Wood<br/>tip Royal</h4>
                                                <p>5 individually wrapped cigarillos </p>
                                                <p>No other cigar combines imported natural leaf wrapper and a shaped wood tip with premium cigar tobaccos and the balanced rum aroma of fresh cloves. Made for relaxing. Infused with pleasure. Only from Djarum.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="arrow_wrapper">
                                <img class="cigarillo-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="cigarillo-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-shisha" role="tabpanel" aria-labelledby="nav-shisha-tab">
                            <div class="slider-product-shisha">
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai1.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Triple Red</h4>
                                                <p>50 gr. packaged </p>
                                                <p>The triple apple, which slightly spicy in the Indonesian manner, is one of the most popular hookah tobacco aromas in the world.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai2.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Crimson Red</h4>
                                                <p>50 gr. packaged.</p>
                                                <p>The classic combination of apple and cinnamon is complemented by a hint of anise, which makes the bright taste unforgettable moment.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai3.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Ocean Breeze</h4>
                                                <p>50 gr. packaged </p>
                                                <p>Tropical lemon and lemongrass tastes are vibrant, exotic, and one-of-a-kind, evoking strong emotions and lasting delight.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai4.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Signature Kretek</h4>
                                                <p>50 gr. packaged </p>
                                                <p>A unique, extraordinary, and very rich taste of kretek (tobacco leaf with chopped cloves and an bold aroma).</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai5.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Kretek Mint</h4>
                                                <p>50 gr. packaged </p>
                                                <p>Hookah tobacco - kretek (a mixture of tobacco leaf and chopped cloves) have a distinct aroma that is tastefully kretek with complimented by mint.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_item">
                                    <a href="{{route('kretek-detail','test')}}">
                                        <div class="photo_product">
                                            <img class="bg" src="{{asset('images/bg-djarumblack.png')}}" width="100%" alt="">
                                            <img class="product" src="{{asset('images/product/Balihai6.png')}}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="desc">
                                            <div class="desc-box">
                                                <h4>Djarum Balihai<br/>Shisha Scarlet Frost</h4>
                                                <p>50 gr. packed </p>
                                                <p>Distinct aroma of watermelon and sweet mint give you refreshing and relaxing aromas of summer coolness.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="arrow_wrapper">
                                <img class="shisha-prev" src="{{asset('images/round-arrow-l.png')}}" alt="">
                                <img class="shisha-next" src="{{asset('images/round-arrow-r.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="bar" src="{{asset('images/bar.png')}}" width="100%" alt="" srcset="">
        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            $('.btn-collapse-cs').each(function (params) {
                $(this).on('click',function (params) {
                    $($(this).data('target')).toggleClass('d-block')

                    $('.collapse').not($(this).data('target')).removeClass('d-block')

                    $(`.slider-product`).slick('refresh');
                    $(`.slider-product-cigarette`).slick('refresh');
                    $(`.slider-product-shisha`).slick('refresh');

                    $('.product_item').css('opacity',0)

                    setTimeout(() => {
                        $('.product_item').css('opacity',1)
                    }, 500);

                })
            })

            $('.slider-product').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.cigarillo-prev'),
                nextArrow: $('.cigarillo-next')
            });

            $('.slider-product-cigarette').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.cigarette-prev'),
                nextArrow: $('.cigarette-next')
            });

            $('.slider-product-shisha').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:true,
                adaptiveHeight: true,
                prevArrow: $('.shisha-prev'),
                nextArrow: $('.shisha-next')
            });
        });
    </script>
@endsection