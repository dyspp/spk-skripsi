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
        <div class="card">
            <div class="card-body">
                <h3>Update Profile</h3>
                <hr class="hr-purple">
                <form action="{{ route('admin.update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="display-picture-container">
                        <div class="display-picture">
                            <img src="{{ asset('images/users/'.$user->display_picture) }}" alt="{{ $user->name }}">
                        </div>
                        <p>Display Picture</p>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('display_picture') is-invalid @enderror" name="display_picture" id="display_picture">
                                <label class="custom-file-label" for="display_picture">Choose file</label>
                                @error('display_picture')
                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                        @error('name')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                            <strong class="invalid-feedback">{{ getOldValue(old('name')) }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                        @error('email')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                            <strong class="invalid-feedback">{{ getOldValue(old('email')) }}</strong>
                        @enderror
                    </div>
                    <div class="change-password-divider">
                        <hr class="hr-purple">
                        <p>Change Password</p>
                    </div>
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="current_password" id="current_password"
                                class="form-control
                                        @error('current_password') is-invalid @enderror
                                        @if(Session::has('password_not_match')) is-invalid @endif
                                        @if(Session::has('new_password_empty')) is-invalid @endif">
                        @if(Session::has('password_not_match'))
                            <strong class="invalid-feedback">{{ session('password_not_match') }}</strong>
                        @endif
                        @if(Session::has('new_password_empty'))
                            <strong class="invalid-feedback">{{ session('new_password_empty') }}</strong>
                        @endif
                        @error('current_password')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" name="new_password" id="new_password"
                                class="form-control
                                        @error('new_password') is-invalid @enderror
                                        @if(Session::has('current_password_empty')) is-invalid @endif">
                        @if(Session::has('current_password_empty'))
                            <strong class="invalid-feedback">{{ session('current_password_empty') }}</strong>
                        @endif
                        @error('new_password')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="new_password_confirmation">Confirm New Password</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button id="cancelButton" type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#modalCancel" data-url="{{ route('admin.dashboard') }}"><i class="fas fa-times mr-2"></i>Cancel</button>
                        <button type="submit" class="btn btn-purple m-1"><i class="fas fa-check mr-2"></i>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@include('admin.partials.modals.modal-cancel')
@endsection