@extends('frontend.main')

@section('title', 'Donation')

@section('content')

<!-- Display success or error messages -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@elseif (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

    <div class="container py-5">
        <h1 class="text-center mb-4">Donate</h1>
        <div class="row">
            @if ($banks->isEmpty())
                <div class="col-md-12 text-center">
                    <div class="alert alert-info" role="alert">
                        No bank added.
                    </div>
                </div>
            @else
                @foreach ($banks as $bank)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $bank->name }}</h5>
                                <p class="card-text">
                                    <strong>Branch Code:</strong> {{ $bank->code }}<br>
                                    <strong>Account No:</strong> {{ $bank->account_no }}<br>
                                    <strong>IBAN:</strong> {{ $bank->iban ?? 'N/A' }}<br>
                                    <strong>Type:</strong> {{ $bank->type }}
                                </p>

                                <!-- Display location details -->
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
        <div class="row">
            <h3 class="text-center text-justify-center">Your donation, even if it is only a rupee or a penny, means a lot to us and our 500
                differently-abled
                children. Donate whatever is practical and affordable for you. For your convenience, the minimal expenses
                required for providing education, training, board, and accommodation to our precious children are listed
                below.</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="https://www.almudassar.org/wp-content/uploads/2024/06/web-banner-7-june-png-01-1060x643.png"
                    class="img-fluid" alt="Banner Image">
            </div>
        </div>

        <!-- Single Row for Amount Selection and Form -->
        <div class="row p-5">

            <!-- Donation Form Card -->
            <div class="col-md-12 m-5">
                <div class="card">
                    <div class="card-header">
                        Donation Form
                    </div>
                    <div class="card-body">
                        <form id="donation-form" method="POST" action="{{ route('donate.store') }}">
                            @csrf

                            <!-- Amount Selection Section -->
                            <div class="mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        Select Amount
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-3 mb-4">
                                            <!-- Using btn-lg to make buttons larger -->
                                            <button type="button" class="btn btn-primary btn-lg" onclick="selectAmount(100)">$100</button>
                                            <button type="button" class="btn btn-primary btn-lg" onclick="selectAmount(250)">$250</button>
                                            <button type="button" class="btn btn-primary btn-lg" onclick="selectAmount(500)">$500</button>
                                            <button type="button" class="btn btn-primary btn-lg" onclick="selectAmount(1000)">$1000</button>
                                            <button type="button" class="btn btn-primary btn-lg" onclick="selectAmount(2500)">$2500</button>
                                            <input type="text" class="form-control form-control-lg" id="amount" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- User Details Section -->
                            <div class="mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        Your Details
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="first_name">First Name:</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">Last Name:</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number:</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Donate Now</button>
                                    </div>
                                </div>
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
