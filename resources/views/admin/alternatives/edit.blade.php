@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('alternatives.index') }}" onClick="return confirm('This action cannot be undone. Continue?')" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternatives</a>
</div>
<div class="card shadow-sm">
   <div class="card-body">
      <h3>Update Alternative Form</h3>
      <hr class="hr-purple">
      <form action="{{ route('alternatives.update', $alternative->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
         <div class="form-row form-group form-group-custom">
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $alternative->name }}">
               @error('name')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="brand">Brand</label>
               <input type="text" name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ $alternative->brand }}">
               @error('brand')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="price">Price (Rp)</label>
               <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ $alternative->price }}">
               @error('price')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <p>Image</p>
               <div class="row">
                  <div class="col-lg-6 my-1">
                     <img src="{{ asset('images/alternatives/'.$alternative->image) }}" alt="{{ $alternative->name }}" class="img-fluid img-thumbnail mx-auto d-block">
                  </div>
                  <div class="col-lg-6 my-1">
                     <div class="custom-file">
                        <input type="file" name="image" id="image" class="custom-file-input @error('image') is-invalid @enderror">
                        <label for="image" class="custom-file-label">Choose file</label>
                        @error('image')
                           <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="processor">Processor</label>
               <input type="text" name="processor" id="processor" class="form-control @error('processor') is-invalid @enderror" value="{{ $alternative->processor }}">
               @error('processor')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="gpu">GPU</label>
               <input type="text" name="gpu" id="gpu" class="form-control @error('gpu') is-invalid @enderror" value="{{ $alternative->gpu }}">
               @error('gpu')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="ram">RAM (GB)</label>
               <input type="text" name="ram" id="ram" class="form-control @error('ram') is-invalid @enderror" value="{{ $alternative->ram }}">
               @error('ram')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="storage">Storage</label>
               <input type="text" name="storage" id="storage" class="form-control @error('storage') is-invalid @enderror" value="{{ $alternative->storage }}">
               @error('storage')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="screen">Screen</label>
               <input type="text" name="screen" id="screen" class="form-control @error('screen') is-invalid @enderror"  value="{{ $alternative->screen }}">
               @error('screen')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="unit_weight">Weight (Kg)</label>
               <input type="text" name="unit_weight" id="unit_weight" class="form-control @error('unit_weight') is-invalid @enderror" value="{{ $alternative->unit_weight }}">
               @error('unit_weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <label for="features">Features</label>
               <textarea name="features" id="features" cols="3" rows="3" class="form-control @error('features') is-invalid @enderror">{{ $alternative->features }}</textarea>
               @error('features')
                  <strong class="invalid-feedback">{{ $message }}</strong>
               @enderror
            </div>
         </div>
         <div class="d-flex justify-content-end">
            <a href="{{ route('alternatives.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
            <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Update</button>
         </div>
      </form>
   </div>
</div>
@endsection