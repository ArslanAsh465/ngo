@extends('frontend.main')

@section('title', 'Education Services')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Education Services</h1>
        <div class="list-group">
            <a href="{{ route('education.school-deaf') }}" class="list-group-item list-group-item-action">School for Deaf</a>
            <a href="{{ route('education.school-blind') }}" class="list-group-item list-group-item-action">School for Blind</a>
            <a href="{{ route('education.learning-disability') }}" class="list-group-item list-group-item-action">Learning Disability</a>
            <a href="{{ route('education.vocational-training') }}" class="list-group-item list-group-item-action">Vocational Training</a>
            <a href="{{ route('education.rehabilitation') }}" class="list-group-item list-group-item-action">Rehabilitation</a>
            <a href="{{ route('education.barnala-branch') }}" class="list-group-item list-group-item-action">Barnala Branch</a>
        </div>
    </div>
@endsection
