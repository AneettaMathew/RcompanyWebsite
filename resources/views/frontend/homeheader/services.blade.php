@php
$serviceslist = App\Models\Services::all();
@endphp


@extends('frontend.main_master')
@section('main')
<section class="about-text-section pt-5 pb-xl-4 mb-5">
        <div class="container">
            <h2 class="hd-typ7 fs-25-md fs-20-sm fs-18-m mb-xl-3">
                Who are we?
            </h2>
            <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m">
                End to end solution for our customers tailored to their needs is what makes us different. Not only it saves cost, but makes it easy for the customers to engage with our solutions.
            </p>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <div class="row service-list">
            @foreach($serviceslist as $item)
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="/backend/upload/{{$item->logo}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">{{$item->title}}</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m"> {{$item->description}} </p>
                    </div>
                </div>
                @endforeach   
                <!-- <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon2.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Mobile App Development</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">Most trusted among iOS Mobile App Development Company in Kerala</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon3.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Graphic Designing</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We are experienced and the most professional creative graphic design company in Kochi, Kerala</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon4.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Digital Marketing</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We are the best digital marketing companies in Kochi, that helps you attract the right customers to your website with PPC advertising.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon5.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Ecommerce Development</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We are a leading Ecommerce website development company in Kochi, Who use the best open source solutions and web-based platforms to build sites that look great and convert well.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon6.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Social Media Marketing</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We design top-quality websites that will be a sure asset for your business and brand concepts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon7.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Search Engine Optimization</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We are a proven SEO company in Kochi who can bring more visitors to your website than any other online source.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon8.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">ERP Development</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We are the best Erp software companies in Cochin which provide custom ERP services..</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon9.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Oodo Development</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">Provide the best Odoo implementation, integration, customization and e-commerce solutions.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon10.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Api Integration</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">Offer best quality API development services through our custom API integration, third party API integrations and API testing automation.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon11.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Explainer Video</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">Being a best explainer video company at Kochi we offer you with branding videos, company stories and commercials.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon12.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Hosting & Support</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We design top-quality websites that will be a sure asset for your business and brand concepts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon13.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Logo Designing</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We design top-quality websites that will be a sure asset for your business and brand concepts.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon14.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Payment Gateway Intergration</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">Engage in an online financial transaction that is secure, real-time, scalable and flexible and facilitates online payments</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="img-wrp mb-3">
                            <img src="{{asset('frontend/images/service-icon15.svg')}}" alt="">
                        </div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-700 mb-3">Software Development</div>
                        <p class="fs-15 fw-400 fs-14-md fs-13-m">We have state of the art software service team that listens to your queries 365 days a year and tries to rectify the issues.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = jQuery('header').outerHeight();

        jQuery(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = jQuery(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                jQuery('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + jQuery(window).height() < jQuery(document).height()) {
                    jQuery('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
        
    </script>
    @endsection