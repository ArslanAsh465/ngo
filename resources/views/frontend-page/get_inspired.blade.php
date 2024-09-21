@extends('frontend.main')

@section('title', 'Get Inspired')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Get Inspired</h1>
        <div class="list-group">
            <a href="{{ route('get.future-projects') }}" class="list-group-item list-group-item-action">Future Projects</a>
            <a href="{{ route('get.success-stories') }}" class="list-group-item list-group-item-action">Success Stories</a>
            <a href="{{ route('get.become-volunteer') }}" class="list-group-item list-group-item-action">Become a Volunteer</a>
        </div>
    </div>
@endsection
