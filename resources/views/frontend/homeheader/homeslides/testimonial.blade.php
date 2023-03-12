@php
$testimoniallist = App\Models\Testimonial::all();
@endphp
<section class="testimonial-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3 pb-5" id="testimonial">
        <div class="container about-title pt-4 mb-4">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <h3 class="hd-typ5 text-color-secondary fs-25-md fs-20-m" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                        <span class="me-lg-3 me-2">
                            <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.05078 31.9829C1.41497 29.1833 -0.000178508 26.0434 -0.000178063 20.9534C-0.00017728 11.9968 6.28739 3.96907 15.4308 -4.02693e-07L17.7161 3.52636C9.18166 8.14287 7.51316 14.1336 6.84781 17.9107C8.22202 17.1993 10.021 16.9511 11.7842 17.1149C16.4007 17.5422 20.0371 21.3322 20.0371 26.0434C20.0371 28.4188 19.0935 30.697 17.4138 32.3767C15.7341 34.0564 13.4559 35 11.0805 35C8.33462 35 5.70904 33.7461 4.04822 31.9829L4.05078 31.9829Z" fill="#009DE5"/>
                            </svg>    
                            <svg width="21" height="35" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.05078 31.9829C1.41497 29.1833 -0.000178508 26.0434 -0.000178063 20.9534C-0.00017728 11.9968 6.28739 3.96907 15.4308 -4.02693e-07L17.7161 3.52636C9.18166 8.14287 7.51316 14.1336 6.84781 17.9107C8.22202 17.1993 10.021 16.9511 11.7842 17.1149C16.4007 17.5422 20.0371 21.3322 20.0371 26.0434C20.0371 28.4188 19.0935 30.697 17.4138 32.3767C15.7341 34.0564 13.4559 35 11.0805 35C8.33462 35 5.70904 33.7461 4.04822 31.9829L4.05078 31.9829Z" fill="#009DE5"/>
                            </svg>
                        </span>        
                        Clients Say
                    </h3>
                </div>  
            </div>
        </div>
        <div class="container pb-xl-5 pb-lg-4 pb-md-3">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="owl-carousel testimonial-carousel owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                            @foreach($testimoniallist as $item)  
                                <div class="owl-item">
                                    <div class="test-item row">
                                        <div class="test-info col-12 fs-16 fs-14-m fw-300">
                                            <p class="text-center">
                                            {{$item->description}}
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center px-2">
                                                <div class="pro-pic">
                                                    <img src="/backend/upload/{{$item->image}}" alt="">
                                                </div>
                                                <div class="d-flex flex-column ms-4">
                                                    <strong class="fs-16 fw-500">{{$item->clientname}}</strong>
                                                    <span class="fs-13 fw-400">{{$item->companyname}}</span>
                                                    <span class="fs-13 fw-400">{{$item->position}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="owl-item">
                                    <div class="test-item row">
                                        <div class="test-info col-12 fs-16 fs-14-m fw-300">
                                            <p class="text-center">
                                                whick company oskkjjdn
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center px-2">
                                                <div class="pro-pic">
                                                    <img src="images/img3.png" alt="">
                                                </div>
                                                <div class="d-flex flex-column ms-4">
                                                    <strong class="fs-16 fw-500">geafjd</strong>
                                                    <span class="fs-13 fw-400">Managing Director</span>
                                                    <span class="fs-13 fw-400">NDT</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="test-item row">
                                        <div class="test-info col-12 fs-16 fs-14-m fw-300">
                                            <p class="text-center">
                                              
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex align-items-center px-2">
                                                <div class="pro-pic">
                                                    <img src="images/img3.png" alt="">
                                                </div>
                                                <div class="d-flex flex-column ms-4">
                                                    <strong class="fs-16 fw-500">manalakfeT</strong>
                                                    <span class="fs-13 fw-400">Managing Director</span>
                                                    <span class="fs-13 fw-400">NDT</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>