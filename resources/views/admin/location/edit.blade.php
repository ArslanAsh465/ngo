@extends('admin-layout.main')

@section('title', 'Edit Location')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Edit Location</h2>
                <a href="{{ route('locations.index') }}" class="btn btn-secondary">Back to List</a>
            </div>

            <form action="{{ route('locations.update', $location) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $location->name }}" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $location->telephone }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $location->email }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" class="form-control" required>{{ $location->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="secondary_phone">Secondary Phone</label>
                    <input type="text" name="secondary_phone" id="secondary_phone" class="form-control" value="{{ $location->secondary_phone }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
