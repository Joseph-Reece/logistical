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
                                <li class="breadcrumb-item active" aria-current="page">Why We Exist</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Why We Exist</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <div class="col-lg-4 fadeInDown mt-4 delay-1s">
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
            <div class="s-section-title text-center mb-30">
                <h2>Core Values</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($core_values as $corevalue)
                <div class="card col-md-3 value-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('assets/img/icon/'.$corevalue['icon'])}}" class="value-image" alt="">
                        </div>
                        <h6 class="text-center mb-3">{{$corevalue['title']}}</h6>
                        <p class="text-center">
                            {{$corevalue['description']}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Core Values end --}}
@endsection
