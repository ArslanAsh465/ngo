<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Site Title -->
        <title>Home - AL-MUDASSAR TRUST</title>
        <!-- Site Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/frontend/assets/images/favicon.png') }}">
        <!-- CSS Libraries and Stylesheets -->
        <link href="{{ asset('app-assets/frontend/assets/library/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/library/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/library/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/library/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/library/select2/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/library/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('app-assets/frontend/assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('app-assets/frontend/assets/css/home-main.css') }}">
        <!-- Font Awesome (for icons) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
        <style type="text/css">
            .card-hover:hover {
                  transform: scale(1.05); /* Slightly increase size on hover */
                }
        </style>
    </head>
    <body>
        <div id="pageloader">
            <div class="loader-item">
                <div class="loader">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        @include('frontend.header')
         @include('frontend.slider')
        <main id="body-content" class="body-non-overflow">
            @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

            <section class="bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12 order-lg-last">
                            <div class="home-second-donation-form">
                                <div class="funds-committed">
                                    <div class="gift-icon">
                                        <i class="charity-gift_box"></i>
                                    </div>
                                    <small>Total Donations</small>
                                    <span class="counter">10,000</span>
                                </div>
                                <form class="form-style" method="post" action="{{ route('donate.store') }}">
                                    @csrf
                                    <h3 class="h3-sm fw-7 txt-white mb-3">Easy Donation</h3>

                                    <div class="form-group">
                                        <label for="first-name"><strong>First Name</strong></label>
                                        <input type="text" required class="form-control form-light" id="first-name" name="first_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="last-name"><strong>Last Name</strong></label>
                                        <input type="text" required class="form-control form-light" id="last-name" name="last_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><strong>Email Address</strong></label>
                                        <input type="email" required class="form-control form-light" id="email" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone"><strong>Phone</strong></label>
                                        <input type="text" required class="form-control form-light" id="phone" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <div><label for="amount"><strong>Amount</strong></label></div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="100" name="amount" id="amount1" onclick="selectAmount(100)">
                                            <label class="form-check-label label-dark" for="amount1">$100</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="250" name="amount" id="amount2" onclick="selectAmount(250)">
                                            <label class="form-check-label label-dark" for="amount2">$250</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="500" name="amount" id="amount3" onclick="selectAmount(500)">
                                            <label class="form-check-label label-dark" for="amount3">$500</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="1000" name="amount" id="amount4" onclick="selectAmount(1000)">
                                            <label class="form-check-label label-dark" for="amount4">$1000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="2000" name="amount" id="amount5" onclick="selectAmount(2000)">
                                            <label class="form-check-label label-dark" for="amount5">$2000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" value="custom_amount" name="amount" id="amount6" onclick="selectAmount('custom_amount')">
                                            <label class="form-check-label label-dark" for="amount6">Custom Amount</label>
                                        </div>
                                        <div class="form-group" id="custom-amount-container" style="display: none;">
                                            <input type="text" class="form-control form-light" id="custom" placeholder="Enter Custom Amount">
                                        </div>
                                    </div>

                                    <div class="form-check form-check-inline col-12">
                                        <input class="form-check-input form-light" type="checkbox" name="anonymous" id="anonymous" value="1">
                                        <label class="form-check-label label-dark" for="anonymous">Make this an anonymous donation.</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="comment"><strong>Comments</strong></label>
                                        <textarea class="form-control form-light" id="comment" name="comment"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default mt-3 btn-block">Donate Now</button>
                                </form>

                                <script>
                                    function selectAmount(amount) {
                                        const customInput = document.getElementById('custom-amount-container');
                                        const customInputField = document.getElementById('custom');

                                        if (amount === 'custom_amount') {
                                            customInput.style.display = 'block';
                                            customInputField.value = '';
                                        } else {
                                            customInput.style.display = 'none';
                                            document.getElementById('custom').value = '';
                                        }
                                    }

                                    document.getElementById('custom').addEventListener('input', function() {
                                        const value = parseFloat(this.value);
                                        if (!isNaN(value) && value > 0) {
                                            document.querySelector('input[name="amount"][value="custom_amount"]').checked = true;
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                        <div class="col-lg-7 col-md-12">
                            <div>
                                <h1 class="heading-main">
                                <small>Welcome To Almudassar Org</small>
                                Small Actions Lead To Big changes
                                </h1>
                                <p>Every contribution, no matter how small, makes a big difference for our 500 differently-abled children. Donate what you can to help provide education, training, and essential care. See below for the minimal costs needed to support their growth and well-being.</p>
                                <div class="row my-5 home-second-welcome">
                                    <div class="col-sm-6 mb-md-0">
                                        <div class="icon-box-1">
                                            <i class="charity-volunteer_people"></i>
                                            <div class="text">
                                                <h3>3,750 <br> <span>Donators</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="icon-box-1">
                                            <i class="charity-donate_money"></i>
                                            <div class="text">
                                                <h3>14,800 <br> <span>Trusted Funds</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('donate.index')}}" class="btn btn-outline-default">Donate Now</a>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                    </div>
                </div>
            </section>
            <section class="wide-tb-100 pb-5 bg-green">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <h1 class="heading-main">
                            <small>What we do at Almudassar Org</small>
                            Fueling Dreams with Educational Support
                            </h1>
                            <p>At the heart of our mission is the belief that every child deserves access to quality education. Through your generous donations, we provide essential resources, scholarships, and support to underprivileged students, empowering them to chase their dreams. Together, we can break down barriers and create brighter futures through the power of education.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="wide-tb-100 pt-0 welcome-broke-grid green pb-5">
                <div class="container">
                    <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 card-hover" >
                            <div class="icon-box-with-img" style="height: 535px !important;">
                                <div class="img">
                                    <a href="{{route('school_for_deaf')}}"><img src="https://www.almudassar.org/wp-content/uploads/2023/08/WhatsApp-Image-2023-08-12-at-8.16.41-PM-1-500x500.jpeg" alt></a>
                                </div>
                                <div class="text">
                                    <h3 style="color:var(--primary-color)">Empower Through Education</h3>
                                    <p>Providing quality education and opportunities for blind and deaf students to thrive and reach their full potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 card-hover">
                            <div class="icon-box-with-img" style="height: 535px !important;">
                                <div class="img">
                                    <a href="{{route('school_for_deaf')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.15-PM-1-500x500.jpeg" alt></a>
                                </div>
                                <div class="text">
                                    <h3 style="color:var(--primary-color)">Support Special Needs</h3>
                                    <p>Join us in providing essential resources and support to blind and deaf students, empowering them to overcome challenges and thrive."</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                        <div class="col-sm-6 col-md-6 col-lg-3 card-hover">
                            <div class="icon-box-with-img" style="height: 535px !important;">
                                <div class="img">
                                    <a href="{{route('school_for_deaf')}}"><img src="https://www.almudassar.org/wp-content/uploads/2021/01/DSC_3770-scaled-e1611851752712-500x500.jpg" alt></a>
                                </div>
                                <div class="text">
                                    <h3 style="color:var(--primary-color)">Bright Futures Ahead</h3>
                                    <p>Join us in creating brighter futures for blind and deaf students through accessible education and support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 card-hover">
                            <div class="icon-box-with-img" style="height: 535px !important;">
                                <div class="img">
                                    <a href="{{route('school_for_deaf')}}"><img src="https://www.almudassar.org/wp-content/uploads/2015/07/DSC_7835-scaled-500x500.jpg" alt></a>
                                </div>
                                <div class="text">
                                    <h3 style="color:var(--primary-color)">Inclusive Learning Journey</h3>
                                    <p>Providing tailored education and support to empower blind and deaf students on their path to success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="wide-tb-100 p-0">
                <div class="container">
                    <div class="row rounded mb-5">
            <!-- Column 1 START -->
            <div class="col-md-4">
                <div class="card border-0 text-white"
                    style="background-color: rgb(175 131 47); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(77 56 18)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(175 131 47)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-database fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title">GIVE DONATION</h5>
                                <p class="card-text">You can Donate online/ Donate by bank transfer/ Donate by Monthly/
                                    Donate via SMS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 2 -->
            <div class="col-md-4">
                <div class="card border-0 text-white"
                    style="background-color: rgb(175 131 47); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(77 56 18)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(175 131 47)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-face-laugh fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title">BECOME A VOLUNTEER</h5>
                                <p class="card-text">You can work directly with children and families, train our local
                                    staff, and fulfill both roles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 3 -->
            <div class="col-md-4">
                <div class="card border-0 text-white"
                    style="background-color: rgb(175 131 47); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(77 56 18)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(175 131 47)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-apple-whole fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title">BECOME A SPONSOR</h5>
                                <p class="card-text">You can sponsor a special child for one year that is <br>£360 per year/
                                    £30 per month</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 3 END -->
        </div>
                </div>
            </section>
            <section class="wide-tb-100">
                <div class="container">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-lg-12 col-md-12">
                            <h1 class="heading-main">
                            <small>HELP US TO HELP THEM</small>
                           <span style="font-size: 38px;">WE HELP THOUSANDS OF CHILDREN TO GET THEIR EDUCATION NOW WE NEED YOUR HELP TO CONTINUE THIS</span>
                            </h1>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="home-second-causes">
                        <div class="item">
                            <div class="causes-wrap" style="height:450px !important">
                                <div class="img-wrap">
                                    <a href="{{route('school_for_deaf')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_7587-366x220.jpg" alt></a>
                                </div>
                                <div class="content-wrap">
                                    <h3><a href="{{route('school_for_deaf')}}">AL-MUDASSAR SCHOOL FOR DEAF</a></h3>
                                    <p>Less than 5% of 1 million Deaf children in Pakistan have access to education.</p>
                                    <div class="btn-wrap">
                                        <a class="btn-default btn" href="{{route('donate.index')}}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="causes-wrap" style="height:450px !important">
                                <div class="img-wrap">
                                    <a href="{{route('school_for_blind')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_3775-scaled-e1611497359282-366x220.jpg" alt></a>
                                </div>
                                <div class="content-wrap">
                                    <h3><a href="{{route('school_for_blind')}}">AL-MUDASSAR SCHOOL FOR BLIND</a></h3>
                                    <p>Globally, it is estimated that approximately 1.3 billion people live with some form of vision</p>
                                    <div class="btn-wrap">
                                        <a class="btn-default btn" href="{{route('donate.index')}}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="causes-wrap" style="height:450px !important">
                                <div class="img-wrap">
                                    <a href="{{route('learning_disability')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/IMG_8754-366x220.jpg" alt></a>
                                </div>
                                <div class="content-wrap">
                                    <h3><a href="{{route('learning_disability')}}">AL-MUDASSAR LEARNING DISABILITY CENTRE</a></h3>
                                    <p>£360 per year/ £180 per 6 months/ £30 per month: Sponsor a special child for one year.</p>
                                    <div class="btn-wrap">
                                        <a class="btn-default btn" href="{{route('donate.index')}}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="causes-wrap" style="height:450px !important">
                                <div class="img-wrap">
                                    <a href="{{route('vocational_training')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/14590333_1167252010016094_1413835466111869689_n-366x220.jpg" alt></a>
                                </div>
                                <div class="content-wrap">
                                    <h3><a href="{{route('vocational_training')}}">AL-MUDASSAR VOCATIONAL TRAINING CENTRE</a></h3>
                                    <p>The Centre is seeking people to bring skills into its developing structure.</p>
                                    <div class="btn-wrap">
                                        <a class="btn-default btn" href="{{route('donate.index')}}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="causes-wrap" style="height:450px !important">
                                <div class="img-wrap">
                                    <a href="{{route('rehabilitation')}}"><img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.14-PM-366x220.jpeg" alt></a>
                                </div>
                                <div class="content-wrap">
                                    <h3><a href="{{route('rehabilitation')}}">AL-MUDASSAR REHABILITATION CENTRE</a></h3>
                                    <p>We believe children with any disability can be a part of society and achieve milestone</p>
                                    <div class="btn-wrap">
                                        <a class="btn-default btn" href="{{route('donate.index')}}">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </section>
            <section class="wide-tb-100 bg-scroll bg-img-1 pos-rel callout-style-1">
                <div class="bg-overlay black opacity-50"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h1 class="heading-main light-mode orange">
                            <small>Help Other People</small>
                            We Dream to Create A Bright Future Of The Underprivileged Children
                            </h1>
                            <a href="{{route('donate.index')}}" class="btn btn-default">Donate Now</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wide-tb-100 bg-white shadow">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12">
                            <div class="text-center">
                                <img src="https://www.almudassar.org/wp-content/uploads/2024/08/ec2f5a84.jpg?id=2648" alt>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <h1 class="heading-main">
                            <small>SPONSOR THIS PROJECT</small>
                            Empower Education, Support Our Mission
                            </h1>
                            <p>We empower thousands of children to receive a quality education. Now, we need your support to continue this vital mission.</p>

                            <div class="d-flex">
                                <a class="btn btn-default me-3" href="{{route('donate.index')}}">Donate Now</a>
                                <div class="about-phone">
                                    <i data-feather="phone-call"></i>
                                    Conatct Us <br> {{ $info_sections_f['phone'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wide-tb-100">
                <div class="container">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-lg-6 col-md-8">
                            <h1 class="heading-main">
                            <small>EVENTS AT AL-MUDASSAR</small>
                            RECENT EVENTS AT AL-MUDASSAR
                            </h1>
                        </div>
                    </div>

                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12">
                            <div class="container d-flex justify-content-center align-items-center">
                                <video controls class="mx-auto" style="width: 100%;">
                                    <source
                                        src="https://www.almudassar.org/wp-content/uploads/2024/08/Al-Mudassar-Trust-Report-BBC-Urdu-1.mp4?_=1"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="wide-tb-100">
                <div class="container">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-lg-6 col-md-8">
                            <h1 class="heading-main">
                            <small>OUR TESTIMONIALS</small>
                            WHAT OUR DONORS OVER THE WORLD ARE SAYING
                            </h1>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme" id="home-second-events">
                        <div class="item">
                            <div class="event-wrap-alternate">
                                <div class="img-wrap" style="height:350px">
                                    <div class="content-wrap" style="background-image: -webkit-linear-gradient(90deg, rgba(39, 48, 75, 0.85882) 3%, rgba(39, 48, 75, 0.85) 4%, rgb(115 117 121) 100%);">
                                        <h3><a href="#">Very impressive, very well established institute for Special need children, very nice staff. I should thank Mr Mudassar for giving hope and an institute in a place where one cannot even think of having something for special need kids. May Allah bless you.</a></h3>
                                        <div class="event-details">
                                            <div>Maimoona Abdul Ghaffar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="event-wrap-alternate">
                                <div class="img-wrap" style="height:350px">
                                    <div class="content-wrap" style="background-image: -webkit-linear-gradient(90deg, rgba(39, 48, 75, 0.85882) 3%, rgba(39, 48, 75, 0.85) 4%, rgb(115 117 121) 100%);">
                                        <h3><a href="#">I can’t live without appreciating the efforts of all staff of this institution. Special tribute to teachers of disable students. They are doing a wonderful job with passion and sincerity. Really very pleased to find such good and god fearing people. Thanks God Bless.</a></h3>
                                        <div class="event-details">
                                            <div>SKB Rasool</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="event-wrap-alternate">
                                <div class="img-wrap" style="height:350px">
                                    <div class="content-wrap" style="background-image: -webkit-linear-gradient(90deg, rgba(39, 48, 75, 0.85882) 3%, rgba(39, 48, 75, 0.85) 4%, rgb(115 117 121) 100%);">
                                        <h3><a href="#">Allah bless all people who they doing this great work. In the time of darkness, Almudassar is a ray of hope for special children. They are doing a great job in every field. These days you dont find honest and reliable people. Good to have you guys. Thanks.</a></h3>
                                        <div class="event-details">
                                            <div>Rani Sajjad</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wide-tb-100 bg-white shadow">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <h1 class="heading-main">
                            <small>DO GOOD</small>
                            BECOME A VOLUNTEER
                            </h1>
                            <p>We are looking in particular for experienced people who can work directly with children and families</p>

                            <div class="d-flex">
                                <a class="btn btn-default me-3" href="{{route('become_a_volunteer')}}">Join Us Now</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="text-center">
                                <img src="https://www.almudassar.org/wp-content/uploads/2020/12/42b37751-fe89-4ecc-b1ab-19582c59f5e8-e1606810094546.jpg?id=1685" alt>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="wide-tb-100 pb-0 home-blog-post-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6 col-9">
                            <h1 class="heading-main">
                            <small>AL-MUDASSAR NEWS</small>
                            LATEST NEWS AT AL-MUDASSAR TRUST
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" id="home-second-blog-post">
                                @foreach($news as $new)
                                <div class="item">
                                    <div class="post-wrap">
                                        <div class="post-img">
                                            <a href="blog-single.html"><img src="{{$new->image}}" alt></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{route('news_single',['slug'=>$new->slug])}}">{{$new->description}}</a></h4>
                                            <div class="text-md-end">
                                                <a href="{{route('news_single',['slug'=>$new->slug])}}" class="read-more-line"><span>Read More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        @include('frontend.footer')
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
    <a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('app-assets/frontend/assets/library/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jflickrfeed/jflickrfeed.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jquery-waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/countdown/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jquery-appear/jquery.appear.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jquery.counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/library/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/js/site-custom.js')}}"></script>
    <script src="{{ asset('app-assets/frontend/assets/js/home-slider.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8b925e04f94c4127","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"64224fc8786846928480d180dfc466bd","b":1}' crossorigin="anonymous"></script>
</body>
</html>
