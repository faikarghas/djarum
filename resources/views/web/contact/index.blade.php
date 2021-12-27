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
                        <a class="vk" href="https://vk.com/club21798278" target="_blank" rel="noopener"> <span><img src="{{asset('images/logof.png')}}" width="32px" alt=""></span> Visit our page: https://vk.com/club21798278</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h4>Reach us for more!</h4>
                        <form action="" method="POST" id="contact" role="form">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="NAME" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="PHONE" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="EMAIL" required>
                            </div>
                            <select class="form-select select-city" id="city" aria-label="Default select example" required>
                                <option selected>CITY</option>
                            </select>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" rows="3" placeholder="MESSAGE" required></textarea>
                            </div>
                            <button class="btn-submit btn-contact btn-red" type="submit">SUMBIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal_thankyou">
            <div class="d-flex align-items-center justify-content-center flex-column w-100 h-100">
                <img class="mb-5" src="{{asset('images/kreteworld 1.png')}}" alt="" srcset="">
                <h3 class="mb-5">Thanks for contacting us! <br/> We will be in touch with you shortly.</h3>
                <button class="btn-thank btn-red">BACK TO WEBSITE</button>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            let dataCity = location.origin+'/'+ 'city-api/ru.json'

            $.ajax({
                type: "GET",
                url: dataCity,
                data: "",
                cache: false,
                success: function(result){
                        result.map((i,a)=>{
                            $('.select-city').append(` <option value="${i.city}">${i.city}</option>`)
                        })
                    }
                });
            });

            $('.btn-thank').on('click',function (params) {
                $('.modal_thankyou').hide()
            })

            $('#contact').submit(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let data = {
                    name: $('#name').val(),
                    phone: $('#phone').val(),
                    email: $('#email').val(),
                    type: 'contact',
                }

                var type = "POST";
                var ajaxurl = '/api/post-contact';
                var token = $('meta[name="csrf-token"]').attr('content')

                $('.btn-submit').html('Loading...')

                $.ajax({
                    type: type,
                    url: ajaxurl,
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        $('.btn-submit').html('SUBMIT')
                        $('.modal_thankyou').show()
                    },
                    error: function (data) {
                        console.log(data,'error');
                    }
                });


            })
    </script>
@endsection






