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
                        <a href="{{route('inspiration-detail',$listInspiration[0]->slug)}}">
                            <div class="inspiration__item big">
                                <img src="{{asset('images')}}/{{$listInspiration[0]->image}}" alt="" srcset="">
                                <div class="box_inspiration big">
                                    <h2>{{$listInspiration[0]->title}}</h2>
                                    <p class="date">{{$listInspiration[0]->date}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-4 mb-5rem">
                        <div class="row g-0">
                            @foreach ($listInspirationSkip1 as $item)
                            <div class="col-lg-12">
                                <div class="inspiration__item mb-2rem">
                                    <a href="{{route('inspiration-detail',$item->slug)}}">
                                        <img src="{{asset('images')}}/{{$item->image}}" alt="" srcset="">
                                        <div class="box_inspiration">
                                            <h2>{{$item->title}}</h2>
                                            <p class="date">{{$item->date}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="inspiration__list forDesktop-dflex">
                @foreach ($listInspirationSkip3 as $item)
                    <div class="inspiration__item box-list">
                        <a href="{{route('inspiration-detail',$item->slug)}}">
                            <img src="{{asset('images')}}/{{$item->image}}" alt="" srcset="">
                            <div class="box_inspiration">
                                <h2>{{$item->title}}</h2>
                                <p class="date">{{$item->date}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="inspiration__list forMobile-dflex">
                @foreach ($listInspiration as $item)
                    <div class="inspiration__item box-list">
                        <a href="{{route('inspiration-detail',$item->slug)}}">
                            <img src="{{asset('images')}}/{{$item->image}}" alt="" srcset="">
                            <div class="box_inspiration">
                                <h2>{{$item->title}}</h2>
                                <p class="date">{{$item->date}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
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