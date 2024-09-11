<footer class="wide-tb-70 pb-0 mb-spacer-md footer-second mt-3">
    <div class="container bg-effect pos-rel">
        <div class="row">
            <!-- Footer Column 1 -->
            <div class="col-lg-4 col-md-12">
                <!-- Footer Logo and Description -->
                <div class="logo-footer">
                    <img src="{{ asset('app-assets/frontend/assets/images/logo_white.svg') }}" alt="Logo">
                </div>
                <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>

                <!-- Footer Contact Information -->
                <div class="footer-widget-contact">
                    <ul class="list-unstyled">
                        <li>
                            <div><i data-feather="map-pin"></i></div>
                            <div>{{ $info_sections_f['address'] }}</div>
                        </li>
                        <li>
                            <div><i data-feather="phone"></i></div>
                            <div><a href="tel:+1234567899">{{ $info_sections_f['phone'] }}</a></div>
                        </li>
                        <li>
                            <div><i data-feather="mail"></i></div>
                            <div>
                                <a href="https://mannatstudio.com/cdn-cgi/l/email-protection#0e676068614e66617e6b7c6f677d6b206d6163">
                                    <span class="_cf_email_" data-cfemail="deb7b0b8b19eb6b1aebbacbfb7adbbf0bdb1b3">{{ $info_sections_f['email'] }}</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Social Media Icons -->
                <div class="social-icons">
                    <ul class="list-unstyled list-group list-group-horizontal">
                        <li><a href="#"><i class="icofont-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont-instagram"></i></a></li>
                        <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Column 2 -->
            <div class="col-lg-7 offset-lg-1 col-md-12">
                <!-- Newsletter Subscription -->
                <div class="footer-subscribe">
                    <h3>Newsletter</h3>
                    <h2>Get Update Every Week</h2>
                    <div class="input-wrap">
                        <input type="text" name="name" placeholder="Enter Your Email">
                        <button type="submit" class="btn btn-secondary">Subscribe now</button>
                    </div>
                </div>

                <!-- Photostream -->
                <div class="row">
                    <div class="col-md-8">
                        <h3>Our Photostream</h3>
                        <ul id="basicuse" class="photo-thumbs"></ul>
                    </div>

                    <!-- Footer Menu -->
                    <div class="col-md-4">
                        <div class="footer-widget-menu">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="icofont-simple-right"></i> <span>About Us</span></a></li>
                                <li><a href="#"><i class="icofont-simple-right"></i> <span>Our History</span></a></li>
                                <li><a href="#"><i class="icofont-simple-right"></i> <span>Our Services</span></a></li>
                                <li><a href="#"><i class="icofont-simple-right"></i> <span>Meet Doctors</span></a></li>
                            </ul>
                        </div>
                        <!-- Call Us Section -->
                        <div class="give-us-call">
                            <i data-feather="phone"></i>
                            <h4>Give us a call</h4>
                            <h3><a href="tel:">{{ $info_sections_f['phone'] }}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright and Legal Links -->
    <div class="copyright-wrap">
        <div class="container pos-rel">
            <div class="row text-md-start text-center">
                <div class="col-sm-12 col-md-auto copyright-text">
                    Copyright © 2024 - <span class="txt-blue"><a href="{{ url('/') }}">Almudassar Trust</a></span> <span id="yearText"></span>. | Designed and Developed by <a href="https://www.kreashionsoftwarehouse.com/" rel="nofollow">Kreashion Software House</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Search Overlay -->
<div class="overlay overlay-hugeinc">
    <form class="form-inline mt-2 mt-md-0">
        <div class="form-inner">
            <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                <div class="col-auto">
                    <i class="icofont-search"></i>
                </div>
                <div class="col">
                    <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="col-auto">
                    <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Back to Top Button -->
<a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
