@extends('admin.dashboards.master')

@section('content')
<div class="row justify-content-center">
   <div class="col-md-10 col-lg-10">
      <div class="d-flex justify-content-end mb-2">
         <a href="{{ route('criteria.index') }}" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Criteria</a>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Create Criterion Form</h3>
            <hr class="hr-purple">
            <form method="POST" action="{{ route('criteria.store') }}">
               @csrf               
               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Ex: Price, Processor, etc.">
                  @error('name')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="attribute">Attribute:</label>
                  <div class="custom-control custom-radio">
                     <input type="radio" name="attribute" id="cost" class="custom-control-input" value="0" {{ (old('attribute') == 0) ? 'checked' : '' }}>
                     <label for="cost" class="custom-control-label">Cost</label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input type="radio" name="attribute" id="benefit" class="custom-control-input" value="1" {{ (old('attribute') == 1) ? 'checked' : '' }}>
                     <label for="benefit" class="custom-control-label">Benefit</label>
                  </div>
                  @error('attribute')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="weight">Weight:</label>
                  <input type="text" name="weight" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}" placeholder="Between 0 and 1">
                  @error('weight')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <div class="d-flex justify-content-end">
                  <a href="{{ route('criteria.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
                  <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Create</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection('content')