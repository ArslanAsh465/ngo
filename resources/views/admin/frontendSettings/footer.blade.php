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
                        <h4>Footer Section Settings</h4>
                        <hr>
                        <div class="col-md-12">
                            <form method="post" action="{{route('admin.save.footer')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="footer_about">About</label>
                                    <textarea id="footer_about" name="footer_about" class="form-control" rows="4">{{ $info->footer_about ?? '' }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="url" id="facebook_link" name="facebook_link" class="form-control" value="{{ $info->facebook_link ?? '' }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="url" id="twitter_link" name="twitter_link" class="form-control" value="{{ $info->twitter_link ?? '' }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="linkedin_link">Linkedin Link</label>
                                    <input type="url" id="linkedin_link" name="linkedin_link" class="form-control" value="{{ $info->linkedin_link ?? '' }}">
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
