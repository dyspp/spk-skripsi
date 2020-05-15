@extends('admin.master')

@section('title', 'Criterion Scores')

@section('content')
<!-- Button and Messages -->
@include('admin.partials.alert-messages')
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
         </div>
         <input type="text" name="dasboardSearchbar" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('criterionscores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<!-- Data -->
<div class="card shadow-sm">
   <div class="card-body">
      <h3>Criterion Score Data</h3>
      <hr class="hr-purple">
      @if($criterionScores->isNotEmpty())
      <div class="table-responsive text-nowrap">
         <table class="table table-hover">
            <thead class="table-border-none">
               <tr>
                  <th class="w-5p">No.</th>
                  <th>Criterion</th>
                  <th>Description</th>
                  <th>Score</th>
                  <th class="w-15p">Actions</th>
               </tr>
            </thead>
            <tbody>
            @foreach($criterionScores as $index => $criterionScore)
            <tr>
               <td>{{ $criterionScores->firstItem() + $index }}</td>
               <td>{{ $criterionScore->criterion->name }}</td>
               <td>{{ $criterionScore->description }}</td>
               <td>{{ $criterionScore->score }}</td>
               <td>
                  <div class="d-flex justify-content-center">
                     <a href="{{ route('criterionscores.edit', $criterionScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                     <button type="button" class="btn btn-sm btn-danger btn-delete" data-toggle="modal" data-url="{{ route('criterionscores.destroy', $criterionScore->id) }}" data-target="#modalDelete"><i class="far fa-trash-alt mr-2"></i>Delete</button>
                  </div>
               </td>
            </tr>
            @endforeach
            </tbody>
         </table>
         <!-- Modal -->
         @include('admin.partials.modals.modal-delete')
      </div>
      @else
      <div class="alert alert-border alert-warning text-center">
         <strong>No data found.</strong>
      </div>
      @endif
   </div>
</div>
<!-- Pagination -->
@if($criterionScores->total() > $criterionScores->perPage())
<div class="pagination-admin">
   {{ $criterionScores->links() }}
</div>
@endif
@endsection