@extends('admin.master')

@section('title', 'Criterion Scores')

@section('content')
<!-- Modal -->
<div class="modal modal-dy fade" id="scoresListModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div id="scoresList" class="modal-content">      
    </div>
  </div>
</div>
<!-- Form -->
<div class="row">
   <!-- Criterion Scores Statisic -->
   <div class="col-lg-6">
      <div class="card shadow-sm">
         <div class="card-body minimize-element-container">
            <div class="minimize-element-title">
               <h3>Criterion Scores Statistic</h3>
               <button id="showMinimizeElement" class="btn btn-purple">Show</button>
            </div>
            <hr class="hr-purple">
            <div class="table-responsive minimize-element">
               <table class="table text-nowrap">
                  <thead class="table-border-none">
                     <tr>
                        <th>No.</th>
                        <th>Criterion</th>
                        <th colspan="2">Total Scores</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($criteria as $criterion)
                     <tr>
                        <td>{{ $number++ }}</td>
                        <td>{{ $criterion->name }}</td>
                        <td>{{ $criterion->criterionScores->count() }}</td>
                        <td>
                           <button id="showScoresList-{{ $criterion->id }}" class="btn btn-sm btn-success" data-id="{{ $criterion->id }}" data-toggle="modal" data-target="#scoresListModal"><i class="fas fa-list-ol mr-2"></i>Details</button>
                        </td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Create Form -->
   <div class="col-lg-6 sticky-element">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Create Criterion Score Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('criterionscores.store') }}" method="POST">
            @csrf
               <!-- Criterion Input -->
               <div class="form-group">
                  <label for="criterion">Criterion</label>
                  <div>
                  <select name="criterion" id="criterion" class="custom-select @error('criterion') is-invalid @enderror">
                     <option disabled selected>Choose Criterion</option>
                     @foreach($criteria as $criterion)
                     <option value="{{ $criterion->id }}" {{ old('criterion') == $criterion->id ? 'selected' : '' }}>{{ $criterion->name }}</option>
                     @endforeach
                  </select>
                  @error('criterion')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
                  </div>
               </div>
               <!-- Description Input -->
               <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" cols="3" rows="3" placeholder="Ex: 4 GB (for Memory (RAM), Asus (from Brand), SSD (for Storage Type), etc.">{{ old('description') }}</textarea>
                  @error('description')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Score Input -->
               <div class="form-group">
                  <label for="score">Score</label>
                  <input type="text" name="score" id="score" class="form-control @error('score') is-invalid @enderror" value="{{ old('score') }}" placeholder="Ex: 1, 2, 3, etc.">
                  @error('score')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <div class="d-flex justify-content-end">
                  <button id="cancelButton" type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#modalCancel" data-url="{{ route('criterionscores.index') }}"><i class="fas fa-times mr-2"></i>Cancel</button>
                  <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Create</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Modal -->
   @include('admin.partials.modals.modal-cancel')
</div>
@endsection