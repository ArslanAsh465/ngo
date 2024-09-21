<div class="top-bar-right d-flex align-items-center text-md-left p-0 m-0" style="background-color: #F79C00">
    <div class="container">
        <div class="row align-items-center">
            <div class="col d-flex align-items-center contact-info">
                <div>
                    <i data-feather="phone"></i>
                    <a class="text-white" href="tel:{{ $info_sections_f->phone }}">{{ $info_sections_f['phone'] }}</a>
                </div>
                <div>
                    <i data-feather="mail"></i>
                    <a href="mailto:{{ $info_sections_f->email }}" class="text-white">
                        <span class="text-white">{{ $info_sections_f->email }}</span>
                    </a>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="social-icons">
                    <a href="{{ $info_sections_f->facebook_link }}" class="text-white"><i class="icofont-facebook"></i></a>
                    <a href="{{ $info_sections_f->linkedin_link }}" class="text-white mx-3"><i class="icofont-linkedin"></i></a>
                    <a href="{{ $info_sections_f->youtube_link }}" class="text-white"><i class="icofont-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
