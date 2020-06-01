@extends('admin.master')

@section('title', 'Alternatives')

@section('content')
<!-- Button and Messages-->
@include('admin.partials.alert-messages')
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span id="searchIcon" class="input-group-text show"><i class="fas fa-search"></i></span>
            <span id="searchLoading" class="spinner-border spinner-border-sm text-secondary-dy"></span>
         </div>
         <input data-name="dataTableSearch" data-url="{{ route('alternatives.index') }}" type="text" name="search" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('alternatives.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>Add</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<!-- Modal -->
<div class="modal modal-dy fade" id="alternativeDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <div class="modal-header-text">
            <div class="fas fa-laptop mr-2"></div>
            <h5 class="modal-title">Alternative Details</h5>
         </div>
      </div>
      <div id="alternativeDetails" class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
      </div>
    </div>
  </div>
</div>
   @include('admin.partials.modals.modal-delete')
<!-- Data -->
<div id="dataTable" class="card shadow-sm">
   @include('admin.partials.data-tables.alternatives-table')
</div>
@endsection