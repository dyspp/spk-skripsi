@extends('admin.dashboards.master')

@section('title', 'Criterion Scores')

@section('content')
<!-- Button and Messages -->
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div class="ml-auto">
      <a href="{{ route('criterionscores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
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
                     <form action="{{ route('criterionscores.destroy', $criterionScore->id) }}" method="post">
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
@if($criterionScores->total() > $criterionScores->perPage())
<div class="d-flex justify-content-center mt-2">
   {{ $criterionScores->links() }}
</div>
@endif
@endsection