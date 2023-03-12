<header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light main_header_area animated">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h1 class="mb-0"><img src="{{asset('frontend/images/logo.svg')}}" alt=""></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home.home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.aboutus')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.portfolio')}}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.Clients')}}">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.Careers')}}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.ContactUs')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="quote-btn">
                    <a href="{{route('home.Requestquotes')}}" class="custom-btn btn-1 fs-15 fs-14-md fs-13-m fw-400 px-xl-4 px-lg-2 px-3 ms-xl-4 ms-lg-2 ms-md-0 me-lg-0 me-md-3">Request a Quote</a>
                </div>
            </div>
        </nav>
    </header>