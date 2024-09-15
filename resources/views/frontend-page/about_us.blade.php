@extends('frontend.main')

@section('title', 'ABOUT US')

@section('content')
    <div class="container py-5">

        {{-- History --}}
        <div class="row">
            <!-- First Column -->
            <div class="col-md-6">
                <h1 class="badge bg-secondary text-light p-3 d-inline-block mb-4">WHO WE ARE</h1>
                <h3 class="font-weight-bold">WE ARE AL-MUDASSAR TRUST</h3>
                <p style="color: #29af8a;">
                    Al-Mudassar Trust was founded as a social welfare organization to cater to the ever-growing needs
                    of children with special needs living in ‘rural’ areas of Pakistan. It provides totally free education
                    and health services to children with special needs living in and around Tehsil Kharian, Pakistan.
                </p>

                <h3 class="font-weight-bold">OUR JOURNEY</h3>
                <p>
                    From humble beginnings in 1999, the first part of the dream was fulfilled when the doors were opened
                    for just 8 deaf children at Al-Mudassar but today the number has grown to more than 450 children with
                    various special needs. In 2009, the school shifted from the old rented building to the state of the art
                    building designed by French architect and funded entirely by family and close friends of Chairman and
                    founder of Al-Mudassae Trust “Syed Mudassar Shah”. Today, Al-Mudassar Trust is situated near village
                    Baharwal, Tehsil Kharian, with an area of several hectares. The campus occupies 93,000 square feet of
                    the covered area that includes classrooms equipped with computers, modern audio testing, Lego
                    laboratories
                    library, resource centre, mosque, playgrounds and hostels for boys and girls. The grounds reflect an
                    amazing
                    blend of beautiful creativity and modern design inspired by the French painter, Claude Monet.
                </p>
            </div>

            <!-- Second Column with Carousel -->
            <div class="col-md-6">
                <h1 class="badge bg-secondary text-light p-3 d-inline-block mb-4">HISTORY</h1>

                <!-- Carousel -->
                <div id="historyCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="py-5">
                                    <h3>1999</h3>
                                    <p>The start of this dream project when Al-Mudassar Trust opened the door to its first 8
                                        students
                                        at a rented building in GT Road -Kharian.</p>
                                </div>
                                <div>
                                    <h3>2000</h3>
                                    <p>Purchased 8 acres of land where the complex stands today.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="py-5">
                                    <h3>2004</h3>
                                    <p>Building works started for the complex.</p>
                                </div>
                                <div>
                                    <h3>2007</h3>
                                    <p>School shifted to new complex and doors opened for the School for Deaf.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="py-5">
                                    <h3>2015</h3>
                                    <p>Learning Disability Centre inaugurated and opened to children with learning.</p>
                                </div>
                                <div>
                                    <h3>2016</h3>
                                    <p>School for Blind opened to provide education through Braille.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="py-5">
                                    <h3>2017</h3>
                                    <p>Grand mosque construction completed and opened for prayer. This being one of the few
                                        mosques
                                        in Pakistan where the Khutbah and prayer are led in sign language.</p>
                                </div>
                                <div>
                                    <h3>2018</h3>
                                    <p>Physical Care Centre opened for children with extreme physical needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mission --}}
        <div class="row mt-5">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm position-relative p-3">
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-heart fa-3x" style="color:#29af8a; font-size: 36px;"></i>
                    </div>
                    <div class="mb-3">
                        <h3 class="card-title" style="font-family:'Montserrat'; font-weight: 700;">VISION</h3>
                    </div>
                    <div>
                        <p class="card-text" style="text-align: justify;">
                            We believe that every child with special needs has the potential to become an equal and
                            participating member of society.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm position-relative p-3">
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-star fa-3x" style="color:#29af8a; font-size: 36px;"></i>
                    </div>
                    <div class="mb-3">
                        <h3 class="card-title" style="font-family:'Montserrat'; font-weight: 700;">MISSION</h3>
                    </div>
                    <div>
                        <p class="card-text" style="text-align: justify;">
                            Our mission is to provide them with an environment where they will get the right training and
                            support to unlock their hidden potential.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm position-relative p-3">
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-thumbs-up fa-3x" style="color:#29af8a; font-size: 36px;"></i>
                    </div>
                    <div class="mb-3">
                        <h3 class="card-title" style="font-family:'Montserrat'; font-weight: 700;">OUR VALUES</h3>
                    </div>
                    <div>
                        <p class="card-text" style="text-align: justify;">
                            Transparency &amp; Accountability, Commitment to the Cause, Mutual respect and Excellence
                        </p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Objectives --}}
        <div class="row mt-5">
            <!-- First Column: Objectives Text -->
            <div class="col-md-6">
                <h3>OBJECTIVES</h3>
                <ul>
                    <li>To offer a safe and supportive environment within which these special children can develop their
                        full potential, leading to healthy and independent lives within society.</li>
                    <li>To maintain a positive school culture where children are motivated and challenged by high
                        expectations, and where success is constantly celebrated.</li>
                    <li>To be widely recognized as a specialist school of excellence.</li>
                    <li>To develop a curriculum that meets the special needs of its pupils with particular emphasis on
                        communication, social skills and skills for daily living.</li>
                    <li>To prepare pupils for the opportunities, experiences and responsibilities of adult life.</li>
                    <li>To meet each pupil’s unique needs by providing innovative and flexible services in collaboration
                        with partner agencies.</li>
                    <li>To provide in-house medical facilities as no such facilities exist for special children in the area.
                    </li>
                </ul>
            </div>
            <!-- Second Column: YouTube Video -->
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/FbOe-PJQBwE" title="YouTube video player"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        {{-- Chairman Message --}}
        <div class="row mt-5">
            <!-- Chairman Profile Card (3 columns) -->
            <div class="col-md-3 mt-5">
                <div class="card border-0" style="background-color: #29af8a;">
                    <img src="https://www.almudassar.org/wp-content/uploads/2015/07/DSC_0324-2-366x350.jpg"
                        class="card-img-top img-fluid" alt="Syed Mudassar Shah">
                    <div class="card-body text-center">
                        <h3 class="card-title">
                            <a href="https://www.almudassar.org/staff-page/syed-mudassar-shah/" title="Syed Mudassar Shah"
                                class="text-white">
                                Syed Mudassar Shah
                            </a>
                        </h3>
                        <p class="card-text text-white">Chairman</p>
                    </div>
                </div>
            </div>
            <!-- Chairman's Message (9 columns) -->
            <div class="col-md-9">
                <h3 class="font-weight-bold mb-4">Message of Chairman</h3>
                <p class="text-justify text-success">
                    “Having spent my childhood watching my blind siblings struggle with the smallest things in life and
                    the challenges that my parents faced in Pakistan. I pledged to myself and the Almighty, that should he
                    bestow me with sustenance, I would create something unique for the special children of Pakistan.
                    What you see today is a result of that pledge.”
                </p>
                <p class="text-justify text-success">
                    I have dedicated over 20 years of my life to this cause and have invested huge amounts of money to
                    realise this dream. The complex is a lifeline to over 450 children who without Al Mudassar would be
                    on the streets and treated as insignificant beings. The journey has been long and very exhausting both
                    physically and mentally, but when I see the students of Al Mudassar achieve 100% results year on year I
                    feel that my efforts have not been in vain.
                </p>
                <p class="text-justify text-success">
                    When I hear of children with learning disabilities being abused or shunned or children with physical
                    disabilities left on the bed all day, I feel that this is only the beginning and we have so much yet
                    to do. Changing the mindset of the people through education is my next step through Al-Mudassar
                    University for Special Education.
                </p>
                <p class="text-justify text-success">
                    As you can see that this is a giant of a project for one person and I now invite you all to become a
                    part of the Al Mudassar family by supporting us through your donations, time and prayers”.
                </p>
            </div>
        </div>

        {{-- Executive Director --}}
        <div class="row mt-5">
            <!-- Executive Director Profile Card (3 columns) -->
            <div class="col-md-3 mt-5">
                <div class="card border-0" style="background-color: #29af8a;">
                    <img width="366" height="350"
                        src="https://www.almudassar.org/wp-content/uploads/2024/07/WhatsApp-Image-2024-07-15-at-5.01.58-PM-e1721054312427-366x350.jpeg"
                        class="card-img-top img-fluid" alt="Qamar Bashir">
                    <div class="card-body text-center">
                        <h3 class="card-title">
                            <a href="https://www.almudassar.org/staff-page/qamar-bashir/" title="Qamar Bashir"
                                class="text-white">
                                Qamar Bashir
                            </a>
                        </h3>
                        <p class="card-text text-white">Executive Director</p>
                    </div>
                </div>
            </div>
            <!-- Executive Director's Bio (9 columns) -->
            <div class="col-md-9">
                <h3 class="font-weight-bold mb-4">Meet Our Executive Director</h3>
                <p class="text-justify text-success">
                    Qamar Bashir brings a wealth of experience and a passion for service to his role as Executive Director
                    of Al-Mudassar Trust. With a distinguished career spanning multiple high-impact roles, Mr. Bashir has
                    dedicated his expertise to enhancing the lives of those in need. He served as the Press Secretary to the
                    President, managing strategic communication and media relations at the highest level. As Managing
                    Director of Shalimar Recording and Broadcasting Corporation (SRBC) and CEO of ATV, he transformed a
                    struggling entity into a stable organization, improving its financial health and content quality. His
                    leadership extended to the FM Radio network, revitalizing its operations across major cities in
                    Pakistan.
                </p>
                <p class="text-justify text-success">
                    Mr. Bashir’s international experience includes serving as the Press Minister at the Embassy of Pakistan
                    in France, where he cultivated relationships with French media and promoted Pakistan’s narrative on the
                    global stage. Additionally, as Press Attaché at the High Commission of Pakistan in Malaysia, he
                    facilitated media engagement for visiting dignitaries and managed public diplomacy initiatives.
                </p>
                <p class="text-justify text-success">
                    With his wealth of experience, he is now assisting the Chairman of Al-Mudassar Trust to further improve
                    and expand the Trust’s state-of-the-art facilities, providing free, quality education and vocational
                    training to over 500 physically and mentally challenged, visually impaired, and hearing-impaired
                    children.
                </p>
                <p class="text-justify text-success">
                    His innovative ideas and extensive experience are a great source of strength to the Trust in pursuing
                    the establishment of a full-fledged university, a teaching hospital, and an institute for the blind, as
                    well as the creation of independent businesses staffed by graduates of the Trust.
                </p>
                <p class="text-justify text-success">
                    A tireless advocate for inclusivity and empowerment, Mr. Bashir’s commitment to optimizing our digital
                    presence and forming strategic partnerships has been instrumental in advancing our mission to offer
                    dignified and independent lives to our students.
                </p>
            </div>
        </div>

        {{-- Banner --}}
        <div class="row mt-5 p-5" style="background-color: #F1F5FA">
            <!-- Heading and Buttons (6 columns) -->
            <div class="col-md-5">
                <h3 class="font-weight-bold mb-4" style="font-family:'Montserrat';">GIVE A CHILD WITH SPECIAL NEEDS A
                    CHANCE IN LIFE</h3>
            </div>
            <!-- Buttons (3 columns each) -->
            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block text-white"
                    style="background-color: #29af8a; border-color: #29af8a; font-family: 'Montserrat'; font-weight: bold;">
                    DONATE NOW
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('become_a_volunteer') }}" class="btn btn-outline-success btn-block"
                    style="border-color: #29af8a; color: #435061; font-family: 'Montserrat'; font-weight: bold;">
                    BECOME A VOLUNTEER
                </a>
            </div>
        </div>


    </div>
@endsection
