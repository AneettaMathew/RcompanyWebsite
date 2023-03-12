<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reubro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/font-size-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body>
    <!-- header start -->
    @include(' frontend.body.header')
        <!-- header end -->
     <!-- body start -->
     <main>
     @yield('main')
</main>
    <!-- body end -->
    <!-- footer start -->
    @include('frontend.body.footer')
    <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    
    <script>

 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>




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
            /*****Animation on scroll********/
            // AOS.init();
            AOS.init({disable: 'mobile'});  
            /********************************/
            $('.service-slider').owlCarousel({
                items:4,
                autoplay:true,
                loop:true,
                margin:35,
                smartSpeed:1000,
                nav:true,
                dots:false,
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        dots:true
                    },
                    600:{
                        items:2,
                        nav:false,
                        dots:true
                    },
                    767:{
                        items:3,
                        nav:false,
                        dots:true
                    },
                    991:{
                        items:4,
                        nav:true,
                        dots:false
                    }
                }
            });
            $('.prev-work-slider').owlCarousel({
                center: false,
                items:2,
                autoplay:true,
                loop:true,
                margin:25,
                smartSpeed:2000,
                nav:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:2,
                        nav:true
                    },
                    991:{
                        items:2,
                        nav:true
                    }
                }
            });
            $('.testimonial-carousel').owlCarousel({
                loop:true,
                autoplay:true,
                margin:15,
                nav:true,
                dots:false,
                center:false,
                smartSpeed:2000,
                items:2,
                responsive:{
                    0:{
                        items:1
                    },
                    767:{
                        items:2
                    }
                }
            });
            $('.blog-post-slider').owlCarousel({
                center: false,
                autoplay:true,
                items:4,
                stagePadding: 50,
                smartSpeed:1000,
                loop:true,
                margin:4,
                nav:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    767:{
                        items:3
                    },
                    991:{
                        items:4
                    }
                }
            });
            $('.custom-select').select2({
                minimumResultsForSearch: Infinity,
                placeholder: "Interested in",
                allowClear: true
            });
        });
        
    </script>
</body>
</html>