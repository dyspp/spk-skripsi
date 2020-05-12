@extends('admin.master')

@section('title', 'Alternatives')

@section('content')
<!-- Button and Messages-->
@include('admin.partials.alert-messages')
<div class="toolbars">
   <div class="toolbar-inputs shadow-sm">
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
         </div>
         <input type="text" name="dasboardSearchbar" class="form-control" placeholder='Search data'>
      </div>
      <a href="{{ route('alternatives.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
   <div class="toolbar-filters"></div>
</div>
<!-- Modal -->
<div class="modal fade" id="alternativeDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header bg-purple">
        <h5 class="modal-title">Alternative Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="alternativeDetails" class="modal-body">
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
      <h3>Alternative Data</h3>
      <hr class="hr-purple">
      @if($alternatives->isNotEmpty())
      <div class="table-responsive text-nowrap">
         <table class="table table-hover">
            <thead class="table-border-none">
               <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Brand</th>
                  <th class="text-center">Actions</th>
               </tr>
            </thead>
            <tbody class="tr-align-middle">
               @foreach ($alternatives as $index => $alternative)
               <tr>
                  <td>{{ $alternatives->firstItem() + $index }}</td>
                  <td>
                     <img src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}" width="auto" height="75px">
                  </td>
                  <td>{{ $alternative->name }}</td>
                  <td>{{ $alternative->brand }}</td>
                  <td>
                     <div class="d-flex justify-content-center">
                        <button id="showDetails-{{ $alternative->id }}" class="btn btn-sm btn-success mr-2" data-id="{{ $alternative->id }}" data-toggle="modal" data-target="#alternativeDetailsModal"><i class="fas fa-list-ul mr-2"></i>Details</button>
                        <a href="{{ route('alternatives.edit', $alternative->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                        <form action="{{ route('alternatives.destroy', $alternative->id) }}" method="post">
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
@if($alternatives->total() > $alternatives->perPage())
<div class="pagination-admin">
   {{ $alternatives->links() }}
</div>
@endif
@endsection