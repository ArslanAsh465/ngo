@extends('frontend.main')

@section('title', 'Donation')

@section('content')

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Make a Difference Today</h1>
            <p class="lead">Your contribution can help transform lives. Support our 500 differently-abled children with
                your kindness.</p>
        </div>

        <div class="row mb-4">
            @if ($banks->isEmpty())
                <div class="col-md-12 text-center">
                    <div class="alert alert-info" role="alert">
                        No bank is Available Now
                    </div>
                </div>
            @else
                @foreach ($banks as $bank)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow border-light">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bank->name }}</h5>
                                <p class="card-text">
                                    <strong>Branch Code:</strong> {{ $bank->code }}<br>
                                    <strong>Account No:</strong> {{ $bank->account_no }}<br>
                                    <strong>IBAN:</strong> {{ $bank->iban ?? 'N/A' }}<br>
                                    <strong>Type:</strong> {{ $bank->type }}
                                </p>
                                @if ($bank->location)
                                    <hr>
                                    <h6 class="mt-3">Location Details:</h6>
                                    <ul class="list-unstyled">
                                        <li><strong>Name:</strong> {{ $bank->location->name }}</li>
                                        <li><strong>Telephone:</strong> {{ $bank->location->telephone }}</li>
                                        <li><strong>Email:</strong> {{ $bank->location->email }}</li>
                                        <li><strong>Address:</strong> {{ $bank->location->address }}</li>
                                        <li><strong>Secondary Phone:</strong>
                                            {{ $bank->location->secondary_phone ?? 'N/A' }}</li>
                                    </ul>
                                @else
                                    <p class="text-muted">No location details available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="text-center mb-5">
            <h2 class="text-muted">Every donation counts, no matter how small.</h2>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <img src="https://www.almudassar.org/wp-content/uploads/2024/06/web-banner-7-june-png-01-1060x643.png"
                    class="img-fluid rounded" alt="Banner Image">
            </div>
        </div>

        <form id="donation-form" method="POST" action="{{ route('donate.store') }}">
            @csrf
            <!-- Amount Selection Section -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header text-center">
                            <h1 class="mb-0">Select Donation</h1>
                        </div>
                        <div class="card-body">
                            <h6 class="font-weight-bold">Choose an amount to donate <span class="text-danger">*</span></h6>
                            <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                                @foreach ([100, 250, 500, 1000, 2500] as $amount)
                                    <button type="button" class="btn border border-secondary btn-lg"
                                        onclick="selectAmount({{ $amount }})">${{ $amount }}</button>
                                @endforeach
                                <input type="text" class="form-control form-control-lg" id="amount" name="amount"
                                    required placeholder="Enter amount">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Details Section -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header text-center">
                            <h1 class="mb-0">Your Details</h1>
                        </div>
                        <div class="card-body">

                            <div class="mb-4">
                                <div class="form-group">
                                    <label for="first_name">First Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email: <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number: <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group form-check mt-2">
                                    <input type="checkbox" class="form-check-input" name="anonymous" id="anonymous"
                                        value="1">
                                    <label class="form-check-label" for="anonymous">Make this an anonymous donation.</label>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Add your comment here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-default mt-3">Donate Now</button>
                            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script>
        function selectAmount(amount) {
            var inputField = document.getElementById('amount');
            inputField.value = amount;
        }
    </script>

@endsection
