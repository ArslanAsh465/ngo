@extends('frontend.main')
@section('title', 'Donate')
@section('content')

<div class="container py-5">
    <section class="wide-tb-100">
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

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="heading-main">
                        <small>Donation</small>
                        Don't Let Poverty Destroy Someone's Dreams
                    </h1>
                    <p>Your donation, even if it is only a rupee or a penny, means a lot to us and our 500 differently-abled children. Donate whatever is practical and affordable for you. For your convenience, the minimal expenses required for providing education, training, board, and accommodation to our precious children are listed below.</p>
                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <img src="https://www.almudassar.org/wp-content/uploads/2024/06/web-banner-7-june-png-01-1060x643.png" class="img-fluid" alt="Banner Image">
                        </div>
                    </div>
                    <div class="donation-wrap">
                        <h3 class="h3-sm fw-5 txt-blue mb-3">How much would you like to donate today?</h3>
                        <p>All donations directly impact our organization and help us further our mission.</p>
                        <form id="donation-form" method="POST" action="{{ route('donate.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount(100)" name="amount" id="amount1" value="100">
                                            <label class="form-check-label label-dark" for="amount1">$100</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount(250)" name="amount" id="amount2" value="250">
                                            <label class="form-check-label label-dark" for="amount2">$250</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount(500)" name="amount" id="amount3" value="500">
                                            <label class="form-check-label label-dark" for="amount3">$500</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount(1000)" name="amount" id="amount4" value="1000">
                                            <label class="form-check-label label-dark" for="amount4">$1,000</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount(2500)" name="amount" id="amount5" value="2500">
                                            <label class="form-check-label label-dark" for="amount5">$2,500</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-light" type="radio" onclick="selectAmount('custom_amount')" name="amount" id="amount6" value="custom_amount">
                                            <label class="form-check-label label-dark" for="amount6">Custom Amount</label>
                                        </div>
                                        <div class="mt-3" id="custom-amount-container" style="display: none;">
                                            <input type="text" class="form-control" id="custom" placeholder="Custom Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>Who's giving today?</h3>
                                    <p class="text-primary">We’ll never share this information with anyone.</p>
                                    <div class="border-top mb-4"></div>
                                </div>

                                <div class="form-group">
                                    <label for="first-name">First Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first-name" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Last Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last-name" name="last_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email: <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group form-check mt-2">
                                    <input type="checkbox" class="form-check-input" name="anonymous" id="anonymous" value="1">
                                    <label class="form-check-label" for="anonymous">Make this an anonymous donation.</label>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Add your comment here..."></textarea>
                                </div>
                                <input type="hidden" id="donation-amount" name="amount">
                                <div class="col-md-12">
                                    <button class="btn btn-default"><i data-feather="heart"></i> Donate Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h5>Bank Account Details:</h5>
                    @foreach ($banks as $bank)
                        <div class="col-md-12 mb-4">
                            <div class="card shadow-sm">
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
                                            <li><strong>Secondary Phone:</strong> {{ $bank->location->secondary_phone ?? 'N/A' }}</li>
                                        </ul>
                                    @else
                                        <p class="text-muted">No location details available.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        function selectAmount(amount) {
            const customInput = document.getElementById('custom-amount-container');
            const customInputField = document.getElementById('custom');
            document.getElementById('donation-amount').value = amount;

            if (amount === 'custom_amount') {
                customInput.style.display = 'block';
                customInputField.value = '';
            } else {
                customInput.style.display = 'none';
            }
        }

        document.getElementById('custom').addEventListener('input', function() {
            const value = parseFloat(this.value);
            if (!isNaN(value) && value > 0) {
                document.getElementById('donation-amount').value = value;
            } else {
                document.getElementById('donation-amount').value = '';
            }
        });
    </script>
</div>
@endsection
