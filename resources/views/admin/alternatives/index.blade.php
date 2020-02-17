@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div>
      <a href="{{ route('alternatives.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
</div>
<div class="card shadow-sm">
   <div class="card-body pb-1">
      <h3>Alternative Data</h3>
      <hr class="hr-purple">
      <div class="table-responsive">
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
                  <th>Screen</th>
                  <th>Unit Weight (Kg)</th>
                  <th>Features</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($alternatives as $index => $alternative)
               <tr>
                  <td>{{ $alternatives->firstItem() + $index }}</td>
                  <td>{{ $alternative->name }}</td>
                  <td>
                     <img src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}" width="auto" height="75px">
                  </td>
                  <td>{{ $alternative->brand }}</td>
                  <td>{{ $alternative->price }}</td>
                  <td>{{ $alternative->processor }}</td>
                  <td>{{ $alternative->gpu }}</td>
                  <td>{{ $alternative->ram }}</td>
                  <td>{{ $alternative->storage }}</td>
                  <td>{{ $alternative->screen }}</td>
                  <td>{{ $alternative->unit_weight }}</td>
                  <td>{{ $alternative->features }}</td>
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
   </div>
</div>
@endsection