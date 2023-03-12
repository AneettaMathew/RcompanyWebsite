@extends('frontend.main_master')
@section('main')
<section class="work-section pt-5 mt-xxl-5 mt-xl-4 mb-5">
        <div class="container">
            <h3 class="hd-typ7 fs-25-md fs-20-sm fs-18-m text-center mx-auto mb-lg-5 mb-md-4 mb-3">
                Request a Quote
            </h3>
        </div>
    </section>
    <section class="get-in-touch-section mt-md-5 mt-4 pt-xxl-4 pt-lg-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <form class="row justify-content-between me-lg-4" method="post" action="{{route('storerequest')}}">
                    @csrf
                        <div class="col-12 mb-4">
                        <span style="color: lightblue">@error('name'){{$message}}@enderror</span>
                            <input type="text" name="name" class="w-100" placeholder="Full name">
                        </div>
                        <div class="col-12 mb-4">
                        <span style="color: lightblue">@error('companyname'){{$message}}@enderror</span>
                            <input type="text" name="companyname" class="w-100" placeholder="Company name">
                        </div>
                        <div class="col-12 mb-4">
                        <span style="color: lightblue">@error('jobtitle'){{$message}}@enderror</span>
                            <input type="text" name="jobtitle" class="w-100" placeholder="Job title">
                        </div>
                        <div class="col-12 mb-4">
                        <span style="color: lightblue">@error('email'){{$message}}@enderror</span>
                            <input type="email" name="email" class="w-100" placeholder="Email">
                        </div>
                        <div class="col-12 mb-4">
                        <span style="color: lightblue">@error('phone'){{$message}}@enderror</span>
                            <input type="text"name="phone" class="w-100" placeholder="Phone">
                        </div>
                        <div class="col-12 mb-4">
                            <input type="url"name="url" class="w-100" placeholder="URL">
                        </div>
                        <div class="col-12 mb-4 mt-2 d-flex align-items-end" >
                        <span style="color: lightblue">@error('interested'){{$message}}@enderror</span>
                            <select class="custom-select w-100" name="interested">
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
                        <div class="col-12 mb-4">
                        <!-- <span style="color: lightblue">@error('message'){{$message}}@enderror</span> -->
                            <textarea type="text" class="w-100" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="custom-btn btn-1 btn-inner fs-20 fs-18-xl fs-17-lg fs-16-md fs-15-sm fs-14-m fw-400 px-xl-4 px-3 mt-4 text-decoration-none">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column ms-lg-4">
                        <div class="hd-typ5 fw-400 fs-25-xl fs-23-lg fs-18-m mb-3">
                            We love to talk!
                        </div>
                        <div class="fs-20 fs-17-xl fs-16-md fs-14-m fw-300 mb-5">
                            Have a project? Just drop an email to hrd@reubro.com or fill the form. We will contact you within 24 hours.
                        </div>
                        <div class="location-info">
                            <div class="addres d-flex mb-5">
                                <span class="icon">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span>
                                </span>
                                <div class="addr-box">
                                    <strong class="fw-600">Corporate Office</strong><br>
                                    <a href="https://goo.gl/maps/h8ipqPqChnG7xYnK8" target="_blank">
                                        Reubro International<br>
                                        39/3122, Valanjambalam<br>
                                        Kochi - 682 016<br>
                                        Kerala, India.
                                    </a>
                                </div>
                            </div>
                            <div class="addres d-flex mb-3">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.81016 12.1909C9.01433 15.3951 11.9835 15.7459 12.8552 15.7784C13.9085 15.8167 14.9835 14.9567 15.4485 14.0759C14.7068 13.2059 13.741 12.5309 12.6827 11.7992C12.0593 12.4226 11.291 13.5809 10.266 13.1659C9.6835 12.9317 8.24516 12.2692 6.9885 11.0117C5.731 9.75506 5.06933 8.31672 4.8335 7.73506C4.4185 6.70922 5.58016 5.93839 6.20433 5.31422C5.47266 4.23922 4.80933 3.24839 3.941 2.54422C3.04766 3.01089 2.18266 4.07756 2.22183 5.14506C2.25433 6.01672 2.60516 8.98589 5.81016 12.1909ZM12.7935 17.4434C11.5935 17.3992 8.19266 16.9301 4.631 13.3684C1.07016 9.80756 0.600996 6.40756 0.555996 5.20672C0.489329 3.37672 1.891 1.59922 3.51016 0.905058C3.70514 0.820863 3.91866 0.788808 4.12977 0.812037C4.34088 0.835266 4.54232 0.912982 4.71433 1.03756C6.05433 2.01506 6.9785 3.49589 7.77266 4.65589C7.93787 4.8971 8.01355 5.18848 7.98662 5.47959C7.95968 5.77071 7.83182 6.04325 7.62516 6.25006L6.49516 7.38089C6.75766 7.96006 7.29183 8.95839 8.16683 9.83339C9.04183 10.7084 10.0402 11.2426 10.6202 11.5051L11.7493 10.3751C11.9569 10.168 12.2306 10.0403 12.5227 10.0142C12.8148 9.98819 13.1067 10.0655 13.3477 10.2326C14.531 11.0526 15.921 11.9634 16.9343 13.2609C17.069 13.4341 17.1547 13.6404 17.1824 13.8581C17.2101 14.0758 17.1788 14.2969 17.0918 14.4984C16.3943 16.1259 14.6293 17.5109 12.7935 17.4434Z" fill="black"/>
                                    </svg>
                                </span> 
                                <div class="addr-box">
                                    <a href="tel:+91-484-2357256">+91-484-2357256</a>
                                </div>
                            </div>
                            <div class="addres d-flex mb-5">
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.81016 12.1909C9.01433 15.3951 11.9835 15.7459 12.8552 15.7784C13.9085 15.8167 14.9835 14.9567 15.4485 14.0759C14.7068 13.2059 13.741 12.5309 12.6827 11.7992C12.0593 12.4226 11.291 13.5809 10.266 13.1659C9.6835 12.9317 8.24516 12.2692 6.9885 11.0117C5.731 9.75506 5.06933 8.31672 4.8335 7.73506C4.4185 6.70922 5.58016 5.93839 6.20433 5.31422C5.47266 4.23922 4.80933 3.24839 3.941 2.54422C3.04766 3.01089 2.18266 4.07756 2.22183 5.14506C2.25433 6.01672 2.60516 8.98589 5.81016 12.1909ZM12.7935 17.4434C11.5935 17.3992 8.19266 16.9301 4.631 13.3684C1.07016 9.80756 0.600996 6.40756 0.555996 5.20672C0.489329 3.37672 1.891 1.59922 3.51016 0.905058C3.70514 0.820863 3.91866 0.788808 4.12977 0.812037C4.34088 0.835266 4.54232 0.912982 4.71433 1.03756C6.05433 2.01506 6.9785 3.49589 7.77266 4.65589C7.93787 4.8971 8.01355 5.18848 7.98662 5.47959C7.95968 5.77071 7.83182 6.04325 7.62516 6.25006L6.49516 7.38089C6.75766 7.96006 7.29183 8.95839 8.16683 9.83339C9.04183 10.7084 10.0402 11.2426 10.6202 11.5051L11.7493 10.3751C11.9569 10.168 12.2306 10.0403 12.5227 10.0142C12.8148 9.98819 13.1067 10.0655 13.3477 10.2326C14.531 11.0526 15.921 11.9634 16.9343 13.2609C17.069 13.4341 17.1547 13.6404 17.1824 13.8581C17.2101 14.0758 17.1788 14.2969 17.0918 14.4984C16.3943 16.1259 14.6293 17.5109 12.7935 17.4434Z" fill="black"/>
                                    </svg>
                                </span> 
                                <div class="addr-box">
                                    <a href="tel:+91 9847039733">+91 9847039733</a>
                                </div>
                            </div>
                            <div class="addres d-flex mb-3">
                                <span class="icon">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 2.71429C1 2.25963 1.18061 1.82359 1.5021 1.5021C1.82359 1.18061 2.25963 1 2.71429 1H14.7143C15.1689 1 15.605 1.18061 15.9265 1.5021C16.248 1.82359 16.4286 2.25963 16.4286 2.71429V11.2857C16.4286 11.7404 16.248 12.1764 15.9265 12.4979C15.605 12.8194 15.1689 13 14.7143 13H2.71429C2.25963 13 1.82359 12.8194 1.5021 12.4979C1.18061 12.1764 1 11.7404 1 11.2857V2.71429Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 2.71436L8.71429 7.85721L16.4286 2.71436" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <div class="addr-box">
                                    <a href="mailto:hrd@reubro.com">hrd@reubro.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
