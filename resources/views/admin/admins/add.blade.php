@extends('admin.master')

@section('title', 'Add Admin')

@section('content')
<div class="row d-flex justify-content-center mt-3">
    <div class="col-xl-8 col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
                <h3>Add Admin</h3>
                <hr class="hr-purple">
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="display-picture-container">
                        <div class="display-picture">
                            <img src="{{ asset('images/users/default.jpg') }}" alt="default">
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
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button id="cancelButton" type="button" class="btn btn-danger m-1" data-toggle="modal" data-target="#modalCancel" data-url="{{ route('admin.manage_admins') }}"><i class="fas fa-times mr-2"></i>Cancel</button>
                        <button type="submit" class="btn btn-purple m-1"><i class="fas fa-check mr-2"></i>Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@include('admin.partials.modals.modal-cancel')
@endsection