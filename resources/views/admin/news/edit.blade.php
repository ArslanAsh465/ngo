@extends('admin-layout.main')

@section('title', 'Edit News Item')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h2>Edit News Item</h2>
            </div>

            <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $news->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $news->description) }}" required>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if($news->image)
                        <p>Current Image:</p>
                        <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" style="max-width: 100px;">
                    @else
                        <p>No Image</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
