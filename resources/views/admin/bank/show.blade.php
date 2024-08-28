@extends('admin-layout.main')

@section('title', 'Bank Account Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Bank Account Details</h2>
                <p><strong>Name:</strong> {{ $bank->name }}</p>
                <p><strong>Code:</strong> {{ $bank->code }}</p>
                <p><strong>Account Number:</strong> {{ $bank->account_no }}</p>
                <p><strong>IBAN No:</strong> {{ $bank->iban }}</p>
                <p><strong>Type:</strong> {{ $bank->type }}</p>
                <a href="{{ route('banks.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
