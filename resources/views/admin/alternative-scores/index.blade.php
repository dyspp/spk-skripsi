@extends('admin.master')

@section('title', 'Alternative Scores')

@section('content')
<!-- Button and Messages -->
@include('admin.partials.alert-messages')
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span id="searchIcon" class="input-group-text show"><i class="fas fa-search"></i></span>
            <span id="searchLoading" class="spinner-border spinner-border-sm text-secondary-dy"></span>
         </div>
         <input data-name="dataTableSearch" data-url="{{ route('alternativescores.index') }}" type="text" name="search" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('alternativescores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<!-- Modal -->
<div class="modal modal-dy fade" id="alternativeScoresModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
   <div class="modal-content">
      <div class="modal-header">
         <div class="modal-header-text">
            <i class="fas fa-align-justify mr-2"></i>
            <h5 class="modal-title">Alternative Score Details</h5>
         </div>
      </div>
      <div id="alternativeScores" class="modal-body">
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
   @include('admin.partials.data-tables.alternative-scores-table')
</div>
@endsection