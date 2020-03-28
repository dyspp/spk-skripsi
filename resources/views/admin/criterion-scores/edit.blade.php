@extends('admin.dashboards.master')

@section('title', 'Criterion Score')

@section('content')
<!-- Button -->
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('criterionscores.index') }}" onClick="return confirm('This action cannot be undone. Continue?')" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Criterion Scores</a>
</div>
<!-- Form -->
<div class="row">
   <!-- Criterion Scores List -->
   <div class="col-lg-6 col-md-6 my-1">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>{{ $criterionScore->criterion->name }} Scores</h3>
            <hr class="hr-purple">
            <div class="table-responsive">
               <table class="table">
                  <thead class="table-border-none">
                     <tr>
                        <th>No</th>
                        <th>Description</th>
                        <th>Score</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($allScores as $score)
                     <tr class="{{ $score->id == $criterionScore->id ? 'font-italic table-border-y table-border-y-purple' : '' }}">
                        <td>{{ $number++ }}</td>
                        <td>
                        @if($score->id == $criterionScore->id)
                           {{ $score->description }}
                        @else
                           <a href="{{ route('criterionscores.edit', $score->id) }}" onClick="return confirm('This action cannot be undone. Continue?')">                                 
                              {{ $score->description }}
                           </a>
                        @endif
                        </td>
                        <td>{{ $score->score }}</td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Edit Form -->
   <div class="col-lg-6 col-md-6 my-1">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Edit Criterion Score Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('criterionscores.update', $criterionScore->id) }}" method="POST">
            @csrf
            @method('PUT')
               <!-- Criterion Input-->
               <div class="form-group">
                  <label for="criterion">Criterion</label>
                  <div>
                  <select name="criterion" id="criterion" class="custom-select @error('criterion') is-invalid @enderror">
                     <option disabled selected>Choose Criterion</option>
                     @foreach($criteria as $criterion)
                     <option value="{{ $criterion->id }}" {{ $criterionScore->criterion_id == $criterion->id ? 'selected' : '' }}>{{ $criterion->name }}</option>
                     @endforeach
                  </select>
                  @error('criterion')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
                  </div>
               </div>
               <!-- Description Input-->
               <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" cols="3" rows="3" placeholder="Ex: 4 GB (for Memory (RAM), Asus (from Brand), SSD (for Storage Type), etc.">{{ $criterionScore->description }}</textarea>
                  @error('description')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  <strong class="invalid-feedback">{{ getOldValue(old('description')) }}</strong>
                  @enderror
               </div>
               <!-- Score Input-->
               <div class="form-group">
                  <label for="score">Score</label>
                  <input type="text" name="score" id="score" class="form-control @error('score') is-invalid @enderror" value="{{ $criterionScore->score }}" placeholder="Ex: 1, 2, 3, etc.">
                  @error('score')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  <strong class="invalid-feedback">{{ getOldValue(old('score')) }}</strong>
                  @enderror
               </div>
               <div class="d-flex justify-content-end">
                  <a href="{{ route('criterionscores.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
                  <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection