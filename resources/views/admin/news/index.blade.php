@extends('admin-layout.main')

@section('title', 'News List')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-3">
                <h2>News List</h2>
                <a href="{{ route('admin.news.create') }}" class="btn btn-primary col-md-3">Add New News Item</a>
            </div>

            <div class="table-responsive">
                @if($newsItems->isEmpty())
                    <div class="alert alert-warning">
                        <p>No news items found.</p>
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsItems as $news)
                            <tr>
                                <td>{{ $news->description }}</td>
                                <td>
                                    @if($news->image)
                                        <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" style="max-width: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.news.show', $news) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.news.destroy', $news) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
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
