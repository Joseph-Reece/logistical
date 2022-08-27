<header>
    <div id="header-sticky" class="main-header">
        <div class="container-fluid header-container-p">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="logo d-none d-lg-flex">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo2.png') }}"
                                style="max-height: 100px; max-width: 100px;" class="mobile-logo" alt="Logo"></a>
                    </div>
                    <div class="logo d-flex d-lg-none">
                        <a href="{{ route('home') }}">
                            <span>
                                Jambo
                            </span>
                            Logistics
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 d-none d-md-block">
                    <div class="menu-area">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                            href="{{ route('home') }}">Home</a></li>
                                    <li class="{{ request()->is('about') ? 'active' : '' }}"><a
                                            href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="{{ request()->is('why-we-exist') ? 'active' : '' }}"><a
                                            href="{{ route('why_we_exist') }}"> Why we Exist</a>
                                    </li>
                                    {{-- <li><a href="#">Who we serve</a></li> --}}
                                    <li class="{{ request()->is('the-team') ? 'active' : '' }}"><a
                                            href="{{ route('the-team') }}"> The Team</a>
                                    </li>
                                    <li class="{{ request()->is('products') ? 'active' : '' }}"><a
                                            href="{{ route('products') }}"> products</a>
                                    </li>
                                    <li class="{{ request()->is('contact-us') ? 'active' : '' }}"><a
                                            href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                    {{-- <a href="#quote" class="btn btn-small mr-3 quote-btn">quote</a> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
