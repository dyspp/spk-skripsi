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
            <!-- Name -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
               @error('name')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- Brand -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="brand">Brand</label>
               <input type="text" name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}">
               @error('brand')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- Price -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="price">Price (Rp)</label>
               <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
               @error('price')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <!-- Image -->
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
            <!-- Processor -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="processor">Processor</label>
               <input type="text" name="processor" id="processor" class="form-control @error('processor') is-invalid @enderror" value="{{ old('processor') }}">
               @error('processor')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- GPU -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="gpu">GPU</label>
               <input type="text" name="gpu" id="gpu" class="form-control @error('gpu') is-invalid @enderror" value="{{ old('gpu') }}">
               @error('gpu')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- RAM -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="ram">RAM (GB)</label>
               <input type="text" name="ram" id="ram" class="form-control @error('ram') is-invalid @enderror" value="{{ old('ram') }}">
               @error('ram')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <!-- Storage -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="storage">Storage</label>
               <input type="text" name="storage" id="storage" class="form-control @error('storage') is-invalid @enderror" value="{{ old('storage') }}">
               @error('storage')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- Display -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="display">Display</label>
               <input type="text" name="display" id="display" class="form-control @error('display') is-invalid @enderror" value="{{ old('display') }}">
               @error('display')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!--Unit_Weight -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="unit_weight">Unit Weight (Kg)</label>
               <input type="text" name="unit_weight" id="unit_weight" class="form-control @error('unit_weight') is-invalid @enderror" value="{{ old('unit_weight') }}">
               @error('unit_weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- Connectivity -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="connectivity">Connectivity</label>
               <input type="text" name="connectivity" id="connectivity" class="form-control @error('connectivity') is-invalid @enderror" value="{{ old('connectivity') }}">
               @error('connectivity')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <!-- Ports -->
            <div class="col-sm-12 col-lg-6 my-1">
               <label for="ports">Ports</label>
               <textarea name="ports" id="ports" cols="3" rows="3" class="form-control @error('ports') is-invalid @enderror">{{ old('ports') }}</textarea>
               @error('ports')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <!-- Features -->
            <div class="col-sm-12 col-lg-6 my-1">
               <label for="features">Features</label>
               <textarea name="features" id="features" cols="3" rows="3" class="form-control @error('features') is-invalid @enderror">{{ old('ports') }}</textarea>
               @error('features')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <!-- Link -->
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <label for="link">Official Website</label>
               <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}">
               @error('link')
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