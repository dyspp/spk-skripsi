@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('alternatives.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternatives</a>
</div>
<div class="card shadow-sm">
   <div class="card-body">
      <h3>Add Alternative Form</h3>
      <hr class="hr-purple">
      <form action="{{ route('alternatives.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
         <div class="form-row form-group form-group-custom">
            <div class="col">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
               @error('name')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="brand">Brand</label>
               <input type="text" name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror">
               @error('brand')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="price">Price (Rp)</label>
               <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
               @error('price')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <p>Image</p>
               <div class="custom-file">
                  <input type="file" name="image" id="image" class="custom-file-input @error('image') is-invalid @enderror">
                  <label for="image" class="custom-file-label">Choose file</label>
                  @error('image')
                     <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col">
               <label for="processor">Processor</label>
               <input type="text" name="processor" id="processor" class="form-control @error('processor') is-invalid @enderror">
               @error('processor')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="gpu">GPU</label>
               <input type="text" name="gpu" id="gpu" class="form-control @error('gpu') is-invalid @enderror">
               @error('gpu')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="ram">RAM (GB)</label>
               <input type="text" name="ram" id="ram" class="form-control @error('ram') is-invalid @enderror">
               @error('ram')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col">
               <label for="storage">Storage</label>
               <input type="text" name="storage" id="storage" class="form-control @error('storage') is-invalid @enderror">
               @error('storage')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="screen">Screen</label>
               <input type="text" name="screen" id="screen" class="form-control @error('screen') is-invalid @enderror">
               @error('screen')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col">
               <label for="unit_weight">Weight (Kg)</label>
               <input type="text" name="unit_weight" id="unit_weight" class="form-control @error('unit_weight') is-invalid @enderror">
               @error('unit_weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <label for="features">Features</label>
               <textarea name="features" id="features" cols="3" rows="3" class="form-control @error('features') is-invalid @enderror"></textarea>
               @error('features')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="d-flex justify-content-end">
            <a href="{{ route('alternatives.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
            <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Add</button>
         </div>
      </form>
   </div>
</div>
@endsection