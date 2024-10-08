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
							<form method="post" action="{{route('admin.save.insights')}}" enctype="multipart/form-data">
								@csrf
								<label>Events Participated</label>
								<input type="number" required name="events_participated" class="form-control" value="{{$info->events_participated??''}}">

								<label>classes_completed</label>
								<input type="number" required name="classes_completed" class="form-control" value="{{$info->classes_completed??''}}">

								<label>Awards Won</label>
								<input type="number" required name="awards_won" class="form-control" value="{{$info->awards_won??''}}">

								<label>Student Enrolled</label>
								<input type="number" required name="student_enrolled" class="form-control" value="{{$info->student_enrolled??''}}">

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
