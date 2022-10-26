@extends('components.layouts.app')

@section('main')
    <!-- breadcrumb-area -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner" style="max-height: 400px; text-align:center">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/images/fancysofa.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/images/fancysofa.png') }}" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/images/fancysofa.png') }}" alt="">
              </div>
            </div> <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
    <!--<div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div> --}}

        </div>-->
    </div>
    <!-- breadcrumb-area-end -->

    {{-- Products section start --}}
    <section class="pt-30 text-center">
        <h2>We offer a wide range of services to our clients</h2>
    </section>

    <div class="container pb-40">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets/img/images/' .$product["image_path"]) }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$product['name']}}
                        </h5>
                        <p>
                            {{$product['description']}}
                        </p>
                        <a href="{{$product['name']}}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Products section end --}}
@endsection
