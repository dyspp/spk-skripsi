@extends('admin.dashboards.master')

@section('title', 'Criteria')

@section('content')
<div class="row">
   <div class="col-lg-12 col-md-12">
      <div class="d-flex mb-2">
         <div class="mr-auto">
            @include('admin.partials.alert-messages')
         </div>
         <div>
            <a href="{{ route('criteria.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            @if ($criteria->isNotEmpty())
            <h3>Criterion Data</h3>
            <hr class="hr-purple">
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead class="table-border-none">
                     <tr>
                        <th class="w-5p">No.</th>
                        <th>Name</th>
                        <th>Atribute</th>
                        <th>Weight</th>
                        <th class="w-15p">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($criteria as $index => $criterion)
                     <tr>
                        <td>{{ $criteria->firstItem() + $index }}</td>
                        <td>{{ $criterion->name }}</td>
                        <td>{{ $criterion->attribute == 0 ? 'Cost' : 'Benefit' }}</td>
                        <td>{{ $criterion->weight }}</td>
                        <td>
                           <div class="d-flex justify-content-center">
                              <a href="{{ route('criteria.edit', $criterion->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                              <form action="{{ route('criteria.destroy', $criterion->id) }}" method="post">
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
               {{ $criteria->links() }}
            </div>
            @else
            <div class="alert alert-warning">
               <strong>No data found.</strong>
            </div>
            @endif
         </div>
      </div>
   </div>
</div>
@endsection('content')