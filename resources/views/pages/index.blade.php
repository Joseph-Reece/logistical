@extends('components.layouts.app')

@section('main')
    <!-- slider-area -->
    <section class="s-slider-area">
        <div class="s-slider-bg fix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-slider-content text-center">
                            <h6><span class="dots"></span>logistics cargo service<span class="dots2"></span></h6>
                            <h2 class="frame-1"><span>Package</span> Delivery</h2>
                            <h2 class="frame-2"><span>Cargo</span> Delivery</h2>
                            <h2 class="frame-3"><span>Cargo</span> Delivery</h2>
                            <h2 class="frame-4"><span>Cargo</span> Delivery</h2>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#category-section" class="icon-scroll">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="slider-golve">
                <img src="{{ asset('assets/img/slider/golve.png') }}" class="rotateme" alt="">
            </div>
            <div class="slider-golve-bike">
                <img src="{{ asset('assets/img/slider/car.png') }}" alt="">
            </div>
            <div class="slide-golve-car">
                <img src="{{ asset('assets/img/slider/car.png') }}" alt="">
            </div>
            <div class="slider-plane">
                <img src="{{ asset('assets/img/slider/plane.png') }}" alt="">
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- category-area -->
    <section id="category-section" class="s-category-area">
        <div class="container">
            <div class="s-category-wrap">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('products') }}" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-cruise"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Manage Pickup</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('products') }}" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-cruise"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>shipping</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="{{ route('packaging') }}" class="s-single-cat mb-30">
                            <div class="s-cat-icon">
                                <i class="flaticon-warehouse"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5>Packaging</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-area-end -->

    <!-- services-area -->
    {{-- <section class="services-area delivery-bg pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title mb-60 text-center">
                        <h2>Cargo Delivery</h2>
                        <p>Fill Text Here</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('assets/img/images/client.jpg') }}" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping-and-delivery"></i>
                                </div>
                                <h3><a href="#">More Control, Efficient</a></h3>
                                <span>Pickup Service</span>
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('assets/img/images/pickup.jpg') }}" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping"></i>
                                </div>
                                <h3><a href="#">Less Cost, Quality Service</a></h3>
                                <span>Warehousing</span>
                                <p>Cargo in-transit between our warehouses. Less cost for you</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                            <div class="single-services mb-30">
                                <div class="services-thumb">
                                    <a href="#"><img src="{{ asset('assets/img/images/services_img03.jpg') }}" alt="img"></a>
                                </div>
                                <div class="services-content">
                                    <div class="services-icon">
                                        <i class="flaticon-location"></i>
                                    </div>
                                    <h3><a href="#">More Than Anywhere Shipping</a></h3>
                                    <span>Delivery Service</span>
                                    <p>Jambo logistics Delivery service is effective logistics solution for delivery of small cargo.</p>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </section> --}}
    {{-- services section end --}}

    <section class="international-services position-relative pt-120 pb-100 fix">
        <div class="container">
            <div class="services-wrapper">
                <h2 class="text-center">Services We Offer</h2>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/images/' . $product['image_path']) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $product['name'] }}
                                    </h5>
                                    <p>
                                        {{ $product['description'] }}
                                    </p>
                                    <a href="{{ $product['name'] }}" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">Cargo</div>
    </section>
    <!-- services-area-end -->

    <!-- video-area -->
    <!-- <section class="video-area video-bg">
                        <div class="container">
                            <div class="video-overlay">
                                <div class="row align-items-center">
                                    <div class="col-xl-5 col-lg-8 order-lg-0 order-2">
                                        <div class="video-title">
                                            <span>Our Chalanges</span>
                                            <h2><span>never</span> break our promise</h2>
                                            <a href="#">more services<span></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="video-play">
                                            <a href="https://www.youtube.com/watch?v=iWKu6WNFf9M" class="popup-video"><img src="{{ asset('assets/img/icon/play_btn.png') }}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
    <!-- video-area-end -->

    <!-- delivery-services -->
    <section class="delivery-services position-relative fix pt-90">
        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">Delivery</div>
        <div class="delivery-services-bg"></div>
        <div class="container">
            <div class="delivery-services-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title mb-60 text-center">
                            <h2>Why Us</h2>
                            <p>See why Our Clients Choose us</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-delivery-services mb-70 pr-75">
                            <div class="ds-icon order-0 order-md-2">
                                <img src="{{ asset('assets/img/icon/ds_icon01.png') }}" alt="icon">
                            </div>
                            <div class="ds-content text-sm-left text-md-right text-center">
                                <h5>Courier Services </h5>
                                {{--  <p>Text Here Text Here</p>  --}}
                            </div>
                        </div>
                        <div class="single-delivery-services mb-70 pr-75">
                            <div class="ds-icon order-0 order-md-2">
                                <img src="{{ asset('assets/img/icon/ds_icon02.png') }}" alt="icon">
                            </div>
                            <div class="ds-content text-sm-left text-md-right text-center">
                                <h5>Satisfied clients</h5>
                                {{--  <p>Text Here Text Here</p>  --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block">
                        <div class="d-services-img">
                            <img src="{{ asset('assets/img/images/why-us.png') }}" alt="img">


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-delivery-services mb-70 pl-75">
                            <div class="ds-icon">
                                <img src="{{ asset('assets/img/icon/ds_icon04.png') }}" alt="icon">
                            </div>
                            <div class="ds-content">
                                <h5>Door-Door Pick-up services</h5>
                                {{--  <p>Text Here Text Here</p>  --}}
                            </div>
                        </div>
                        <div class="single-delivery-services mb-70 pl-75">
                            <div class="ds-icon">
                                <img src="{{ asset('assets/img/icon/ds_icon05.png') }}" alt="icon">
                            </div>
                            <div class="ds-content">
                                <h5>Heavy Boxes Cargo</h5>
                                {{--  <p>Text Here Text Here</p>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- delivery-services-end -->
    <!-- faq-area -->
    <section class="faq-area faq-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title mb-60 text-center">
                        <h2>Packaging options we provide</h2>
                        <p>We Offer a wide range of packaging solutions to our clients</p>
                    </div>
                </div>
            </div>
            <div class="faq-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="nav flex-column nav-pills faq-tab-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="faq-tab-icon">
                                    {{-- <i class="far fa-bell"></i> --}}
                                    <i class="fas fa-suitcase-rolling"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Suitcase</h5>
                                    <p>Shipping accross countries</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-prescription-bottle"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Barells</h5>
                                    <p>Types of cargo and packaging</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-pallet"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Pallete</h5>
                                    <p>Cargo transportation services</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Umzuq box</h5>
                                    <p>Boxing packages</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-cargo-tab" data-toggle="pill" href="#v-pills-cargo"
                                role="tab" aria-controls="v-pills-cargo" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Cargo box</h5>
                                    <p>Boxing packages</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-suitcase-rolling"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Suitcase</h5>
                                            <p>Shipping internationally</p>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/img/gallery/Suitcases.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            What Type of Cargo
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <i class="fas fa-suitcase-rolling"></i>
                                                            Clothes
                                                        </p>
                                                        <p>
                                                            <i class="fas fa-suitcase-rolling"></i>
                                                            Kitchenware
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-prescription-bottle"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Barells</h5>
                                            <p>Barells Option</p>
                                        </div>
                                        <div class="accordion" id="accordionAwardExample">
                                            <div class="card">
                                                <div class="card-header" id="headingAwardOne">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/img/gallery/barrell.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseAwardTwo" aria-expanded="false"
                                                            aria-controls="collapseAwardTwo">
                                                            What type of cargo go in Barrells?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardTwo" class="collapse show"
                                                    aria-labelledby="headingAwardTwo"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <i class="fas fa-prescription-bottle"></i> Fragile goods such as Glassware
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-pallet"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Pallet Option</h5>
                                            <p>Pallet for Boxes</p>
                                        </div>
                                        <div class="accordion" id="accordionBullseyeExample">
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeOne">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/img/gallery/pallete.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseBullseyeTwo" aria-expanded="false"
                                                            aria-controls="collapseBullseyeTwo">
                                                            What type of cargo go in pallets
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeTwo" class="collapse show"
                                                    aria-labelledby="headingBullseyeTwo"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <i class="fas fa-pallet"></i> large and Bulky goods such as Doors and Windows.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeFive"
                                                            aria-expanded="false" aria-controls="collapseBullseyeFive">
                                                            More Images
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeFive" class="collapse"
                                                    aria-labelledby="headingBullseyeFive"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <div class="img-box">
                                                            <img src="{{ asset('assets/img/gallery/pallet.png') }}"
                                                                alt="">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-box"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Umzuq Box</h5>
                                            <p>Umzuq Boxing cargo</p>
                                        </div>
                                        <div class="accordion" id="accordionCogExample">
                                            <div class="card">
                                                <div class="card-header" id="headingCogOne">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/img/gallery/boxing.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseCogTwo" aria-expanded="false"
                                                            aria-controls="collapseCogTwo">
                                                            What Type of Cargo go In Umzuq Boxes?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogTwo" class="collapse show"
                                                    aria-labelledby="headingCogTwo" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <i class="fas fa-box"></i> Light goods such as clothes and kitchenware
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-cargo" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-boxes"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Cargo Boxes</h5>
                                            <p>Cargo box packaging.</p>
                                        </div>
                                        <div class="accordion" id="accordionCogExample">
                                            <div class="card">
                                                <div class="card-header" id="headingCogOne">

                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/img/gallery/cargo_box.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseCogTwo" aria-expanded="false"
                                                            aria-controls="collapseCogTwo">
                                                            Types Of Cargo to go in cargo Boxes?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogTwo" class="collapse show"
                                                    aria-labelledby="headingCogTwo" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>
                                                            <i class="fas fa-box"></i> Light goods such as clothes and kitchenware
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- fact-area -->
    <section class="fact-area pt-120 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-package"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">3,560</span> km</h4>
                            <h6>Package Delivered</h6>
                            {{--  <p>Fill Text Here</p>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">67</span></h4>
                            <h6>Countries Covered</h6>
                            {{--  <p>Fill Text Here</p>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-user"></i>
                        </div>
                        <div class="fact-content">
                            <h4><span class="count">456</span> k</h4>
                            <h6>Happy Customers</h6>
                            {{--  <p>Fill Text Here</p>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-fact mb-50">
                        <div class="fact-icon mb-25">
                            <i class="flaticon-like"></i>
                        </div>
                        <div class="fact-content">
                            <h4>+<span class="count">10</span> Yrs</h4>
                            <h6>Year Experience</h6>
                            {{--  <p>Fill Text Here</p>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-area-end -->

    <!-- section-area -->
    <section class="area-wrapper black-bg position-relative pt-115 pb-120 mb-120">
        <div class="area-wrap-bg"></div>
        <div class="testimonial-map-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-area">
                        <div class="section-title white-title mb-55">
                            <h6>Happy Customer Quotes</h6>
                            <h2>Our Top Reviews</h2>
                        </div>
                        <div class="testimonial-active">
                            @foreach ($testimonials as $testimonial)
                                <div class="single-testimonial">
                                    <div class="testimonial-cat mb-30">
                                        <h5>{{ $testimonial['type'] }}</h5>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-content mb-45">
                                        <p>??? {{ $testimonial['message'] }} ???</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="testi-avatar-info">
                                            <h6>{{ $testimonial['client'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-area cta-pl">
                        <div class="section-title white-title mb-60">
                            <h6>Clients Trust Us</h6>
                            <h2>Cargo Request Quote</h2>
                        </div>
                        <div class="cta-from">
                            <form action="{{ route('sendMail') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- hidden shipping service --}}
                                <div class="cta-form-col d-flex justify-content-between">
                                    <input type="text" name="length" placeholder="Length cm">
                                    <input type="text" name="width" placeholder="Width cm">
                                    <input type="text" name="height" placeholder="Height cm">
                                </div>
                                <div class="cta-form-col d-flex justify-content-between">
                                    <select class="custom-select" name="origin">
                                        <option selected="">From Country</option>
                                        @foreach ($euro_countries as $country)
                                            <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                        @endforeach

                                    </select>
                                    <select class="custom-select" name="destination">
                                        <option selected="">To Country</option>
                                        @foreach ($east_africa_countries as $country)
                                            <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="cta-form-col d-flex justify-content-between">
                                    <input type="tel" class="cta-email" name="contact" id="contact"
                                        placeholder="contact">
                                    <input class="cta-email" type="email" name="email" placeholder="Email ID">
                                </div>
                                {{-- <h4 class="extra-services"><i class="fas fa-binoculars"></i>Extra Service</h4>
                                <ul>
                                    <li>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Shipping Cargo</label>
                                        </div>
                                    </li>
                                </ul> --}}
                                <button type="submit" class="btn">Get Quote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section-area-end -->

    <!-- control-area -->
    {{-- <section class="control-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title mb-60 text-center">
                        <h2>We give complete control</h2>
                        <p>Our Portfolio</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid control-fluid">
            <div class="row control-active">
                <div class="col-xl-4">
                    <div class="single-control-wrap fix">
                        <div class="control-thumb">
                            <img src="{{ asset('assets/img/images/tallbox.jpg') }}" alt="img">
                        </div>
                        <div class="control-overlay-content">
                            <h4><a href="#">Cargo Truck</a></h4>
                            <span>Delivery Anything</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-control-wrap fix">
                        <div class="control-thumb">
                            <img src="{{ asset('assets/img/images/tallbox.jpg') }}" alt="img">
                        </div>
                        <div class="control-overlay-content">
                            <h4><a href="#">Cargo shipping</a></h4>
                            <span>Delivery Anything</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-control-wrap fix">
                        <div class="control-thumb">
                            <img src="{{ asset('assets/img/images/tallbox.jpg') }}" alt="img">
                        </div>
                        <div class="control-overlay-content">
                            <h4><a href="#">Cargo Truck</a></h4>
                            <span>Delivery Anything</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-control-wrap fix">
                        <div class="control-thumb">
                            <img src="{{ asset('assets/img/images/tallbox.jpg') }}" alt="img">
                        </div>
                        <div class="control-overlay-content">
                            <h4><a href="#">Cargo shipping</a></h4>
                            <span>Delivery Anything</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="single-control-wrap fix">
                        <div class="control-thumb">
                            <img src="{{ asset('assets/img/images/tallbox.jpg') }}" alt="img">
                        </div>
                        <div class="control-overlay-content">
                            <h4><a href="#">Cargo Truck</a></h4>
                            <span>Delivery Anything</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- control-area-end -->

    <!-- brand-area -->
    <!-- <div class="brand-area gray-bg pt-85 pb-85">
                        <div class="container">
                            <div class="row brand-active">
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo01.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo02.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo03.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo04.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo05.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="signle-brand">
                                        <img src="{{ asset('assets/img/brand/brnad_logo03.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
    <!-- brand-area-end -->

    <!-- newsletter -->
    <!-- <section class="newsletter-area gray-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="newsletter-wrap">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="newsletter-content">
                                                    <h4>Newsletter Sign Up</h4>
                                                    <span>Notifications our best deals...</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="newsletter-form">
                                                    <form action="#">
                                                        <input type="email" placeholder="Enter your email...">
                                                        <button class="btn">subscribe</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
    <!-- newsletter-end -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.country-select').select2();
        });
    </script>
@endsection
