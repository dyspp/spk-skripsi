@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('alternatives.index') }}" onClick="return confirm('This action cannot be undone. Continue?')" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternatives</a>
</div>

@endsection