@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div class="ml-auto">
      <a href="{{ route('alternativescores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
</div>
@endsection