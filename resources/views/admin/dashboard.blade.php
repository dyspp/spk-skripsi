@extends('admin.master')

@section('title', 'Dashboard')

@section('content')
@if(Session::has('authenticated'))
    <div class="alert alert-info mt-3">
        <strong>{{ session('authenticated') }}</strong>
    </div>
@endif
@if(Session::has('unauthorized'))
    <div class="alert alert-info mt-3">
        <strong>{{ session('unauthorized') }}</strong>
    </div>
@endif
<h1>Welcome to the Dashboard!</h1>
@endsection