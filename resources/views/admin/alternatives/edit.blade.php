@extends('admin.dashboards.master')

@section('title', 'Alternatives')

@section('content')
<!-- Button -->
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('alternatives.index') }}" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternatives</a>
</div>
<!-- Edit Form -->
<div class="card shadow-sm">
   <div class="card-body">
      <h3>Update Alternative Form</h3>
      <hr class="hr-purple">
      <form action="{{ route('alternatives.update', $alternative->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
         <div class="form-row form-group form-group-custom">
            <!-- Name -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $alternative->name }}" placeholder="Ex: Vivobook S14 (S430FN), etc.">
               @error('name')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('name')) }}</strong>
               @enderror
            </div>
            <!-- Brand -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="brand">Brand</label>
               <input type="text" name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ $alternative->brand }}" placeholder="Ex: Asus, HP, Lenovo, etc.">
               @error('brand')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('brand')) }}</strong>
               @enderror
            </div>
            <!-- Price -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="price">Price (Rp)</label>
               <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ $alternative->price }}" placeholder="Ex: 8500000, etc.">
               @error('price')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('price')) }}</strong>
               @enderror
            </div>
         </div>
         <!-- Image -->
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
            <!-- Processor -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="processor">Processor</label>
               <input type="text" name="processor" id="processor" class="form-control @error('processor') is-invalid @enderror" value="{{ $alternative->processor }}" placeholder="Ex: Intel Core i3-8145U, 2.1 GHz dual-core, up to 3.9 GHz, etc.">
               @error('processor')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('processor')) }}</strong>
               @enderror
            </div>
            <!-- GPU -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="gpu">GPU</label>
               <input type="text" name="gpu" id="gpu" class="form-control @error('gpu') is-invalid @enderror" value="{{ $alternative->gpu }}" placeholder="Ex: Nvidia GeForce MX150 (2 GB), etc.">
               @error('gpu')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('gpu')) }}</strong>
               @enderror
            </div>
            <!-- RAM -->
            <div class="col-sm-12 col-lg-4 my-1">
               <label for="ram">RAM (GB)</label>
               <input type="text" name="ram" id="ram" class="form-control @error('ram') is-invalid @enderror" value="{{ $alternative->ram }}" placeholder="Ex: 4, 8, etc.">
               @error('ram')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('ram')) }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <!-- Storage -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="storage">Storage</label>
               <input type="text" name="storage" id="storage" class="form-control @error('storage') is-invalid @enderror" value="{{ $alternative->storage }}" placeholder="Ex: 512 GB PCIe SSD, etc.">
               @error('storage')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('storage')) }}</strong>
               @enderror
            </div>
            <!-- Display -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="display">Display</label>
               <input type="text" name="display" id="display" class="form-control @error('display') is-invalid @enderror"  value="{{ $alternative->display }}" placeholder="Ex: 14 inch / FHD / 1080p / 60 Hz, etc.">
               @error('display')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('display')) }}</strong>
               @enderror
            </div>
            <!-- Unit_Weight -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="unit_weight">Weight (Kg)</label>
               <input type="text" name="unit_weight" id="unit_weight" class="form-control @error('unit_weight') is-invalid @enderror" value="{{ $alternative->unit_weight }}" placeholder="Ex: 1,4, etc.">
               @error('unit_weight')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('unit_weight')) }}</strong>
               @enderror
            </div>
            <!-- Connectivity -->
            <div class="col-sm-12 col-lg-3 my-1">
               <label for="connectivity">Connectivity</label>
               <input type="text" name="connectivity" id="connectivity" class="form-control @error('connectivity') is-invalid @enderror" value="{{ $alternative->connectivity }}" placeholder="Ex: 1,4, etc.">
               @error('connectivity')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('connectivity')) }}</strong>
               @enderror
            </div>
         </div>
         <div class="form-row form-group form-group-custom">
            <!-- Ports -->
            <div class="col-sm-12 col-lg-6 my-1">
               <label for="ports">Ports</label>
               <textarea name="ports" id="ports" cols="3" rows="3" class="form-control @error('ports') is-invalid @enderror" placeholder="Ex: USB 3.1 C (x1) / USB  3.1 (x1) / USB 2.0 (x2) / HDMI /  Audio Jack / MicroSD Card Reader, etc.">{{ $alternative->ports }}</textarea>
               @error('ports')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('ports')) }}</strong>
               @enderror
            </div>
            <!-- Features -->
            <div class="col-sm-12 col-lg-6 my-1">
               <label for="features">Features</label>
               <textarea name="features" id="features" cols="3" rows="3" class="form-control @error('features') is-invalid @enderror" placeholder="Ex: HD Webcam / Backlit Keyboard (White) / Fingerprint Reader, etc">{{ $alternative->features }}</textarea>
               @error('features')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('features')) }}</strong>
               @enderror
            </div>
         </div>
         <!-- Link -->
         <div class="form-group form-group-custom">
            <div class="form-pd-x">
               <label for="link">Official Website</label>
               <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" value="{{ $alternative->link }}" placeholder="Ex: www.offical-website.com">
               @error('link')
               <strong class="invalid-feedback">{{ $message }}</strong>
               <strong class="invalid-feedback">{{ getOldValue(old('link')) }}</strong>
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