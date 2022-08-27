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
                                <li class="breadcrumb-item active" aria-current="page">The Team</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Meet The Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <section class="pt-30 text-center">
        <div class="s-section-title mb-30">
            <h2>A Note from the CEO</h2>
            <h6>Antony Macharia</h6>
        </div>
    </section>
    {{-- CEO's Note --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="text-lg-right text-center">
                    <img src="{{ asset('assets/img/images/antonyNoBg.png') }}" class="ceo-img" loading="lazy"
                        alt="img">
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-center pt-20">
                <div class="int-services-content">
                    <p>I, Macharia, the Chief Executive Officer and a member of the Board of
                        Directors of Jambo Logistics, welcome you to our website to have a feel of the
                        solutions we provide in the logistics industry.</p>
                    <p>
                        Years ago, I envisioned of a company that would provide end to end logistics
                        solutions and accommodate individuals and business community at large.
                        Having observed the difficulties people were experiencing in shipping goods
                        from Europe to East Africa. The opportunities were only reserved for the big
                        companies that would endure the tedious process.
                    </p>
                    <p>
                        Jambo Logistics has made shipping a reality to many through door to door
                        pick-ups, reasonable timelines for shipping goods and guaranteed safety of
                        the customer goods. No cargo is too small or too big for us, we accommodate
                        all.
                        Jambo Logistics strives in excellence and our greatest asset is the men and
                        women who work tirelessly to see that we achieve our goals and objectives.
                        Thank you for stopping by and welcome again to our website.
                    </p>
                    {{-- <a href="#" class="btn red-btn">comparison</a> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- End Ceo's Note --}}

    {{-- Team Start --}}
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">OUR TEAM</h5>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="{{ asset('assets/img/images/antonyNoBg.png') }}"
                                                class="ceo-img" loading="lazy" alt="img">
                                        </p>
                                        <h4 class="card-title">Antony Macharia</h4>
                                        <p class="card-text">CEO</p>
                                        {{-- <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body mt-4 text-center">
                                        <h4 class="card-title">Antony Macharia</h4>
                                        <p class="card-text">Macharia holds a Bachelor’s degree holder in Logistics and
                                            Supply Chain Management from
                                            Jomo Kenyatta University of Agriculture and Technology (JKUAT). He is also a
                                            trained
                                            Logistics Manager from the Chattered Institute of Logistics &amp; Transport a
                                            global
                                            professional body associated with Logistics &amp; Transport and a member of
                                            Kenya Transport
                                            &amp; Logistics Network.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="{{ asset('assets/img/images/antonyNoBg.png') }}"
                                                class="ceo-img" loading="lazy" alt="img">
                                        </p>
                                        <h4 class="card-title">Annfrasia Gichuhi
                                            </h4>
                                        <p class="card-text">Managing Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body mt-4 text-center">
                                        <h4 class="card-title">Antony Macharia</h4>
                                        <p class="card-text">She holds a Bachelor’s degree in Marketing Management and Higher Diploma in Business
                                            Administration from Technical University of Kenya (TUK).
                                            She has a wealth of over 10 years’ experience, having worked in the various companies in
                                            the managerial positions. She is the Company’s Managing Director and a member of the
                                            <Board class=""></Board>
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>
                                            <img class="img-fluid" src="{{ asset('assets/img/images/antonyNoBg.png') }}"
                                                class="ceo-img" loading="lazy" alt="img">
                                        </p>
                                        <h4 class="card-title">Catherine Muturi</h4>
                                        <p class="card-text">Warehouse Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body mt-4 text-center">
                                        <h4 class="card-title">Antony Macharia</h4>
                                        <p class="card-text">
                                            She holds a Bachelor's degree in Customer Relationship Management and Higher Diploma in Marketing Management from Chuka University.
                                            She has over 10 years' experience, having worked in the various companies in managerial positions. She is the Company's Warehouse manager.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.fiverr.com/share/qb8D02">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->

            </div>
        </div>
    </section>
    <!-- Team -->
    {{-- Team End --}}
@endsection
