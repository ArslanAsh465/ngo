@extends('frontend.main')

@section('title', 'Become a Volunteer')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Content Column -->
        <div class="col-md-6">
            <h3 class="mb-3 text-dark" style="line-height: 1.8;">
                <strong> VOLUNTEERING FOR THE SPECIAL NEEDS SECTOR IS A HIGHLY REWARDING AND CHALLENGING EXPERIENCE AT THE SAME TIME.</strong>
            </h3>
            <p class="mb-4" style="font-family: 'Karla', sans-serif; color: #29af8a;">
                In countries like Pakistan, children and adults with mental or physical disabilities are often overlooked by the government and do not receive the care and support they need. Al Mudassar Trust is seeking people to bring skills into its developing structure. Perhaps you are a teacher, a medical specialist, or a person with skills in supporting families. We are looking in particular for experienced people who can work directly with children and families, people who can train our local staff, and people who can fulfill both roles. You will have accommodation at the Centre and we believe you will cherish the experience for the rest of your life. Sign up today as a volunteer.
            </p>
            <img src="https://www.almudassar.org/wp-content/uploads/2021/01/IMG_8201-scaled-650x450.jpg" class="img-fluid mb-4" alt="Volunteer">
            <h3 class="font-weight-bold mb-3" style="font-family: 'Montserrat', sans-serif;">
                INTERNATIONAL VOLUNTEERS
            </h3>
            <p class="mb-4">
                Like any other charity, we rely on donations to keep our schools running. So if you have a passion to make a difference, consider joining us.
            </p>
            <h3 class="font-weight-bold mb-4" style="font-family: 'Montserrat', sans-serif;">
                WE NEED PEOPLE WHO CAN
            </h3>

            <ul class="list-unstyled">
                <li class="d-flex align-items-start mb-4">
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="custom-icon" style="color: #29af8a; width: 50px; font-size: 24px;">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h4 class="font-weight-bold mb-1">VOLUNTEER AT EVENTS</h4>
                        <p>Volunteering at events is to help at one of our numerous fundraising events happening around the country.</p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4">
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="custom-icon" style="color: #29af8a; width: 50px; font-size: 24px;">
                            <i class="fa-solid fa-wine-glass"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h4 class="font-weight-bold mb-1">ORGANIZE YOUR OWN FUNDRAISING ACTIVITIES</h4>
                        <p>Organizing your own fundraising activities could be anything such as a charity dinner, parties, or fun fairs, etc.</p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4">
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="custom-icon" style="color: #29af8a; width: 50px; font-size: 24px;">
                            <i class="fa fa-child"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h4 class="font-weight-bold mb-1">ENGAGE MOSQUES, SCHOOLS, UNIVERSITY COLLECTIONS</h4>
                        <p>Engaging other institutes to help raise the vital funds needed for the projects.</p>
                    </div>
                </li>

                <li class="d-flex align-items-start mb-4">
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="custom-icon" style="color: #29af8a; width: 50px; font-size: 24px;">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <h4 class="font-weight-bold mb-1">PROMOTE AWARENESS ON SOCIAL NETWORKING SITES</h4>
                        <p>Promote our projects on Facebook, Twitter, Instagram, Flickr, and LinkedIn.</p>
                    </div>
                </li>
            </ul>

        </div>

        <!-- Contact Form Column -->
        <div class="col-md-6" style="background-color: rgb(241, 245, 250);">
            <h2 class="mb-3 text-center text-dark"><strong>NEW VOLUNTEER?</strong></h2>
            <h5 class="mb-4 text-dark"><strong>THE FOLLOWING INFO IS REQUIRED</strong></h5>
            <form action="#" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">NAME*</label>
                    <input type="text" class="form-control border" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">E-MAIL*</label>
                    <input type="email" class="form-control border" id="email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">PHONE*</label>
                    <input type="text" class="form-control border" id="phone" name="phone" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">ADDRESS*</label>
                    <input type="text" class="form-control border" id="address" name="address" placeholder="ADDRESS LINE" required>
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control border" id="text-100" name="text-100" placeholder="ADDRESS LINE" required>
                </div>
                <div class="form-group mb-3">
                    <label for="COUNTRY">COUNTRY</label>
                    <input type="text" class="form-control border" id="COUNTRY" name="COUNTRY">
                </div>
                <div class="form-group mb-3">
                    <label for="INTEREST">AREA OF INTEREST</label>
                    <input type="text" class="form-control border" id="INTEREST" name="INTEREST">
                </div>
                <div class="form-group mb-3">
                    <label for="MSG">MESSAGE</label>
                    <textarea class="form-control border" id="MSG" name="MSG" rows="4" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="captcha-207">CAPTCHA</label>
                    <input type="text" class="form-control border" id="captcha-207" name="captcha-207" placeholder="Write Code">
                    <img class="mt-2" src="https://www.almudassar.org/wp-content/uploads/wpcf7_captcha/143762710.png" alt="captcha">
                </div>
                <button type="submit" class="btn btn-primary">Send Inquiry</button>
            </form>
        </div>
    </div>

    {{-- Banner --}}
    <div class="row">
        <!-- Email Column -->
        <div class="col-md-4 mb-4">
            <div class="bg-light p-4" style="background-color: #F1F5FA;">
                <h4 class="mb-0">EMAIL US AT <br>INFO@ALMUDASSAR.ORG</h4>
            </div>
        </div>

        <!-- Phone Column -->
        <div class="col-md-4 mb-4">
            <div class="bg-light p-4" style="background-color: #F1F5FA;">
                <h4 class="mb-0">QUESTIONS? GIVE US A CALL AT <br>+92 300 5430470</h4>
            </div>
        </div>
    </div>
</div>
@endsection
