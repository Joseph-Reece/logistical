@extends('components.layouts.app')

@section('main')
<!-- breadcrumb-area -->
@include('components.carousel');
<!-- breadcrumb-area-end -->


    {{-- Mission and Vision section --}}
    <div class="services-wrapper">
        <div class="row align-items-center">
            <div class="col-lg-4 animated slideInLeft delay-1s">
                <div class="s-section-title mb-30">
                    <h2>Our Mission</h2>
                    {{-- <h6>About our company</h6> --}}
                </div>
                <div class="animated fadeInRight delay-2s">
                    <p>We strive to offer innovative end to end logistics solutions to our clients by consistently applying
                        Logistics best practices and offering tailor made solutions .</p>
                    {{-- <a href="#" class="btn red-btn">comparison</a> --}}
                </div>
            </div>
            <div class="col-lg-4 fadeInDown delay-1s mt-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/images/missionVission.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-4 animated slideInLeft delay-1s">
                <div class="s-section-title mb-30">
                    <h2>Our Vision</h2>
                    {{-- <h6>About our company</h6> --}}
                </div>
                <div class="animated fadeInRight delay-2s">
                    <p>To be the leading innovative Logistics company in Europe and across Africa by adopting a
                        client-centered approach and observing strict operational standards to ensure consistency in quality
                        service delivery guided by our robust understanding of the market. </p>
                    {{-- <a href="#" class="btn red-btn">comparison</a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Vision section --}}
    {{-- Core Values --}}
    <div class="services-wrapper">
        <div class="align-items-center d-flex justify-content-center">
            <div class="s-section-title mb-30 text-center">
                <h2>Core Values</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($core_values as $corevalue)
                <div class="card col-md-3 value-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/icon/' . $corevalue['icon']) }}" class="value-image"
                                alt="">
                        </div>
                        <h6 class="mb-3 text-center">{{ $corevalue['title'] }}</h6>
                        <p class="text-center">
                            {{ $corevalue['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Core Values end --}}



    {{-- Change up this section to have image backgrounds/ different layouts --}}
    <div class="services-details-area pt-120 pb-115">
        <div class="container">
            <div class="services-details-wrap">
                <div class="row">
                    <div class="s-section-title mb-30">
                        <h3>FOUNDING PRINCIPLES & COMMITMENT</h3>
                        <p>Jambo Logistics is dedicated to the provision of high-quality service through continuous
                            improvement of business processes.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Our Strength at Jambo Logistics;</p>
                        <ul>
                            @foreach ($principles as $principle)
                                <li class="animated slideInLeft delay-3s pb-2"> <img
                                        src="{{ asset('assets/img/icon/checked.png') }}" alt="" height="20px">
                                    {{ $principle }}
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <p>We have a proven track record and have created a brand to pride in, we have a large clientele base
                        and our business portfolio is increasing by the day. We have never been more optimistic and
                        cognizant of industry challenges, but our resolve is insurmountable.</p>
                    <p>We shall meet every challenge with a practical, well researched and properly executed plan, and do so
                        every single time.</p>
                    <p>Finally, we understand that the future of our company lies in the opportunities that Clients and
                        Stakeholders shall avail to us. Engage us today and lets us give you a world class experience in
                        shipping your goods.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services-details-area pt-50 pb-115">
        <div class="container">
            <div class="services-details-wrap">
                <div class="row">
                    <div class="s-section-title mb-30">
                        <h3>PROSPECTS</h3>
                    </div>
                    <p class="custom-text pb-1">The Logistics industry is already buoyant, driven mainly by many Kenyans
                        relocating from the European countries and the locals shipping products from Europe.</p>
                    <p class="custom-text pb-1">Our business objectives are ambitious yet achievable. We anticipate more
                        imports locally and hence more businesses in the months ahead, we have expanded our warehouses and
                        offices and engaged more resources for a better service.</p>
                    <p class="custom-text pb-1">We are alive to the fact that opportunity happens to the prepared</p>
                </div>
            </div>
        </div>
    </div>
@endsection
