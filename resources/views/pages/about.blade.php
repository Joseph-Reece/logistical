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
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->


    <!-- services-area -->
    <section class="services-area delivery-bg pt-110 pb-90">
        <div class="container">
            <div class="services-wrapper">
                {{-- Tabs Area --}}
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button"
                            role="tab" aria-controls="home" aria-selected="true">About Us</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button"
                            role="tab" aria-controls="profile" aria-selected="false">Our History</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button"
                            role="tab" aria-controls="contact" aria-selected="false">Milestones</a>
                    </li>
                </ul>
                <div class="tab-content pt-3" id="myTabContent">
                    {{-- Company profile --}}
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="services-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="int-services-img text-lg-right text-center">
                                        <img src="{{ asset('assets/img/images/transports.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="s-section-title mb-30">
                                        <h2>Company Profile</h2>
                                        <h6>About our company</h6>
                                    </div>
                                    <div class="int-services-content">
                                        <p>Jambo Logistics is the leading innovative Logistics solutions provider. We Have a
                                            proven track
                                            record of performance driven by our solid knowledge and experience in the
                                            Logistic industry.</p>
                                        {{-- <a href="#" class="btn red-btn">comparison</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- History --}}
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="services-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="int-services-img text-lg-right text-center">
                                        <img src="{{ asset('assets/img/images/transports.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="s-section-title mb-30">
                                        <h2>Our History</h2>
                                        <h6>Brief history of our company</h6>
                                    </div>
                                    <div class="int-services-content">
                                        <p>Jambo Logistics was established in the year 2005 and have experienced tremendous
                                            growth over
                                            the last 17years. The company has made great in-roads and established a
                                            reputable foot print
                                            in the European Market. We now have three fully functional business lines</p>
                                        {{-- <a href="#" class="btn red-btn">comparison</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                            data-paroller-direction="horizontal">Cargo</div>
                    </div>
                    {{-- Milestones --}}
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="services-wrapper">
                        </div>
                    </div>
                </div>

                {{-- Tabs Area --}}
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- faq-area -->
    <section class="faq-area faq-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title mb-60 text-center">
                        <h2>frequently asked questions</h2>
                        <p>Find Questions our clients frequently ask</p>
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
                                    <i class="far fa-question-circle"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>International Shipping</h5>
                                    <p>Shipping accross countries</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-ship"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Shipping</h5>
                                    <p>Questions asked About Shipping</p>
                                </div>
                            </a>
                            {{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Words Cargo Freight</h5>
                                    <p>Cargo transportation services</p>
                                </div>
                            </a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <div class="faq-tab-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="faq-tab-content d-none d-lg-block">
                                    <h5>Shipping Lines</h5>
                                    <p>Express delivery is an innovative service effective logistics.</p>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="far fa-question-circle"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Anywhere Shipping</h5>
                                            <p>Shipping internationally</p>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Where do we ship
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>We Ship across Europe and East Africa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            What is the difference between cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Cargo is the term used to describe the goods moved on a conveyance, and logistics is the science and art of organizing that movement. While cargo refers to the goods and materials, logistics is the end-to-end gambit, including customer support. Logistics does not have to involve cargo necessarily, but cargo can’t move without logistics.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Cargo is the goods carried by larger vehicles, like cargo ships and cargo planes. At the same time, the freight is the goods carried by trucks. Cargo does not refer to money charged for transportation. But it only means the product being transported from one place to another. On the other hand, freight also refers to the goods transported from one place to another. But it can also be called the process of transporting.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">
                                                            What are types of Shipment?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>- Boxes. In terms of Banana Boxes or Umzug carton</p>
                                                        <p>- Suitcases</p>
                                                        <p>- Barells. Used for Fragile Items</p>
                                                        <p>- Pallete. Used For Bulky Goods</p>
                                                        <a href="{{route('packaging')}}" class="btn btn-primary">Learn more.</a>
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
                                        <i class="fas fa-ship"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Shipping</h5>
                                            <p>Jambo Logistics</p>
                                        </div>
                                        <div class="accordion" id="accordionAwardExample">
                                            <div class="card">
                                                <div class="card-header" id="headingAwardOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseAwardOne"
                                                            aria-expanded="true" aria-controls="collapseAwardOne">
                                                            Shipment Duration
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardOne" class="collapse"
                                                    aria-labelledby="headingAwardOne"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>
                                                            From the time the container leaves the shipping line, 4 to 6 weeks
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseAwardTwo" aria-expanded="false"
                                                            aria-controls="collapseAwardTwo">
                                                            Shipment Charges
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardTwo" class="collapse show"
                                                    aria-labelledby="headingAwardTwo"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>We calculate the cost of our shipments using the package's volume, or L * W * H in cm.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseAwardThree"
                                                            aria-expanded="false" aria-controls="collapseAwardThree">
                                                            Are there Other Charges
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardThree" class="collapse"
                                                    aria-labelledby="headingAwardThree"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>No more payments from our clients are necessary after the shipping has been paid for.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseAwardFour"
                                                            aria-expanded="false" aria-controls="collapseAwardFour">
                                                            What are the different types of shipment?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardFour" class="collapse"
                                                    aria-labelledby="headingAwardFour"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>- Boxes. Light items can be packaged, such as clothing and kitchenware.</p>
                                                        <p>- Suitcases. Clothing and other non-fragile items can be packaged.</p>
                                                        <p>- Barells. appropriate for delicate items like glassware</p>
                                                        <p>- Pallete. suitable for large and bulky products like doors and windows</p>
                                                        <a href="{{route('packaging')}}" class="btn btn-primary">Learn more.</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingAwardFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseAwardFive"
                                                            aria-expanded="false" aria-controls="collapseAwardFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseAwardFive" class="collapse"
                                                    aria-labelledby="headingAwardFive"
                                                    data-parent="#accordionAwardExample">
                                                    <div class="card-body">
                                                        <p>Sea Cargo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="faq-accordion">
                                    <div class="faq-tab-icon">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Words Cargo Freight</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionBullseyeExample">
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeOne"
                                                            aria-expanded="true" aria-controls="collapseBullseyeOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeOne" class="collapse"
                                                    aria-labelledby="headingBullseyeOne"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseBullseyeTwo" aria-expanded="false"
                                                            aria-controls="collapseBullseyeTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeTwo" class="collapse show"
                                                    aria-labelledby="headingBullseyeTwo"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeThree"
                                                            aria-expanded="false" aria-controls="collapseBullseyeThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeThree" class="collapse"
                                                    aria-labelledby="headingBullseyeThree"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeFour"
                                                            aria-expanded="false" aria-controls="collapseBullseyeFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeFour" class="collapse"
                                                    aria-labelledby="headingBullseyeFour"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeFive"
                                                            aria-expanded="false" aria-controls="collapseBullseyeFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeFive" class="collapse"
                                                    aria-labelledby="headingBullseyeFive"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBullseyeSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseBullseyeSix"
                                                            aria-expanded="false" aria-controls="collapseBullseyeSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseBullseyeSix" class="collapse"
                                                    aria-labelledby="headingBullseyeSix"
                                                    data-parent="#accordionBullseyeExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
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
                                        <i class="fas fa-cog"></i>
                                    </div>
                                    <div class="faq-accordion-content fix">
                                        <div class="faq-tab-content mb-30">
                                            <h5>Shipping Lines</h5>
                                            <p>Express delivery is an innovative service effective logistics.</p>
                                        </div>
                                        <div class="accordion" id="accordionCogExample">
                                            <div class="card">
                                                <div class="card-header" id="headingCogOne">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseCogOne"
                                                            aria-expanded="true" aria-controls="collapseCogOne">
                                                            What is Startesk?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogOne" class="collapse" aria-labelledby="headingCogOne"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogTwo">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link" data-toggle="collapse"
                                                            data-target="#collapseCogTwo" aria-expanded="false"
                                                            aria-controls="collapseCogTwo">
                                                            What is cargo and logistics?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogTwo" class="collapse show"
                                                    aria-labelledby="headingCogTwo" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogThree">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseCogThree"
                                                            aria-expanded="false" aria-controls="collapseCogThree">
                                                            What is the difference between freight and cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogThree" class="collapse"
                                                    aria-labelledby="headingCogThree" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogFour">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseCogFour"
                                                            aria-expanded="false" aria-controls="collapseCogFour">
                                                            What is between shipment cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogFour" class="collapse"
                                                    aria-labelledby="headingCogFour" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogFive">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseCogFive"
                                                            aria-expanded="false" aria-controls="collapseCogFive">
                                                            What are types of cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogFive" class="collapse"
                                                    aria-labelledby="headingCogFive" data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingCogSix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="btn-link collapsed"
                                                            data-toggle="collapse" data-target="#collapseCogSix"
                                                            aria-expanded="false" aria-controls="collapseCogSix">
                                                            What is the difference between freight cargo?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseCogSix" class="collapse" aria-labelledby="headingCogSix"
                                                    data-parent="#accordionCogExample">
                                                    <div class="card-body">
                                                        <p>Express delivery is an innovative service is effective logistics
                                                            solution for the delivery of
                                                            small cargo. This service is useful companies of various
                                                            effective service is effective
                                                            logistics scale.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- brand-area -->
    <div class="brand-area pt-85 pb-85">
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
    </div>
    <!-- brand-area-end -->

    <!-- newsletter -->
    {{-- <section class="newsletter-area">
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
            </section> --}}
@endsection
