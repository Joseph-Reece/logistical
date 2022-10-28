@extends('components.layouts.app')

@section('main')
    <!-- breadcrumb-area -->
    @include('components.carousel');
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
    {{-- Products section end --}}
@endsection
