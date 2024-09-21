@extends('admin-layout.main')

@section('title', 'Locations List')

@section('content')
<div class="container">
    <div class="row">

        <!-- Display Session Message Start -->
        <!-- Display success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Display error message -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <!-- Display Session Message End -->

        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Locations List</h2>
                <a href="{{ route('locations.create') }}" class="btn btn-primary">Add New Location</a>
            </div>

            <div class="table-responsive">
                @if($locations->isEmpty())
                    <div class="alert alert-warning">
                        <p>No locations found.</p>
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Secondary Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $location)
                            <tr>
                                <td>{{ $location->name }}</td>
                                <td>{{ $location->telephone }}</td>
                                <td>{{ $location->email }}</td>
                                <td class="text-truncate" style="max-width: 150px;">{{ $location->address }}</td> <!-- Truncate text with a fixed width -->
                                <td>{{ $location->secondary_phone }}</td>
                                <td>
                                    <a href="{{ route('locations.show', $location) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('locations.edit', $location) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('locations.destroy', $location) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
