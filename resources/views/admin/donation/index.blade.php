@extends('admin-layout.main')

@section('title', 'Donations - Trust App')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="my-4">Donations</h2>

            <!-- Display a table of donations -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Amount</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>${{ $donation->amount }}</td>
                        <td>{{ $donation->first_name }}</td>
                        <td>{{ $donation->last_name }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>{{ $donation->phone }}</td>
                        <td>
                            @if (!$donation->status)
                                <form action="{{ route('admin.donation.update') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="donation_id" value="{{ $donation->id }}">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="status[{{ $donation->id }}]" id="status_{{ $donation->id }}" {{ $donation->status ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_{{ $donation->id }}">
                                            Mark as Paid
                                        </label>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Update Status</button>
                                </form>
                            @else
                                <span class="text-success">Paid</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
