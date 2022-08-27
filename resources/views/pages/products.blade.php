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
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Products section end --}}
@endsection
