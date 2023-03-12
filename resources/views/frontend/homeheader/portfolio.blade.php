<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reubro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/font-size-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
     <!-- header start -->
     @include(' frontend.body.header')
        <!-- header end -->
    <section class="portfolio-text-section pt-5 pb-xl-4 mb-5">
        <div class="container">
            <h2 class="hd-typ7 fs-25-md fs-20-sm fs-18-m mb-xl-3">
                Our Portfolio
            </h2>
            <div class="row">
                <div class="col-md-6 pe-xl-4">
                    <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m">
                        As a leading London digital agency we consider each project to be unique. We take the time to understand your business and target audience before designing your web site or branding identity. View our web design and brand identity projects below and filter according to industry.
                    </p>
                </div>
                <div class="col-md-6 ps-xl-4">
                    <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m mb-0">
                        We pride ourselves in being able to work across a number of disciplines from corporate websites to lifestyle & interiors, ecommerce and media & communications.
                    </p>
                    <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m">
                        Click here to view only <a href="service-web-design.html" class="fw-600">web design</a> projects and click here to view only our <a href="service-branding.html" class="fw-600">brand identity</a> projects.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5 portfolio-section">
        <div class="container">
            <ul id="grid-filter">
                <li data-category="*" class="active">All</li>
                <li data-category="branding">Branding</li>
                <li data-category="digital-marketing">Digital Marketing</li>
                <li data-category="websites">Websites</li>
                <li data-category="flyers">Flyers</li>
            </ul>
            <div id="masonry-grid">
                <div class="gutter-sizer"></div>
                <div class="grid-item websites">
                    <div class="img-wrp mb-3">
                        <img src="{{asset('frontend/images/img12.png')}}" alt="">
                    </div>
                    <div class="our-role fs-15-lg fs-14-md fs-13-m mb-2"><span class="me-md-5 me-3">WEB DESIGN</span><span>WEBSITE DEVELOPMENT</span></div>
                    <h3><a href="web-design-details.html">Curepipe Co-operative Credit Union Limited</a></h3>
                    <p class="fs-15-lg fs-14-md fs-13-m">We completely transformed the image of Bristol's finest coffee company.</p>
                </div>
                <div class="grid-item flyers">
                    <div class="img-wrp mb-3">
                        <img src="{{asset('frontend/images/greenthumb_seminars_flyer1.png')}}" alt="">
                    </div>
                    <div class="our-role fs-15-lg fs-14-md fs-13-m mb-2"><span class="me-md-5 me-3">FLYER</span></div>
                    <h3>My little Green Thumb</h3>
                    <p class="fs-15-lg fs-14-md fs-13-m">My Little Greenthumb is an application that connects gardening enthusiasts with suppliers</p>
                </div>
                <div class="grid-item digital-marketing">
                    <div class="img-wrp mb-3">
                        <img src="{{asset('frontend/images/IG_Carosal_1.png')}}" alt="">
                    </div>
                    <div class="our-role fs-15-lg fs-14-md fs-13-m mb-2"><span class="me-md-5 me-3">SOCIAL MEDIA POST</span></div>
                    <h3>Memmbles</h3>
                    <p class="fs-15-lg fs-14-md fs-13-m">Memmbles is a social media networking platform for album sharing, that allows its users to share photos, videos, voice/sound files and data with friends and families</p>
                </div>
                <div class="grid-item branding">
                    <div class="img-wrp mb-3">
                        <img src="{{asset('frontend/images/ROH-2.png')}}" alt="">
                    </div>
                    <div class="our-role fs-15-lg fs-14-md fs-13-m mb-2"><span class="me-md-5 me-3">LOGO DESIGN</span></div>
                    <h3>MSK Radiology</h3>
                    <p class="fs-15-lg fs-14-md fs-13-m">The Musculoskeletal Radiology section brings significant depth of expertise to the treatment of diseases or injuries of the joints. . .</p>
                </div>
            </div>
        </div>
    </section>
     <!-- footer start -->
     @include('frontend.body.footer')
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
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
        
        $(document).ready(function(){
            $("#grid-filter > li").click(function(){
                $(this).addClass("active");
                $(this).siblings().removeClass("active");
            });

            $('#masonry-grid').masonry({
                columnWidth: '.gutter-sizer',
                gutter: 30,
                itemSelector: '.grid-item'
            });
            // This does the filter by binding an event on the change of a select box
            $("#grid-filter li").click(function () {
                var group = $(this).data('category');
                var group_class = "." + group;

                if (group == "*") {
                    $(".grid-item").show();
                    $('#masonry-grid').masonry('layout');
                }
                else if (group != "") {
                    $(".grid-item").hide();
                    $(group_class).show();
                    $('#masonry-grid').masonry('layout');
                } else {
                    $(".grid-item").show();
                    $('#masonry-grid').masonry('layout');
                }
            });
        });
    </script>
</body>
</html>