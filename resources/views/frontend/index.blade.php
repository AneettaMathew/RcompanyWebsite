@extends('frontend.main_master')
@section('main')
<section class="banner-section overflow-hidden position-relative">
        <video width="" height="" class="d-block w-100" autoplay muted playsinline loop>
            <source src="{{asset('frontend/images/video-banner1.mp4')}}" type="video/mp4">
        </video>
        <!-- <img src="images/banner-bg1.jpg" class="d-block w-100 full zoom" alt="..."> -->
        <!-- <div class="banner-txt">
            <div class="container px-5">
                <div class="row justify-content-end">
                    <div class="col-lg-5">
                        <h2 class="animate__animated animate__fadeInUp animate__pulse animate__delay-1s fs-25-xl fs-20-lg fs-18-m mb-3">A Digital Marketing and Custom Web Design agency</h2>
                        <p class="animate__animated animate__fadeInRight animate__delay-1s fs-15 fs-lg-14 fw-300">We focus on building fast, beautiful and slick applications through design, software development services and proven methodologies.</p>
                        <div class="d-flex align-items-center animate__animated animate__fadeInUp animate__pulse animate__delay-1s">
                            <a href="#" class="fs-14 fw-400">                                
                                <svg class="me-2" width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M50.7071 8.70711C51.0976 8.31658 51.0976 7.68342 50.7071 7.29289L44.3431 0.928932C43.9526 0.538408 43.3195 0.538408 42.9289 0.928932C42.5384 1.31946 42.5384 1.95262 42.9289 2.34315L48.5858 8L42.9289 13.6569C42.5384 14.0474 42.5384 14.6805 42.9289 15.0711C43.3195 15.4616 43.9526 15.4616 44.3431 15.0711L50.7071 8.70711ZM0 9H50V7H0V9Z" fill="#A6A6A6"/>
                                </svg>    
                                GET IN TOUCH
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <section class="mid-info-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3">
        <div class="container">
            <h3 href="#" class="fs-14 fw-400 mb-2 hd-typ2" data-aos="fade-up" data-aos-offset="200" data-aos-duration="3000">                                
                <svg class="me-2" width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50.7071 8.70711C51.0976 8.31658 51.0976 7.68342 50.7071 7.29289L44.3431 0.928932C43.9526 0.538408 43.3195 0.538408 42.9289 0.928932C42.5384 1.31946 42.5384 1.95262 42.9289 2.34315L48.5858 8L42.9289 13.6569C42.5384 14.0474 42.5384 14.6805 42.9289 15.0711C43.3195 15.4616 43.9526 15.4616 44.3431 15.0711L50.7071 8.70711ZM0 9H50V7H0V9Z" fill="#A6A6A6"/>
                </svg>    
                GET IN TOUCH
            </h3>
            <h4 class="hd-typ1 fw-400 fs-25-xl fs-20-lg fs-18-m mb-5" data-aos="fade-up" data-aos-duration="1000">
                We combine design, strategy, and technology to build custom software that <span>amplifies your company's impact.</span>
            </h4>
            <!-- <div class="row">
                <div class="col-lg-4 mb-lg-0 mb-md-2">
                    <div class="info-box blue-bx" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="3000">
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m text-center w-100">Design</div>
                        <div class="info-txt-wrp">
                            <div class="info-text fs-16 fs-14-md fw-300">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                        <div class="img-wrp">
                            <img src="images/img-design.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-md-2">
                    <div class="info-box orange-bx" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="3000">
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m text-center w-100">Development</div>
                        <div class="info-txt-wrp order-lg-0 order-md-1">
                            <div class="info-text fs-16 fs-14-md fw-300">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                        <div class="img-wrp">
                            <img src="images/img-development.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-md-2">
                    <div class="info-box pink-bx" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="3000">
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m text-center w-100">Success Stories</div>
                        <div class="info-txt-wrp">
                            <div class="info-text fs-16 fs-14-md fw-300">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                        </div>
                        <div class="img-wrp">
                            <img src="images/img-success-stories.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row justify-content-md-between justify-content-center mb-lg-5 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="main-info-box blue-bx text-center">
                        <div class="img-wrp mb-xxl-5 mb-xl-4 mb-3">
                            <img src="{{asset('frontend/images/Brand-identity.svg')}}" alt="">
                        </div>
                        <a href="service-branding.html" class="hd-typ6 d-inline-block fs-25-xl fs-20-md fs-16-m fw-500 mb-xxl-4 mb-md-2">Brand identity</a>
                        <p class="fs-18 fs-16-xl fs-14-m fw-400">
                            We are experts at building the right image for your business to ensure potential customers choose you over your competitors.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="main-info-box orange-bx text-center">
                        <div class="img-wrp mb-xxl-5 mb-xl-4 mb-3">
                            <img src="{{asset('frontend/images/Web-Design.svg')}}" alt="">
                        </div>
                        <a href="service-web-design.html" class="hd-typ6 d-inline-block fs-25-xl fs-20-md fs-16-m fw-500 mb-xxl-4 mb-md-2">Web Design</a>
                        <p class="fs-18 fs-16-xl fs-14-m fw-400">
                            We have been providing web design London services for over 18 years. We can take your business concept from idea to reality.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="main-info-box pink-bx text-center">
                        <div class="img-wrp mb-xxl-5 mb-xl-4 mb-3">
                            <img src="{{asset('frontend/images/Web-Development.svg')}}" alt="">
                        </div>
                        <a href="service-web-development.html" class="hd-typ6 d-inline-block fs-25-xl fs-20-md fs-16-m fw-500 mb-xxl-4 mb-md-2">Web Development</a>
                        <p class="fs-18 fs-16-xl fs-14-m fw-400">
                            We build websites and applications using the latest technologies that work hard, achieve results, and generate a return on investment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme service-slider pt-xxl-3">
                <div class="item">
                    <a href="#" class="service-item logo-design">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Logo-Design.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Logo Design</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item graphic-design">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Graphic-Design.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Graphic Design</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item e-commerce">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/E-Commerce.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">E-Commerce</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item hosting-support">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Hosting-Support.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Hosting & Support</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item logo-design">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Logo-Design.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Logo Design</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item graphic-design">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Graphic-Design.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Graphic Design</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item e-commerce">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/E-Commerce.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">E-Commerce</h2>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="service-item hosting-support">
                        <span class="img-wrp">
                            <img src="{{asset('frontend/images/Hosting-Support.svg')}}" alt="">
                        </span>
                        <h2 class="fs-25 fs-23-xl fs-20-md fs-18-m">Hosting & Support</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="stories-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between flex-md-row flex-column mb-5">
                <h4 class="hd-typ1 fw-400 fs-25-xl fs-20-lg fs-18-m mb-md-0 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    Have a look at our success stories
                </h4>
                <a href="portfolio.html" class="view-more-btn fs-20 fs-17-xl fs-16-md fs-14-m fw-400" data-aos="fade-up" data-aos-duration="3000">VIEW MORE</a>
            </div>
            <div class="owl-carousel prev-work-slider">
                <div><img src="{{asset('frontend/images/slider-img1.png')}}" alt=""></div>
                <div><img src="{{asset('frontend/images/slider-img2.png')}}" alt=""></div>
                <div><img src="{{asset('frontend/images/slider-img3.png')}}" alt=""></div>
                <div><img src="{{asset('frontend/images/slider-img4.png')}}" alt=""></div>
                <div><img src="{{asset('frontend/images/slider-img5.png')}}" alt=""></div>
            </div>
        </div>
    </section>
    <section class="home-about-section">
        <div class="container overlap-txt-container">
            <div class="d-flex justify-content-between">
                <h4 class="hd-typ4 fw-400 fs-25-xl fs-25-lg fs-20-m mb-md-0 mb-3 d-flex flex-column" data-aos="fade-up" data-aos-duration="2000">
                    Small team
                    <strong class="fw-400">BIG things</strong>
                </h4>
                <a href="about-us.html" class="grey-text text-decoration-none fs-20 fs-17-xl fs-16-md fs-14-m fw-400 pt-xxl-4 pt-xl-3 pt-0" data-aos="fade-up" data-aos-duration="1000">ABOUT US</a>
            </div>
        </div>
        <div class="home-about-wrp pt-5 pb-5">
            <div class="container mt-xxl-5 pt-xxl-3 mb-xxl-5 mb-xl-4 mb-2" data-aos="fade-up" data-aos-duration="3000">
                <div class="row mt-lg-5 pt-xxl-5 pt-xl-4 pt-0">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <p class="fs-20 fs-18-xl fs-16-md fs-14-m fw-400 fw-300-sm">We're experts, not executives, and our team resides right here in Kochi, God's Own Country.</p>
                        <p class="fs-20 fs-18-xl fs-16-md fs-14-m fw-400 fw-300-sm">When you work with Reubro International on your web design, SEO, or online marketing project, you'll have the opportunity to collaborate directly with our developers & content creators.</p>
                        <p class="fs-20 fs-18-xl fs-16-md fs-14-m fw-400 fw-300-sm mb-5">As one of the highest-rated and most-reviewed web design companies in Kochi, we work efficiently and keep our overhead low which allows us to pack a good punch at a competitive price — no matter the size of your project.</p>
                        <a href="request-a-quote.html" class="fs-20 fs-18-xl fs-16-md fs-14-m fw-400 btn btn-one px-md-0 px-4">GET A GOOD DEAL TODAY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.homeheader.homeslides.testimonial')
    <section class="blog-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3 pb-xl-5">
        <div class="container mb-4" data-aos="fade-up" data-aos-offset="10" data-aos-duration="1000">
            <div class="d-flex flex-column align-items-center">
                <div class="grey-text fs-20 fs-17-xl fs-16-md fs-14-m fw-400 pt-xxl-4 pt-xl-3 pt-0">OUR BLOGS</div>
                <h4 class="hd-typ1 fw-400 fs-25-xl fs-20-lg fs-18-m">
                    Reubro Insights
                </h4>
            </div>
        </div>
        <div class="owl-carousel blog-post-slider">
            <div class="blog-post">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
            <div class="blog-post odd">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
            <div class="blog-post">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
            <div class="blog-post odd">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
            <div class="blog-post">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
            <div class="blog-post odd">
                <div class="top-title-wrp">
                    <div class="fs-25 fs-23-xl fs-20-md fs-18-sm fs-16-m fw-600">Insigts</div>
                    <span class="fs-18 fs-16-xl fs-14-md fs-13-m fw-300">Articles</span>
                </div>
                <div class="title-wrp">
                    <a href="#" class="post-name fs-25-xl fs-23-lg fs-20-md fs-18-sm fs-16-m fw-500">
                        Types of Mobile App Development Frameworks
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center d-flex" data-aos="fade-up" data-aos-duration="2000">
            <a href="#" class="custom-btn btn-1 btn-inner fs-20 fs-18-xl fs-17-lg fs-16-md fs-15-sm fs-14-m fw-400 px-xl-4 px-3 mx-auto mt-xl-4 mt-2 text-decoration-none">VIEW ALL BLOGS</a>
        </div>
    </section>
    <section class="get-in-touch-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3 pb-5">
        <div class="container">
            <div class="d-flex flex-column">
                <h4 class="hd-typ1 fw-400 fs-25-xl fs-20-lg fs-18-m" data-aos="fade-up" data-aos-duration="1000">
                    Let's make something awesome together.
                </h4>
                <div class="grey-text fs-20 fs-17-xl fs-16-md fs-14-m fw-400" data-aos="fade-up" data-aos-duration="2000">
                    Please fill out the quick form and we will be in touch with lightening speed.
                </div>
            </div>
            <form class="row justify-content-between mt-xxl-5 mt-4" method="post" action="{{route('storerequest')}}" data-aos="fade-up" data-aos-duration="3000">
            @csrf    
            <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="text" name="name" class="w-100" placeholder="Full name">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="text" name="companyname" class="w-100" placeholder="Company name">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="text" name="jobtitle" class="w-100" placeholder="Job title">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="email" name="email"class="w-100" placeholder="Email">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="text" class="w-100" placeholder="Phone">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="url" name="phone"class="w-100" placeholder="URL">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4">
                    <input type="text"name="url" class="w-100" placeholder="Message">
                </div>
                <div class="col-xl-5 col-lg-6 mb-xl-5 mb-4 mt-2 d-flex align-items-end">
                    <select class="custom-select w-100"name="interested">
                        <option value=""></option>
                        <option>Web Development</option>
                        <option>Web Design</option>
                        <option>Mobile Technology</option>
                        <option>Branding</option>
                        <option>print</option>
                        <option>Online Marketing</option>
                        <option>Social Media</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-end" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <button type="submit" class="custom-btn btn-1 btn-inner fs-20 fs-18-xl fs-17-lg fs-16-md fs-15-sm fs-14-m fw-400 px-xl-4 px-3 mt-4 text-decoration-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @endsection