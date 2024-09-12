@extends('admin-layout.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        @include('admin.frontendSettings.components.settings_sidebar')
                    </div>

                    <div class="col-md-10">
                        <h4>Insights Section Settings</h4>
                        <hr>
                        <div class="col-md-12">
                            <form method="post" action="{{ route('admin.save.insights') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="events_participated">Events Participated</label>
                                    <input type="number" id="events_participated" name="events_participated" class="form-control" value="{{ $info->events_participated ?? '' }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="classes_completed">Classes Completed</label>
                                    <input type="number" id="classes_completed" name="classes_completed" class="form-control" value="{{ $info->classes_completed ?? '' }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="awards_won">Awards Won</label>
                                    <input type="number" id="awards_won" name="awards_won" class="form-control" value="{{ $info->awards_won ?? '' }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="student_enrolled">Students Enrolled</label>
                                    <input type="number" id="student_enrolled" name="student_enrolled" class="form-control" value="{{ $info->student_enrolled ?? '' }}" required>
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

@endsection
