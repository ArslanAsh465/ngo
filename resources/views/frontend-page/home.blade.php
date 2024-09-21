@extends('frontend.main')

@section('title', 'Home')

@section('content')
    <div class="container py-5">

        <div class="row rounded mb-5">
            <!-- Column 1 START -->
            <div class="col-md-4">
                <div class="card border-0 text-white"
                    style="background-color: rgb(67, 80, 97); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(87, 99, 121)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(67, 80, 97)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-database fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-8">
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
                    style="background-color: rgb(67, 80, 97); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(87, 99, 121)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(67, 80, 97)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-face-laugh fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-8">
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
                    style="background-color: rgb(67, 80, 97); transition: background-color 0.3s ease, transform 0.3s ease;"
                    onmouseover="this.style.backgroundColor='rgb(87, 99, 121)'; this.style.transform='scale(1.05)';"
                    onmouseout="this.style.backgroundColor='rgb(67, 80, 97)'; this.style.transform='scale(1)';">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-apple-whole fa-3x"
                                    style="transition: color 0.3s ease, transform 0.3s ease;"
                                    onmouseover="this.style.color='#ffd700'; this.style.transform='scale(1.1)';"
                                    onmouseout="this.style.color='white'; this.style.transform='scale(1)';"></i>
                            </div>
                            <div class="col-md-8">
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

        <div class="row">
            <div class="col-12 text-center mb-4">
                <div style="font-family:'Montserrat'; font-weight:700; color:#ffffff; margin-bottom:15px;">
                    <div class="row mb-4">
                        <div class="col-12 text-center">
                            <div class="bg-secondary text-white p-2 rounded d-inline">
                                HELP US TO HELP THEM
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <!-- Heading 1 -->
                        <div class="col-12">
                            <h2 class="text-dark">WE HELP THOUSANDS OF CHILDREN TO GET THEIR EDUCATION</h2>
                        </div>
                        <!-- Heading 2 -->
                        <div class="col-12">
                            <h2 class="text-dark">NOW WE NEED YOUR HELP TO CONTINUE THIS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="height: 400px">
                    <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_7587-366x220.jpg"
                        class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">AL-MUDASSAR SCHOOL FOR DEAF</h5>
                        <p class="card-text">Less than 5% of 1 million Deaf children in Pakistan have access to education.
                        </p>
                        <a class="btn btn-default donate-button" href="{{ route('donate.index') }}">Donate</a>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="height: 400px">
                    <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_3775-scaled-e1611497359282-366x220.jpg"
                        class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">AL-MUDASSAR SCHOOL FOR BLIND</h5>
                        <p class="card-text">Globally, it is estimated that approximately 1.3 billion people live with some
                            form of vision.</p>
                        <a class="btn btn-default donate-button" href="{{ route('donate.index') }}">Donate</a>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="height: 400px">
                    <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/IMG_8754-366x220.jpg"
                        class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">AL-MUDASSAR LEARNING DISABILITY CENTRE</h5>
                        <p class="card-text">£360 per year/ £180 per 6 months/ £30 per month: Sponsor a special child for
                            one year.</p>
                        <a class="btn btn-default donate-button" href="{{ route('donate.index') }}">Donate</a>
                    </div>
                </div>
            </div>

            <!-- Column 4 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="height: 400px">
                    <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/14590333_1167252010016094_1413835466111869689_n-366x220.jpg"
                        class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">AL-MUDASSAR VOCATIONAL TRAINING CENTRE</h5>
                        <p class="card-text">The Centre is seeking people to bring skills into its developing structure.
                        </p>
                        <a class="btn btn-default donate-button" href="{{ route('donate.index') }}">Donate</a>
                    </div>
                </div>
            </div>

            <!-- Column 5 -->
            <div class="col-md-4 mb-4">
                <div class="card position-relative" style="height: 400px">
                    <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.14-PM-366x220.jpeg"
                        class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">AL-MUDASSAR REHABILITATION CENTRE</h5>
                        <p class="card-text">We believe children with any disability can be a part of society and achieve
                            milestones.</p>
                        <a class="btn btn-default donate-button" href="{{ route('donate.index') }}">Donate</a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .card-img-top {
                transition: filter 0.3s ease, opacity 0.3s ease;
            }

            .card {
                position: relative;
                overflow: hidden;
            }

            .card:hover .card-img-top {
                filter: blur(5px);
                /* Adjust blur level as needed */
                opacity: 0.6;
                /* Optional: adjust image transparency */
            }

            .card:hover .donate-button {
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                display: block;
                z-index: 2;
                /* Ensure button is above the image */
            }

            .donate-button {
                display: none;
            }
        </style>


        <div class="row mt-4 mb-4 bg-light shadow-lg rounded p-5"
            style="background-image: url('{{ asset('app-assets/frontend/assets/images/bg1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Column 1 -->
            <div class="col-md-2">
                <!-- Empty column for spacing or future content -->
            </div>

            <!-- Column 2 -->
            <div class="col-md-8 text-center">
                <div class="mb-4">
                    <!-- Heading -->
                    <div class="bg-secondary text-white p-2 rounded d-inline">SPONSOR THIS PROJECT</div>
                    <h2 class="font-weight-bold text-warning my-4"><strong> Empower Education,<br> Support Our
                            Mission</strong></h2>
                    <!-- Text -->
                    <p class="text-white bg-secondary p-3 rounded">
                        We empower thousands of children to receive a quality education. Now, we need your support to
                        continue this vital mission.
                    </p>
                    <!-- Button -->
                    <a href="{{ route('donate.index') }}" class="btn btn-default btn-lg">
                        DONATE NOW
                    </a>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-2">
                <!-- Empty column for spacing or future content -->
            </div>
        </div>

        <div class="row mt-5 mb-4 p-3 bg-light shadow-lg rounded">
            <!-- Column 1 -->
            <div class="col-md-2">
                <!-- Empty column for spacing or future content -->
            </div>

            <!-- Column 2 -->
            <div class="col-md-8 text-center">
                <div class="mt-3">
                    <div class="bg-secondary p-2 rounded d-inline text-white">EVENTS AT AL-MUDASSAR</div>
                    <h2 class="font-weight-bold my-4"><strong> RECENT EVENTS AT AL-MUDASSAR </strong></h2>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-2">
                <!-- Empty column for spacing or future content -->
            </div>
        </div>

        <div class="row p-3" style="background-color: #0d3e69">
            <div class="container d-flex justify-content-center align-items-center">
                <video controls class="mx-auto" style="width: 60%;">
                    <source
                        src="https://www.almudassar.org/wp-content/uploads/2024/08/Al-Mudassar-Trust-Report-BBC-Urdu-1.mp4?_=1"
                        type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="row m-4 justify-content-center text-center">
                <div>
                    <div class="bg-secondary p-2 rounded d-inline text-white">OUR TESTIMONIALS</div>
                    <h2 class="font-weight-bold text-white my-4">WHAT OUR DONORS OVER THE WORLD ARE SAYING</h2>
                </div>
            </div>

            <div class="row">
                <!-- Testimonial 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card testimonial_card">
                        <div class="card-body">
                            <p class="card-text p-3">"Very impressive, very well established institute for Special need
                                children, very nice staff. I should thank Mr Mudassar for giving hope and an institute in a
                                place where one cannot even think of having something for special need kids. May Allah bless
                                you."</p>
                        </div>
                        <h2 class="mt-2 text-center">Maimoona Abdul Ghaffar</h2>
                    </div>

                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card testimonial_card">
                        <div class="card-body">
                            <p class="card-text p-3">"I can’t live without appreciating the efforts of all staff of this
                                institution. Special tribute to teachers of disable students. They are doing a wonderful job
                                with passion and sincerity. Really very pleased to find such good and god fearing people.
                                Thanks God Bless."</p>
                        </div>
                        <h2 class="mt-2 text-center">SKB Rasool</h2>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card testimonial_card">
                        <div class="card-body">
                            <p class="card-text p-3">"Allah bless all people who they doing this great work. In the time of
                                darkness, Almudassar is a ray of hope for special children. They are doing a great job in
                                every field. These days you dont find honest and reliable people. Good to have you guys.
                                Thanks."</p>
                        </div>
                        <h2 class="mt-2 text-center">Rani Sajjad</h2>
                    </div>
                </div>

                <style>
                    .testimonial_card:hover {
                        background-color: #D3D3D3;
                    }
                </style>

            </div>
        </div>

        <div class="row justify-content-center p-5 my-5"
            style="background-image: url('{{ asset('app-assets/frontend/assets/images/bg2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Main Column -->
            <div class="col-md-8">
                <!-- Card -->
                <div class="card bg-light text-center p-2">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Heading -->
                        <div class="row">
                            <div class="bg-secondary text-white text-center rounded mb-4 col-md-4 offset-4">DO GOOD</div>
                        </div>
                        <h2 class="font-weight-bold text-dark mb-4"><strong> BECOME A VOLUNTEER </strong></h2>
                        <!-- Description -->
                        <p class="text-dark px-3" style="font-size: 18px;">
                            We are looking in particular for experienced people who can work directly with children and
                            families.
                        </p>
                        <!-- Button -->
                        <a href="{{ route('become_a_volunteer') }}" class="btn btn-default btn-lg">
                            JOIN US NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="text-center py-3">
                    <div class="bg-secondary text-white p-2 rounded d-inline m-3">
                        HELP US TO HELP THEM
                    </div>
                    <h2 class="text-dark m-3 py-3">LATEST NEWS AT AL-MUDASSAR TRUST</h2>
                </div>

                <div id="carouselExampleControls" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active carousle_1">
                            <div class="card">
                                <img src="{{ asset('app-assets/frontend/assets/images/card1.jpg') }}" class="card-img-top"
                                    alt="Image 1">
                                <div class="card-body">
                                    <a href="https://www.almudassar.org/2021/01/30/school-reopens-to-all-students/#more-2140" class="btn btn-default">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousle_2">
                            <div class="card">
                                <img src="{{ asset('app-assets/frontend/assets/images/card2.jpg') }}" class="card-img-top"
                                    alt="Image 2">
                                <div class="card-body">
                                    <p class="card-text">School reopens to all students on 1st February after a long break.
                                    </p>
                                    <a href="https://www.almudassar.org/2021/01/28/run-it-forward-official-charity/#more-229" class="btn btn-default">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousle_3">
                            <div class="card">
                                <img src="{{ asset('app-assets/frontend/assets/images/card3.jpg') }}"
                                    class="card-img-top" alt="Image 3">
                                <div class="card-body">
                                    <p class="card-text">Once again the students of Al-Mudassar have achieved outstanding
                                        results in their board exams. 100% pass mark across the classes.</p>
                                    <a href="https://www.almudassar.org/2021/01/31/muslimgiving-raising-donations-for-al-mudassar-trust/#more-2142" class="btn btn-default">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="carousel-indicators">
                    <button type="button" class="indicator btn btn-sm" data-target="carousle_1" aria-label="Slide 1"><i
                            class="fas fa-circle"></i></button>
                    <button type="button" class="indicator btn btn-sm px-0" data-target="carousle_2"
                        aria-label="Slide 2"><i class="fas fa-circle"></i></button>
                    <button type="button" class="indicator btn btn-sm" data-target="carousle_3" aria-label="Slide 3"><i
                            class="fas fa-circle"></i></button>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const carouselElement = document.querySelector('#carouselExampleControls');
                        const carousel = new bootstrap.Carousel(carouselElement, {
                            interval: false // Disable auto-sliding
                        });

                        const indicators = document.querySelectorAll('.carousel-indicators .indicator');

                        indicators.forEach((indicator) => {
                            indicator.addEventListener('click', function() {
                                const targetClass = this.getAttribute('data-target');
                                const targetIndex = Array.from(document.querySelectorAll('.carousel-item'))
                                    .findIndex(item => item.classList.contains(targetClass));

                                if (targetIndex !== -1) {
                                    carousel.to(targetIndex);
                                }
                            });
                        });
                    });
                </script>

            </div>
            <div class="col-md-3"></div>
        </div>



    </div>
@endsection
