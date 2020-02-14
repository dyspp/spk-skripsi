@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('criteria.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternatives</a>
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
               <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col">
               <label for="brand">Brand</label>
               <input type="text" name="brand" id="brand" class="form-control">
            </div>
            <div class="col">
               <label for="price">Price (Rp)</label>
               <input type="text" name="price" id="price" class="form-control">
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
            <p>Image</p>
            <div class="custom-file">
               <input type="file" name="image" id="image" class="custom-file-input">
               <label for="image" class="custom-file-label">Choose file</label>
            </div>
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col">
               <label for="processor">Processor</label>
               <input type="text" name="processor" id="processor" class="form-control">
            </div>
            <div class="col">
               <label for="gpu">GPU</label>
               <input type="text" name="gpu" id="gpu" class="form-control">
            </div>
            <div class="col">
               <label for="ram">RAM</label>
               <input type="text" name="ram" id="ram" class="form-control">
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <div class="col">
               <label for="storage">Storage</label>
               <input type="text" name="storage" id="storage" class="form-control">
            </div>
            <div class="col">
               <label for="screen">Screen</label>
               <input type="text" name="screen" id="screen" class="form-control">
            </div>
            <div class="col">
               <label for="unit_weight">Weight (Kg)</label>
               <input type="text" name="unit_weight" id="unit_weight" class="form-control">
            </div>
         </div>
         <div class="form-group form-group-custom">
            <div class="form-pd-x">

               <label for="features">Features</label>
               <textarea name="features" id="features" cols="3" rows="3" class="form-control"></textarea>
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