@extends('frontend.main')

@section('title', $news->title)

@section('content')

<!-- Display success or error messages -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@elseif (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <div class="container py-5">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <img width="770" height="400" src="{{$news->image}}" class="attachment-sd-blog-thumbs size-sd-blog-thumbs wp-post-image" alt="" decoding="async">
                <h2 class="mt-2">{{$news->title}}</h2>
                <h4>{{$news->description}}</h4>
            </div>
            <div class="col-md-3 col-sm-12">
            </div>
        </div>
    </div>
@endsection
