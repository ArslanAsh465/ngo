<header class="header-style-fullwidth">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Collapsible Navbar -->
            <div class="d-flex w-100 justify-content-between">
                <!-- Left Section (Logo) -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('arslan-assets/image/logo.png') }}" alt="Logo" style="width: 50px">
                </a>

                <!-- Right Section (Menu and Donate Button) -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Button for Mobile View -->
                    <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse mx-3" id="navbarCollapse">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('home') }}"><strong>HOME</strong></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownEducation" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>EDUCATION SERVICES</strong></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownEducation">
                                    <li><a class="dropdown-item text-dark" href="{{ route('school_for_deaf') }}"><strong>SCHOOL FOR DEAF</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('school_for_blind') }}"><strong>SCHOOL FOR BLIND</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('learning_disability') }}"><strong>LEARNING DISABILITY</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('vocational_training') }}"><strong>VOCATIONAL TRAINING</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('rehabilitation') }}"><strong>REHABILITATION</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('barnala_branch') }}"><strong>BARNALA BRANCH</strong></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownGetInspired" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>GET INSPIRED</strong></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownGetInspired">
                                    <li><a class="dropdown-item text-dark" href="{{ route('future_projects') }}"><strong>FUTURE PROJECTS</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('success_stories') }}"><strong>SUCCESS STORIES</strong></a></li>
                                    <li><a class="dropdown-item text-dark" href="{{ route('become_a_volunteer') }}"><strong>BECOME A VOLUNTEER</strong></a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('gallery') }}"><strong>GALLERY</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('about_us') }}"><strong>ABOUT US</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('contact_us') }}"><strong>CONTACT US</strong></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Donate Button -->
                    <a class="btn btn-primary ms-3 d-none d-lg-inline-block" href="{{ route('donate') }}">Donate</a>
                </div>
            </div>
        </div>
    </nav>
</header>
