@extends('admin-layout.main')

@section('title', 'Banks List')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Bank List</h2>
                <a href="{{ route('banks.create') }}" class="btn btn-primary">Add New Bank</a>
            </div>

            @if($banks->isEmpty())
                <div class="alert alert-warning">
                    <p>No banks found. <a href="{{ route('banks.create') }}">Add a new bank</a>.</p>
                </div>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Account No</th>
                            <th>IBAN No</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banks as $bank)
                        <tr>
                            <td>{{ $bank->name }}</td>
                            <td>{{ $bank->code }}</td>
                            <td>{{ $bank->account_no }}</td>
                            <td>{{ $bank->iban }}</td>
                            <td>{{ $bank->type }}</td>
                            <td>
                                <a href="{{ route('banks.show', $bank) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('banks.edit', $bank) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('banks.destroy', $bank) }}" method="POST" style="display:inline;">
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
@endsection
