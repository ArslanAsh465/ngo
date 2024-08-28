@extends('admin-layout.main')

@section('content')

<div class="row">
    <div class="col-md-12">

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

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        @include('admin.frontendSettings.components.settings_sidebar')
                    </div>

                    <div class="col-md-10">
                        <!-- Form Card for Adding/Editing Slider -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center"> Add New Homepage Slider </h4>
                                <form method="post" id="sliderForm" action="{{ route('admin.save.homepageslider') }}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Hidden input for ID if editing an existing record -->
                                    <input type="hidden" name="id" id="sliderId">

                                    <div class="form-group">
                                        <label for="heading">Heading</label>
                                        <input type="text" required name="heading" id="heading" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" required name="description" id="description" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" accept="image/*" class="form-control">
                                    </div>

                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
