@php
$meetteamlist = App\Models\MeetTeamMembers::all();
@endphp

<section class="mb-5">
        <div class="container">
            <h3 class="hd-typ7 fs-25-md fs-23-sm fs-20-m text-center">
                Meet the Team
            </h3>
            <p class="fs-18 fs-16-xl fs-14-md fs-13-m pb-xl-3 mb-5 text-center">A deliberately small, but effective, team. We pride ourselves on being a close-knit team with a powerful output.</p>
            <div class="row our-team justify-content-center">
            @foreach($meetteamlist as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="/backend/upload/{{$item->profile_image}}" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">{{$item->profile_name}}</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">{{$item->profile_role}}</span>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">SOORAJ</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Network Admin</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">SREEHARI</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">UI/UX Designer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/sreejith.webp" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">SREEJITH</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Front-End Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">ARYA</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">AKHIL</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">ASWIN</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-xxl-5 mb-xl-4 mb-sm-3 mb-2">
                    <div class="dtls-bx effect-shine text-center">
                        <div class="img-wrp mb-3 mx-auto">
                            <img src="images/img3.png" alt="">
                        </div>
                        <strong class="d-block fs-25 fw-700 fs-23-lg fs-20-md fs-18-sm fs-16-m mb-md-3 mb-2">GOKUL</strong>
                        <span class="d-block fs-14 fs-13-xl fw-300">Developer</span>
                    </div>
                </div> -->
            </div>
        </div>
    </section>