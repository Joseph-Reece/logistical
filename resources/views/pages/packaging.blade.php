@extends('components.layouts.app')

@section('main')
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Packaging</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Our Packaging Options</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    {{-- Main Start --}}

    <!--<div class="container pb-40">
        {{-- Barrel 1 --}}
        <section class="international-services position-relative pt-10 pb-20 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-lg-right text-center">
                                <img src="{{ asset('assets/img/gallery/Umzuq_box.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>Barrels</h2>
                            </div>
                            <div class="int-services-content">
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                                <ul>
                                    <li>
                                        <p><i class="flaticon-shipping"></i> With users who trust us</p>
                                    </li>
                                    <li>
                                        <p><i class="flaticon-warehouse"></i> Cargo in-transit between our warehouses. Less cost for you</p>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="btn">Get Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Barrels</div>
        </section>
        {{-- END Barrel --}}
        {{-- Umzuq Box --}}
        <section class="international-services position-relative pt-10 pb-20 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-lg-right text-center">
                                <img src="{{ asset('assets/img/gallery/Umzuq_box.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>Umzuq Box</h2>
                            </div>
                            <div class="int-services-content">
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                                <ul>
                                    <li>
                                        <p> <i class="flaticon-shipping"></i> With users who trust us</p>
                                    </li>
                                    <li>
                                        <p><i class="flaticon-warehouse"></i> Cargo in-transit between our warehouses. Less cost for you</p>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="btn">Get Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Umzuq Box</div>
        </section>
        {{-- END Umzuq Box --}}
        {{-- Pallet --}}
        <section class="international-services position-relative pt-10 pb-20 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-lg-right text-center">
                                <img src="{{ asset('assets/img/gallery/pallet.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>Palletes</h2>
                            </div>
                            <div class="int-services-content">
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                                <ul>
                                    <li>
                                        <p> <i class="flaticon-shipping"></i> With users who trust us</p>
                                    </li>
                                    <li>
                                        <p><i class="flaticon-warehouse"></i> Cargo in-transit between our warehouses. Less cost for you</p>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="btn">Get Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Pallete</div>
        </section>
        {{-- END Pallet --}}
        {{-- OPTION 1 --}}
        <section class="international-services position-relative pt-10 pb-20 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-lg-right text-center">
                                <img src="{{ asset('assets/img/gallery/Umzuq_box.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>Barrels</h2>
                            </div>
                            <div class="int-services-content">
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                                <ul>
                                    <li>
                                        <i class="flaticon-shipping"></i>
                                        <p>With users who trust us</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-warehouse"></i>
                                        <p>Cargo in-transit between our warehouses. Less cost for you</p>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="btn">Get Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Cargo</div>
        </section>
        {{-- END OPTOIN 1 --}}
        {{-- OPTION 1 --}}
        <section class="international-services position-relative pt-10 pb-20 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-lg-right text-center">
                                <img src="{{ asset('assets/img/gallery/Umzuq_box.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>Barrels</h2>
                            </div>
                            <div class="int-services-content">
                                <p>Jambo logistics pick-up service is effective logistics solution for delivery of small
                                    cargo.</p>
                                <ul>
                                    <li>
                                        <i class="flaticon-shipping"></i>
                                        <p>With users who trust us</p>
                                    </li>
                                    <li>
                                        <i class="flaticon-warehouse"></i>
                                        <p>Cargo in-transit between our warehouses. Less cost for you</p>
                                    </li>
                                </ul>
                                {{-- <a href="#" class="btn">Get Quote</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">Cargo</div>
        </section>
        {{-- END OPTOIN 1 --}}
    </div>
    {{-- Main End --}} -->
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
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-cargo-tab" data-toggle="pill" href="#v-pills-cargo"
                                role="tab" aria-controls="v-pills-cargo" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Cargo box</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
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
                                                        <img src="{{ asset('assets/img/gallery/Suitcases.png') }}" alt="">
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
                                                            One
                                                        </p>
                                                        <p>
                                                            <i class="fas fa-suitcase-rolling"></i>
                                                            Two
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
                                                        <img src="{{ asset('assets/img/gallery/barrell.png') }}" alt="">
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
                                                            <i class="fas fa-prescription-bottle"></i> One
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
                                                        <img src="{{ asset('assets/img/gallery/pallete.png') }}" alt="">
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
                                                            <i class="fas fa-pallet"></i> one
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
                                                            <img src="{{ asset('assets/img/gallery/pallet.png') }}" alt="">
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
                                                        <img src="{{ asset('assets/img/gallery/boxing.png') }}" alt="">
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
                                                            <i class="fas fa-box"></i> one
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
                                                        <img src="{{ asset('assets/img/gallery/cargo_box.png') }}" alt="">
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
                                                            <i class="fas fa-box"></i> one
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
@endsection
