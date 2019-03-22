@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="storage/uploads/avatars/{{ $user->avatar }}"
                     style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->firstName }} {{ $user->lastName }}'s Profile</h2>
                <form enctype="multipart/form-data" action="{{ route('update.avatar') }}" method="POST">
                    <div class="row flex-column form-group">
                        <label for="avatarUpload">
                        {{ __('Update Profile Image') }}
                        </label>
                        <input type="file" name="avatar" id="avatarUpload">
                    </div>
                    <div class="form-group row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-primary" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection