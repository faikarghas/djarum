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
            <span class="date forMobile">{{$detailInspiration[0]->date}}</span>
            <div class="container-fluid g-0">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <img class="ins-img" src="{{asset('images')}}/{{$detailInspiration[0]->image}}" width="400px"/>
                        <div class="forMobile box_title">
                            <h3>{{$detailInspiration[0]->title}}</h3>
                            <span class="minutes">{{$detailInspiration[0]->time}} minutes reading</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-detail">
                            <span class="forDesktop minutes">{{$detailInspiration[0]->time}} minutes reading</span>
                            <h2 class="forDesktop">{{$detailInspiration[0]->title}}</h2>
                            <span class="forDesktop date">{{$detailInspiration[0]->date}}</span>
                            {!!$detailInspiration[0]->content!!}
                        </div>
                        <div class="btn-wrapper">
                            <button id="copy" class="btn-djarum btn-blue-djarum btn-copy " href="{{route('kretek')}}"><img class="me-3" src="{{asset('images/copy.svg')}}" width="20px" />COPY TO CLIPBOARD</button>
                            <a class="btn-djarum btn-red-djarum " href="{{route('inspiration')}}">SEE ALL ARTICLES</a>
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
            function copyClipboard(params) {
                let url = location.href
                var copyText = document.getElementById("copy");
                /* Select the text field */

                /* Copy the text inside the text field */
                navigator.clipboard.writeText(url);
            }

             $('.btn-copy').on('click',function (params) {
                copyClipboard()
                console.log('test');
             })
        });
    </script>
@endsection