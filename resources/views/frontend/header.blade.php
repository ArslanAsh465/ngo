<header class="header-style-fullwidth">

    @include('frontend.topbar')

    <nav class="navbar navbar-expand-lg header-fullpage">
        <div class="container text-nowrap">
            <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                <a class="navbar-brand rounded-bottom light-bg" href="{{ route('home') }}">
                    <img src="{{ asset('app-assets/frontend/assets/images/logo.png') }}" alt="Logo">
                </a>
            </div>

            <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center">
                <a class="nav-link btn btn-default ms-3 donate-btn" href="{{ route('donate.index') }}">Donate Now</a>
                <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse">
                <div class="offcanvas-header">
                    <a href="{{ route('home') }}" class="logo-small">
                        <img src="{{ asset('app-assets/frontend/assets/images/logo.png') }}" alt="Logo">
                    </a>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" id="dropdownEducation" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EDUCATION SERVICES</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownEducation">
                                <li><a class="dropdown-item" href="{{ route('school_for_deaf') }}">SCHOOL FOR DEAF</a></li>
                                <li><a class="dropdown-item" href="{{ route('school_for_blind') }}">SCHOOL FOR BLIND</a></li>
                                <li><a class="dropdown-item" href="{{ route('learning_disability') }}">LEARNING DISABILITY</a></li>
                                <li><a class="dropdown-item" href="{{ route('vocational_training') }}">VOCATIONAL TRAINING</a></li>
                                <li><a class="dropdown-item" href="{{ route('rehabilitation') }}">REHABILITATION</a></li>
                                <li><a class="dropdown-item" href="{{ route('barnala_branch') }}">BARNALA BRANCH</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" id="dropdownGetInspired" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GET INSPIRED</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownGetInspired">
                                <li><a class="dropdown-item" href="{{ route('future_projects') }}">FUTURE PROJECTS</a></li>
                                <li><a class="dropdown-item" href="{{ route('success_stories') }}">SUCCESS STORIES</a></li>
                                <li><a class="dropdown-item" href="{{ route('become_a_volunteer') }}">BECOME A VOLUNTEER</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gallery') }}">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact_us.index') }}">CONTACT US</a>
                        </li>
                        <li class="nav-item donate_now">
                            <a class="nav-link" href="{{ route('donate.index') }}">DONATE NOW</a>
                        </li>
                    </ul>
                </div>

                <div class="close-nav"></div>
            </div>
        </div>
    </nav>
</header>
