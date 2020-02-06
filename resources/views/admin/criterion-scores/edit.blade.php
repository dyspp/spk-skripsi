@extends('admin.dashboards.master')

@section('title', 'Criterion Score')

@section('content')
<div class="row justify-content-center">
   <div class="col-lg-10 col-md-10">
      <div class="d-flex justify-content-end mb-2">
         <a href="{{ route('criterionscores.index') }}" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Criterion Scores</a>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Edit Criterion Score Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('criterionscores.update', $cScore->id) }}" method="POST">
               @csrf
               @method('PUT')
               <div class="form-group">
                  <label for="criterion">Criterion</label>
                  <div>
                  <select name="criterion" id="criterion" class="custom-select @error('criterion') is-invalid @enderror">
                     <option disabled selected>Choose Criterion</option>
                     @foreach($criteria as $criterion)
                        <option value="{{ $criterion->id }}" {{ $cScore->criterion_id == $criterion->id ? 'selected' : '' }}>{{ $criterion->name }}</option>
                     @endforeach
                  </select>
                  @error('criterion')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
                  </div>
               </div>
               <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" cols="3" rows="3">{{ $cScore->description }}</textarea>
                  @error('description')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                     <strong class="invalid-feedback">Your input was {{ getOldValue(old('description')) }}.</strong>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="score">Score</label>
                  <input type="text" name="score" id="score" class="form-control @error('score') is-invalid @enderror" value="{{ $cScore->score }}">
                  @error('score')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                     <strong class="invalid-feedback">Your input was {{ getOldValue(old('score')) }}.</strong>
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