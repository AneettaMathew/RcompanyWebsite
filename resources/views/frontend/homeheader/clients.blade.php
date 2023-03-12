@php
$clientlist = App\Models\Multiimage::all();
@endphp

@extends('frontend.main_master')
@section('main')

<section class="about-text-section pt-5 pb-xl-4 mb-5">
        <div class="container">
            <h2 class="hd-typ7 fs-25-md fs-20-sm fs-18-m mb-xl-3">
                Our Clients
            </h2>
            <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m">
                Leading brand trusted our services
            </p>
        </div>
    </section>
    
    <section class="mb-5">
    
        <div class="container">
            <div class="row clients-list">
            @foreach($clientlist as $item)
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="/backend/upload/{{$item->multi_image}}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach    
                <!-- </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/gatetomedicine-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/jiwok-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/portafare-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/bartsbooks-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/gogorocket-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/123stickers-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/faithjoint-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/socialoffender-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/capefearaesthetics-logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6 mb-lg-4 mb-3">
                    <div class="card-typ2">
                        <div class="img-wrp">
                            <img src="{{asset('frontend/images/anetco-logo.png')}}" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        
    </section>



@endsection