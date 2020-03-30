@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<!-- Button and Messages-->
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div class="ml-auto">
      <a href="{{ route('alternatives.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
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
                  <th>Name</th>
                  <th>Image</th>
                  <th>Brand</th>
                  <th>Price (Rp)</th>
                  <th>Processor</th>
                  <th>GPU</th>
                  <th>RAM (GB)</th>
                  <th>Storage</th>
                  <th>Display</th>
                  <th>Unit Weight (Kg)</th>
                  <th>Connectivity</th>
                  <th>Ports</th>
                  <th>Features</th>
                  <th>Official Website</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody class="tr-align-middle">
               @foreach ($alternatives as $index => $alternative)
               <tr>
                  <td>{{ $alternatives->firstItem() + $index }}</td>
                  <td>{{ $alternative->name }}</td>
                  <td>
                     <img src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}" width="auto" height="75px">
                  </td>
                  <td>{{ $alternative->brand }}</td>
                  <td>{{ formatPrice($alternative->price) }}</td>
                  <td>{{ $alternative->processor }}</td>
                  <td>{{ $alternative->gpu }}</td>
                  <td>{{ $alternative->ram }}</td>
                  <td>{{ $alternative->storage }}</td>
                  <td>{{ $alternative->display }}</td>
                  <td>{{ $alternative->unit_weight }}</td>
                  <td>{{ $alternative->connectivity }}</td>
                  <td>{{ $alternative->ports }}</td>
                  <td>{{ $alternative->features }}</td>
                  <td>
                     <a href="{{ $alternative->link }}" target="_blank" class="btn btn-sm btn-block btn-success"><i class="fas fa-external-link-alt mr-2"></i>Link</a>
                  </td>
                  <td>
                     <div class="d-flex justify-content-center">
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
<div class="d-flex justify-content-center mt-2">
   {{ $alternatives->links() }}
</div>
@endif
@endsection