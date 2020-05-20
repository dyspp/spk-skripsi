@extends('admin.master')

@section('title', 'Edit Profile')

@section('content')
<div class="row d-flex justify-content-center mt-3">
    <div class="col-xl-8 col-lg-8 col-md-8">
        @if(Session::has('profile_updated'))
            <div class="alert alert-success">
                <strong>{{ session('profile_updated') }}</strong>
            </div>
        @endif
        @if(Session::has('update'))
            <div class="alert alert-success">
                <strong>{{ session('update') }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h3>Update Profile</h3>
                <hr class="hr-purple">
                <form action="{{ route('users.update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="display-picture-container">
                        <div class="display-picture">
                            <img src="{{ asset('images/users/'.$user->display_picture) }}" alt="{{ $user->name }}">
                        </div>
                        <p>Display Picture</p>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="display_picture" id="display_picture">
                            <label class="custom-file-label" for="display_picture">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="change-password-divider">
                        <hr class="hr-purple">
                        <p>Change Password</p>
                    </div>
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="current_password" id="current_password" class="form-control">
                        @if(Session::has('password_not_match'))
                            <strong class="text-danger">{{ session('password_not_match') }}</strong>
                        @endif
                        @if(Session::has('new_password_empty'))
                            <strong class="text-danger">{{ session('new_password_empty') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" id="new_password" class="form-control">
                        @if(Session::has('current_password_empty'))
                            <strong>{{ session('current_password_empty') }}</strong>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="new_password_confirmation">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-block btn-purple"><i class="fas fa-check mr-2"></i>Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection