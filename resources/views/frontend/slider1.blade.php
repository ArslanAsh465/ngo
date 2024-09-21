@php
    $routeName = Route::currentRouteName();
@endphp

@switch($routeName)
    @case('about_us')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/2021/01/DSC_1083-scaled-e1610024831776.jpg';
            $heading = 'ABOUT US';
        @endphp
        @break

    @case('school_for_deaf')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/IMG_8826-scaled.jpg';
            $heading = 'AL-MUDASSAR SCHOOL FOR DEAF';
        @endphp
        @break

    @case('school_for_blind')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_3830-scaled-e1611497511420.jpg';
            $heading = 'AL-MUDASSAR SCHOOL FOR BLIND';
        @endphp
        @break

    @case('learning_disability')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/2021/01/DSC_3764-scaled-e1611851875807.jpg';
            $heading = 'AL-MUDASSAR LEARNING DISABILITY CENTRE';
        @endphp
        @break

    @case('vocational_training')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/DSC_7818-scaled.jpg';
            $heading = 'AL-MUDASSAR VOCATIONAL TRAINING CENTRE';
        @endphp
        @break

    @case('rehabilitation')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/931ba0c2-5290-440e-8964-e205a28f3ab5-e1611914487977.jpg';
            $heading = 'AL-MUDASSAR REHABILITATION CENTRE';
        @endphp
        @break

    @case('barnala_branch')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/WhatsApp-Image-2021-01-27-at-7.07.11-PM-1-e1611924086192.jpeg';
            $heading = 'AL-MUDASSAR BARNALA BRANCH';
        @endphp
        @break

        @case('about_us')
        @php
            $bgImage = 'https://example.com/path/to/about-us-image.jpg';
            $heading = 'ABOUT US';
        @endphp
        @break

    @case('contact_us.index')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/2021/01/DSC5961-scaled-e1611239936447.jpg';
            $heading = 'CONTACT US';
        @endphp
        @break

    @case('gallery')
        @php
            $bgImage = NULL;
            $heading = NULL;
        @endphp
        @break

    @case('future_projects')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/2021/01/DSC_7778-scaled-e1611834871108.jpg';
            $heading = 'FUTURE PROJECTS';
        @endphp
        @break

    @case('success_stories')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2020/12/82ae65a2-9cdf-46ea-92fb-720019c9f3d6-e1606811821861.jpg';
            $heading = 'SUCCESS STORIES';
        @endphp
        @break

    @case('become_a_volunteer')
        @php
            $bgImage = 'https://www.almudassar.org/wp-content/uploads/edd/2021/01/IMG_8846-scaled.jpg';
            $heading = 'VOLUNTEERING';
        @endphp
        @break

    @case('donate.index')
        @php
            $bgImage = asset('app-assets/frontend/assets/images/donate.jpg');
            $heading = 'DONATE';
        @endphp
        @break

    @case('news_single')
        @php
            $bgImage = NULL;
            $heading = NULL;
        @endphp
        @break
    

    @default
        @php
            $bgImage = 'https://default-image-url.com/default-image.jpg';
            $heading = 'DEFAULT HEADING';
        @endphp
@endswitch
@if($bgImage)
<div class="sd-page-top-bg" style="background: url({{ $bgImage }}) no-repeat center center / cover; padding: 121px 0;">
    <div class="container">
        <div>
            <h1><strong> {{ $heading }} </strong></h1>
        </div>
    </div>
</div>
@endif
