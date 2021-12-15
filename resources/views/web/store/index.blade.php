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
                            <select class="form-select select-city" aria-label="Default select example">
                                <option selected>CITY</option>
                                @foreach ($listCity as $item)
                                    <option data-id="{{$item->city}}" value="{{$item->city}}">{{$item->city}}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>METRO</option>
                            </select>
                            <select class="form-select select-store" aria-label="Default select example">
                                <option selected>STORE NAME</option>
                            </select>
                        </div>
                        <button class="btn-search-now">SEARCH NOW</button>
                    </form>
                </div>
            </div>
            <div class="map--search" id="googleMap">
            </div>

        </section>
    </main>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {

            var base_url = window.location.origin;

            $('.select-city').each(function name(params) {
                $(this).on('change',function (params) {
                    let idenCity = $(this).find("option:selected").attr('data-id')

                    $.ajax({
                        type: "GET",
                        url: `${base_url}/api-store-name/api/${idenCity}`,
                        data: "",
                        cache: false,
                        success: function(result){
                            $('.select-store').empty()
                            $('.select-store').append('<option selected>STORE NAME</option>')

                            result.data.map((i,a)=>{
                                $('.select-store').append(`<option value="${i.store_name}" data-id="${i.store_name}">${i.store_name}</option>`)
                            })
                        }
                    });
                })
            })

            // ex
            // var locations = [
            //     ['Tabakpodarki2', 59.975352, 30.407865, 4],
            // ];
            var locations = [];
            

            $('.btn-search-now').on('click',function name(e) {
                e.preventDefault()

                let city = $('.select-city').find(":selected").text();
                let store = $('.select-store').find(":selected").text();
                let url = `${base_url}/api-store-location/api/${city}/${store}`;

                if (store == 'STORE NAME') {
                    url = `${base_url}/api-store-location/api/${city}`;
                } else {
                    url = `${base_url}/api-store-location/api/${city}/${store}`;
                }

                $.ajax({
                        type: "GET",
                        url: url,
                        data: "",
                        cache: false,
                        success: function(result){
                            locations = []
                            result.data.map((i,a)=>{
                                locations.push([`<h4 style="padding-right:20px;">${i.address}</h4>`,i.coordinate.split(',')[0],i.coordinate.split(',')[1],i.store_name,i.id])
                            })
                            initialize([locations[0][1],locations[0][2]])
                            console.log(locations);
                        }
                });

            })

            function initialize(cor=[59.975352, 30.407865]) {

                var map = new google.maps.Map(document.getElementById('googleMap'), {
                    zoom: 10,
                    center: new google.maps.LatLng(cor[0], cor[1]),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#212121"
                            }]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [{
                            "visibility": "off"
                            }]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                            "color": "#212121"
                            }]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#9e9e9e"
                            }]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "stylers": [{
                            "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#bdbdbd"
                            }]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#181818"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#616161"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                            "color": "#1b1b1b"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [{
                            "color": "#2c2c2c"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#8a8a8a"
                            }]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#373737"
                            }]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#3c3c3c"
                            }]
                        },
                        {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#4e4e4e"
                            }]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#616161"
                            }]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#757575"
                            }]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                            "color": "#000000"
                            }]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                            "color": "#3d3d3d"
                            }]
                        }
                        ]
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function(e) {
                            let imageUrl;
                            if (!locations[i][4]) {
                                imageUrl = `<img src="${base_url}/images/store-photo/default-store.png" width="100px" height="100px"/>`
                            } else {
                                imageUrl = `<img src="${base_url}/images/store-photo/${locations[i][4]}.jpg" width="100%" height="100%"/>`
                            }
                            infowindow.setContent(`
                                <div class="wrapper-content-gmap">
                                    <div class="left">${imageUrl}</div>
                                    <div class="right">
                                        <h3>${locations[i][3]}</h3>
                                        ${locations[i][0]}
                                        <br/>
                                        <a href="https://www.google.com/maps/place/${locations[i][1]}/${locations[i][2]}" target="_blank" rel="noopener"><img width="19px" height="19px" src="${base_url}/images/pin-google.png"/> Open in Googlemap</a>
                                    </div>
                                </div>
                            `);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));

                }
            }

            initialize()
        });


    </script>
@endsection