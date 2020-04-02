@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<!-- Button and Messages -->
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div class="ml-auto">
      <a href="{{ route('alternativescores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="alternativeScoresModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
   <div class="modal-content">
      <div class="modal-header bg-purple">
         <h5 class="modal-title">Alternative Score Details</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      <div id="alternativeScores" class="modal-body">
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Close</button>
      </div>   
   </div>
  </div>
</div>
<!-- Data -->
<div class="card shadow-sm">
   <div class="card-body pb-1">
      <h3>Alternative Score Data</h3>
      <hr class="hr-purple">
      @if($alternativeScores->isNotEmpty())
      <div class="table-responsive text-nowrap">
         <table class="table table-hover">
            <thead class="table-border-none">
               <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Alternative</th>
                  <th>Brand</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody class="tr-align-middle">
               @foreach($alternativeScores as $index => $alternativeScore)
               <tr>
                  <td>{{ $alternativeScores->firstItem() + $index }}</td>
                  <td>
                     <img src="{{ asset('images/alternatives/' .$alternativeScore->alternative->image) }}" alt="{{ $alternativeScore->alternative->name }}" width="auto" height="75px">
                  </td>
                  <td>{{ $alternativeScore->alternative->name }}</td>
                  <td>{{ $alternativeScore->alternative->brand }}</td>
                  <td>
                     <div class="d-flex justify-content-center">
                        <button id="showScores-{{ $alternativeScore->id }}" class="btn btn-sm btn-success mr-2" data-id="{{ $alternativeScore->id }}" data-toggle="modal" data-target="#alternativeScoresModal"><i class="fas fa-list-ol mr-2"></i>Scores</button>
                        <a href="{{ route('alternativescores.edit', $alternativeScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                        <form action="{{ route('alternativescores.destroy', $alternativeScore->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-sm btn-danger" onClick="return confirm('This action cannot be undone. Continue?')">
                              <i class="far fa-trash-alt mr-2"></i>Delete
                           </button>
                        </form>
                     </div>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      @else
      <div class="alert alert-border alert-warning text-center">
         <strong>No data found.</strong>
      </div>
      @endif
   </div>
</div>
<!-- Pagination -->
@if($alternativeScores->total() > $alternativeScores->perPage())
<div class="d-flex justify-content-center mt-2">
   {{ $alternativeScores->links() }}
</div>
@endif
@endsection