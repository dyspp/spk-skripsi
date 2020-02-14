@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex mb-2">
   <div class="mr-auto">
      @include('admin.partials.alert-messages')
   </div>
   <div>
      <a href="{{ route('alternatives.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
</div>
@endsection