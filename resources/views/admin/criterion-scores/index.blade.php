@extends('admin.dashboards.master')

@section('title', 'Criterion Scores')

@section('content')
<div class="row justify-content-center">
   <div class="col-lg-10 col-md-10">
      <div class="d-flex mb-2">
         <div class="mr-auto">
            @include('admin.partials.alert-messages')
         </div>
         <div>
            <a href="{{ route('criterionscores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            @if ($cScores->isNotEmpty())
            <h3>Criterion Scores Data</h3>
            <hr class="hr-purple">
            <div class="table-responsive">
               <table class="table table-hover">
                  <thead class="table-border-none">
                     <tr>
                        <th class="w-5p">No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Score</th>
                        <th class="w-15p">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($cScores as $index => $cScore)
                     <tr>
                        <td>{{ $cScores->firstItem() + $index }}</td>
                        <td>{{ $cScore->criterion->name }}</td>
                        <td>{{ $cScore->description }}</td>
                        <td>{{ $cScore->score }}</td>
                        <td>
                           <div class="d-flex justify-content-center">
                              <a href="{{ route('criterionscores.edit', $cScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                              <form action="{{ route('criterionscores.destroy', $cScore->id) }}" method="post">
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
               {{ $cScores->links() }}
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
@endsection