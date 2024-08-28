@extends('admin-layout.main')

@section('title', 'Location Details')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Location Details</h2>
                <a href="{{ route('locations.index') }}" class="btn btn-secondary">Back to List</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5>{{ $location->name }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Telephone:</strong> {{ $location->telephone }}</p>
                    <p><strong>Email:</strong> {{ $location->email }}</p>
                    <p><strong>Address:</strong> {{ $location->address }}</p>
                    <p><strong>Secondary Phone:</strong> {{ $location->secondary_phone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
