@extends('layouts.originalLayout')

@section('insideHead')
    <link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
    <link rel="stylesheet" href="{{asset('css/abouted.css')}}" />
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/alime/style.css"> -->
@endsection

@section('system')

    <!-- breadcrumb start-->
    <section class="special"> </section>
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <div class="m-3">
        <h2 style="text-align: center;">ABOUT US</h2>
    </div>
    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <!-- <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-6">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/Frank_Lloyd_Wright.jpg" alt="">
                        </div>
                        <h5>Masum Ahmed EeSha</h5>
                        <span>Software Engineer</span>
                        <div class="member-social-info">
                            <a href="https://www.facebook.com/wreckagetune"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Team Member Area -->
                <div class="col-md-6 col-xl-6">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="300ms">
                        <div class="member-thumb">
                                <img src="img/bg-img/le-corbusier.jpg" alt="">
                        </div>
                        <h5> Md. Golam Shahria Bhuyain </h5>
                        <span>Civil Engineer</span>
                        <div class="member-social-info">
                            <a href="https://www.facebook.com/md.golamshahriabhuyain"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="member-thumb">
                                <img src="img/bg-img/Mies_van_der-Rohe_Ludwig.jpg" alt="">
                        </div>
                        <h5>Mies Van Der Rohe Ludwig</h5>
                        <span>Architect</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="member-thumb">
                            <img src="img/bg-img/pjohnson2.jpg" alt="">
                        </div>
                        <h5>Philip Johnson</h5>
                        <span>American Architect</span>
                        <div class="member-social-info">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Our Team Area End -->


        <!-- contact us part start-->
        <!-- <section class="contact_us">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact_us_iner">
                                <div class="row justify-content-around">
                                    <div class="col-lg-4">
                                        <div class="contact_us_left_text">
                                            <h4>Sylhet, Bangladesh</h4>
                            
                                            <p>Amir Complex, Shahajalal University Gate, Akhalia, Sylhet</p>
                                            <p>Email: masumahmed28@student.sust.edu <br>Phone no: 01786122963</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="contact_us_right_text">
                                            <h5>Call Directly;</h5>
                                            <h2>(+880 1786 122963)</h2>
                                            <h5>Brand Office</h5>
                                            <span>Amir Complex, Shahajalal University Gate, Akhalia, Sylhet</span>
                                            <h5>Working Hours:</h5>
                                            <p>Monday - Friday / 9.00 PM - 5.00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- contact us part end-->

@endsection


@section('queryQuota')

@endsection