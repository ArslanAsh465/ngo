@extends('frontend.main')

@section('title', 'Contact Us')

@section('content')

<div class="container py-5">
    <!-- Page Heading -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1>Contact Us</h1>
        </div>
    </div>

    <div class="row mb-5">
        <!-- Left Column: Form and Map -->
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title text-center">Contact Form</h2>
                    <form action="{{ route('contact_us.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control border rounded" placeholder="Name" name="your-name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control border rounded" placeholder="E-Mail" name="your-email" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control border rounded" placeholder="Contact No." name="telephone" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control border rounded" rows="4" placeholder="Message" name="your-message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Find Us Here</h5>
                    <div class="map mb-3" style="height: 450px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13419.929483565584!2d73.9277315!3d32.7662023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xecd00cffe5d90e1c!2sAl-Mudassar%20Special%20Education%20Complex%20-%20Baharwal!5e0!3m2!1sen!2smy!4v1611993811872!5m2!1sen!2smy"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Contact Details -->
        <div class="col-lg-6">
            @foreach ($locations as $location)
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">{{ strtoupper($location->name) }}</h2>
                        <p class="text-center mb-2"><strong>{{ $location->address }}</strong></p>
                        <p class="text-center mb-2">TEL. {{ $location->telephone }}</p>
                        <p class="text-center mb-4">EMAIL. {{ $location->email }}</p>

                        <div class="border-top pt-3">
                            <h4 class="card-subtitle mb-4 text-center font-weight-bold bg-light p-2 border rounded" style="color: #d59b2d;">BANK ACCOUNT DETAILS</h4>
                            <ul class="list-unstyled">
                                @foreach ($location->banks as $bank)
                                    <li><strong>BANK NAME:</strong> {{ $bank->name }}</li>
                                    <li><strong>ACCOUNT NO:</strong> {{ $bank->account_no }}</li>
                                    <li><strong>IBAN:</strong> {{ $bank->iban ?? 'N/A' }}</li>
                                    <li><strong>BRANCH CODE:</strong> {{ $bank->code }}</li>
                                    <li><strong>TYPE:</strong> {{ $bank->type }}</li>
                                    <li><strong>STATUS:</strong> {{ $bank->status }}</li>
                                    <hr>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
