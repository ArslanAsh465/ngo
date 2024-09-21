<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <!-- Site Branding Start -->
        <div class="navbar-nav theme-brand flex-row text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('app-assets/admin/logos/logo.png') }}" class="navbar-logo" alt="logo" style="width: 50px">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="{{ route('dashboard') }}" class="nav-link"> Trust App </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                        <polyline points="11 17 6 12 11 7"></polyline>
                        <polyline points="18 17 13 12 18 7"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Site Branding End -->

        <!-- User Profile Start -->
        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="{{ asset('app-assets/admin/src/assets/img/profile-30.png') }}" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">{{ auth()->user()->name }}</h6>
                    <p class="">Email: {{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
        <!-- User Profile End -->

        <ul class="list-unstyled menu-categories" id="accordionExample">
            <!-- Dashboard -->
            <li class="menu active">
                <a href="{{ url('/dashboard') }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <!-- Menu Heading -->
            <li class="menu menu-heading">
                <div class="heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>MENU</span>
                </div>
            </li>

            <!-- Bank -->
            <li class="menu">
                <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!-- New Icon for Banks -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span>Banks</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('banks.index') }}"> All </a>
                    </li>
                    <li>
                        <a href="{{ route('banks.create') }}"> Create </a>
                    </li>
                </ul>
            </li>


            <!-- Location -->
            <li class="menu">
                <a href="#category" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <!-- New Icon for Locations -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                            <path d="M21 10c0 4.418-9 13-9 13s-9-8.582-9-13a9 9 0 1 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Locations</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="category" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('locations.index') }}"> All </a>
                    </li>
                    <li>
                        <a href="{{ route('locations.create') }}"> Create </a>
                    </li>
                </ul>
            </li>

            <!-- Location -->
            <li class="menu">
                <a href="#news" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span>&#9888; News </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="news" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{ route('admin.news.index') }}"> All </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.create') }}"> Create </a>
                    </li>
                </ul>
            </li>


            <!-- Settings -->
            <li class="menu">
                <a href="{{ route('admin.frontend_settings') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                            <path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7z"></path>
                            <path d="M19.4 15.5a7.5 7.5 0 0 0 0-7l1.8-2.5-2.1-2.1-2.5 1.8a7.5 7.5 0 0 0-7-7.4L9.5 1.2 7.4 3.3l1.8 2.5a7.5 7.5 0 0 0-7 7.4L1.1 15.5l2.1 2.1 2.5-1.8a7.5 7.5 0 0 0 7 7.4l2.5 1.8 2.1-2.1z"></path>
                        </svg>
                        <span>Settings</span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>
