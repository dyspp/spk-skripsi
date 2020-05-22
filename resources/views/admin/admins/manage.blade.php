@extends('admin.master')

@section('title', 'Manage Admins')

@section('content')
@include('admin.partials.alert-messages')
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span id="searchIcon" class="input-group-text show"><i class="fas fa-search"></i></span>
            <span id="searchLoading" class="spinner-border spinner-border-sm text-secondary-dy"></span>
         </div>
         <input data-name="dataTableSearch" data-url="{{ route('admin.manage_admins') }}" type="text" name="search" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('admin.add') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>Add</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<!-- Data -->
<div id="dataTable" class="card shadow-sm">
    @include('admin.partials.data-tables.admins-table')
</div>
<!-- Modal -->
@include('admin.partials.modals.modal-change-privilege')
@endsection