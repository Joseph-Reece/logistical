@extends('components.layouts.app')

@section('main')
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>support</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    @if(Session::has('success'))
    <div class="d-flex justify-content-center py-1">
        <div class=" col-md-4 alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    </div>
@endif
    <!-- support-area -->
    <div class="support-area support-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title mb-60 text-center">
                        <h2>Get In Touch</h2>
                        <p>Express delivery is an innovative service is effective logistics solution for the delivery of
                            small
                            cargo. This service is useful for companies various.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="support-form text-center">
                        <form action="{{route('sendMessage')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" placeholder="First Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" placeholder="Last Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your E-mail *">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone_number" placeholder="Phone number">
                                </div>
                            </div>
                            <textarea name="message" name="message" id="message" placeholder="Message"></textarea>
                            <button type="submit" class="btn red-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support-area-end -->

    <!-- contact-area -->
    <section class="contact-area primary-bg pt-70 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon01.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Find Location</h5>
                            <span>Jambo Logistics</span>

                            <span>Ripshorster str 366 A, 45357 Essen</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon01.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Find Location</h5>
                            <span>Jambo Logistics</span>
                            <span>Githurai, Mwihoko</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon02.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Phone Number</h5>
                            <a href="tel:+491 5224 127 081 ">
                                <span>+491 5224 127 081</span>
                            </a>
                            <a href="tel:+254 799 984 971 ">

                                <span>+254 799 984 971</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('assets/img/icon/contact_box_icon03.png') }}" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Email</h5>
                            <a href="mailto:info@jambologistics.co.ke"><span>info@jambologistics.co.ke </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

@endsection
