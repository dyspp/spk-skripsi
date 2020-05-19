@extends('admin.master')

@section('title', 'Edit Profile')

@section('content')
<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('users.update_profile', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <img src="{{ asset('images/users/'.$user->display_picture) }}" alt="{{ $user->name }}" width="25%" height="auto">
            <input type="text" name="name" id="name" value="{{ $user->name }}">
            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection