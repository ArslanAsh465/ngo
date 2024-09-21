@extends('frontend.main')

@section('title', 'Rehabilitation')

@section('content')
    <div class="container py-5">

        <!-- New Image Section -->
        <div class="row mb-4">
            <!-- First Column (8/12 width) -->
            <div class="col-md-8">
                <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.14-PM-770x400.jpeg"
                    class="img-fluid rounded mb-4" alt="Barnala Branch" style="max-width: 100%; height: auto;">
                <div class="row p-3">
                    <div class="col-md-8">
                        <h2 class="font-weight-bold mb-3">AL-MUDASSAR REHABILITATION CENTRE</h2>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-lg" role="button">
                            DONATE NOW
                        </a>
                    </div>
                </div>
                <p>We believe children with any disability can be a part of society and achieve milestone if given proper
                    attention and opportunities. Our Rehabilitation Centre was opened in 2018 to cater to the needs of
                    physically disabled children and rehabilitate them. With our in-house medical specialists, the children
                    are cared for in an exemplary way. They may not be able to become independent but at least they are
                    being cared for and given the chance of schooling. The activities are very much sensitive to the
                    individual’s competence and ability.</p>
                <div class="row mb-4">
                    <!-- Image Column -->
                    <div class="col-md-6 text-center mb-4 mb-md-0">
                        <img src="https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.15-PM-e1611914764550-300x261.jpeg"
                            class="img-fluid rounded border border-light" alt="Our Services Image"
                            style="max-width: 100%; height: auto;">
                    </div>

                    <!-- Text Column -->
                    <div class="col-md-6">
                        <h4 class="font-weight-bold mb-4">OUR SERVICES</h4>
                        <ul>
                            <li>100% free education to all students</li>
                            <li>Pick and drop transportation</li>
                            <li>Early Identification & Intervention</li>
                            <li>Special Education</li>
                            <li>Speech & Physiotherapy</li>
                            <li>Psychological Intervention</li>
                            <li>Co-curricular Activities</li>
                            <li>Parents Counselling and Guidance</li>
                        </ul>
                    </div>
                </div>

                <div class="row bg-success mb-4">
                    <div class="col-md-8">
                        <div class="p-3 text-white rounded">
                            <h3 class="font-weight-normal">Al-Mudassar Trust provides free education and boarding facilities
                                for children with special needs. Please support this noble cause with your Zakah and Sadaqah
                                donations.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="#" class="btn btn-dark btn-lg w-100" rel="noopener">Donate Now</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/x8O_O-dknpQ?feature=oembed&amp;hd=1&amp;rel=0&amp;showinfo=0&amp;theme=light&amp;modestbranding=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Second Column (4/12 width) -->
            <div class="col-md-4">
                <div class="row mb-4">
                    <h3>Al-Mudassar Trust Facebook Page</h3>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Falmudassartrust.official%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=661860910506608"
                        width="340" height="500" style="border: none; overflow: hidden;" frameborder="0" scrolling="no"
                        allowfullscreen="true"></iframe>
                </div>

                <!-- First Video Widget -->
                <div class="row mb-4">
                    <h3>Al-Mudassar Trust for Special Kids</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/PQ1QwKDHdKY?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.almudassar.org&amp;widgetid=2"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Second Video Widget -->
                <div class="row mb-4">
                    <h3>Physical Activities at Al-Mudassar Trust</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://www.youtube.com/embed/LNru_HfU2hU?controls=0&amp;rel=0&amp;disablekb=1&amp;showinfo=0&amp;modestbranding=0&amp;html5=1&amp;iv_load_policy=3&amp;autoplay=0&amp;end=0&amp;loop=0&amp;playsinline=0&amp;start=0&amp;nocookie=false&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.almudassar.org&amp;widgetid=1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
