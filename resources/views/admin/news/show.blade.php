@extends('admin-layout.main')

@section('title', 'Show News Item')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <h2>News Item Details</h2>
            </div>

            <div class="card">
                <div class="card-body">
                    <h2>{{$news->title}}</h2>
                    <h5>Description</h5>
                    <p>{{ $news->description }}</p>

                    @if($news->image)
                        <h4>Image</h4>
                        <img src="{{ asset('storage/' . $news->image) }}" alt="News Image" style="max-width: 300px;">
                    @else
                        <p>No Image</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
