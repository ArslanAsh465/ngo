@extends('admin-layout.main')

@section('title', 'Add News Item')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Add New News Item</h2>
                <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Back to List</a>
            </div>

            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
