@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<!-- Button -->
<div class="d-flex justify-content-end mb-2">
   <a href="{{ route('alternativescores.index') }}" class="btn btn-purple"><li class="fas fa-home mr-2"></li>Alternative Scores</a>
</div>
<!-- Create Form -->
<div class="row">
   <!-- Alternative Details -->
   <div class="col-lg-6 col-md-6 sticky-element overflow-y-auto">
      <div class="card shadow-sm">
         <div class="card-body">            
            <h3>Alternative Details</h3>
            <hr class="hr-purple">
            <div id="alternativeDetails"></div>
         </div>
      </div>
   </div>
   <!-- Form -->
   <div class="col-lg-6 col-md-6">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Add Alternative Score Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('alternativescores.store') }}" method="POST">
            @csrf
            <!-- Alternative -->
            <div class="form-group form-group-custom">
               <h5>Alternative</h5>
               <div class="form-pd-x">
                  <select name="alternative_id" id="alternative_id" class="custom-select @error('alternative_id') is-invalid @enderror">
                     <option disabled selected>Choose Alternative</option>
                     <option value="10">test</option>
                     @foreach($alternatives as $alternative)
                     <option value="{{ $alternative->id }}" {{ old('alternative_id') == $alternative->id ? 'selected' : ''  }}>{{ $alternative->name }}</option>
                     @endforeach
                  </select>
                  @error('alternative_id')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Processor -->
            <div class="form-group form-row form-group-custom">
               <h5>Processor</h5>
               <hr>
               <!-- Processor Manufacturer -->
               <div class="col-12 my-1">
                  <label for="processor_manufacturer">Processor Manufacturer</label>
                  <select name="processor_manufacturer" id="processor_manufacturer" class="custom-select @error('processor_manufacturer') is-invalid @enderror">
                     <option disabled selected>Choose Processor Manufacturer</option>
                     @foreach($processorManufacturers as $processorManufacturer)
                     <option value="{{ $processorManufacturer->id }}" {{ old('processor_manufacturer') == $processorManufacturer->id ? 'selected' : '' }}>{{ $processorManufacturer->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_manufacturer')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor CLass -->
               <div class="col-12 my-1">
                  <label for="processor_class">Processor Class</label>
                  <select name="processor_class" id="processor_class" class="custom-select @error('processor_class') is-invalid @enderror">
                     <option disabled selected>Choose Processor Class</option>
                     @foreach($processorClasses as $processorClass)
                     <option value="{{ $processorClass->id }}" {{ old('processor_class') == $processorClass->id ? 'selected' : '' }}>{{ $processorClass->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_class')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor Base Speed -->
               <div class="col-12 my-1">
                  <label for="processor_base_speed">Processor Base Speed</label>
                  <select name="processor_base_speed" id="processor_base_speed" class="custom-select @error('processor_base_speed') is-invalid @enderror">
                     <option disabled selected>Choose Processor Base Speed</option>
                     @foreach($processorBaseSpeeds as $processorBaseSpeed)
                     <option value="{{ $processorBaseSpeed->id }}" {{ old('processor_base_speed') == $processorBaseSpeed->id ? 'selected' : '' }}>{{ $processorBaseSpeed->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_base_speed')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor Core -->
               <div class="col-12 my-1">
                  <label for="processor_core">Processor Core</label>
                  <select name="processor_core" id="processor_core" class="custom-select @error ('processor_core') is-invalid @enderror">
                     <option disabled selected>Choose Processor Core</option>
                     @foreach($processorCores as $processorCore)
                     <option value="{{ $processorCore->id }}" {{ old('processor_core') == $processorCore->id ? 'selected' : '' }}>{{ $processorCore->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_core')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- GPU -->
            <div class="form-group form-row form-group-custom">
               <h5>GPU</h5>
               <hr>
               <!-- GPU Manufacturer -->
               <div class="col-12 my-1">
                  <label for="gpu_manufacturer">GPU Manufacturer</label>
                  <select name="gpu_manufacturer" id="gpu_manufacturer" class="custom-select @error('gpu_manufacturer') is-invalid @enderror">
                     <option disabled selected>Choose GPU Manufacturer</option>
                     @foreach($gpuManufacturers as $gpuManufacturer)
                     <option value="{{ $gpuManufacturer->id }}" {{ old('gpu_manufacturer') == $gpuManufacturer->id ? 'selected' : '' }}>{{ $gpuManufacturer->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_manufacturer')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- GPU Class -->
               <div class="col-12 my-1">
                  <label for="gpu_class">GPU Class</label>
                  <select name="gpu_class" id="gpu_class" class="custom-select @error('gpu_class') is-invalid @enderror">
                     <option disabled selected>Choose GPU Class</option>
                     @foreach($gpuClasses as $gpuClass)
                     <option value="{{ $gpuClass->id }}" {{ old('gpu_class') == $gpuClass->id ? 'selected' : '' }}>{{ $gpuClass->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_class')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- GPU Memory -->
               <div class="col-12 my-1">
                  <label for="gpu_memory">GPU Memory</label>
                  <select name="gpu_memory" id="gpu_memory" class="custom-select @error('gpu_memory') is-invalid @enderror">
                     <option disabled selected>Choose GPU Memory</option>
                     @foreach($gpuMemories as $gpuMemory)
                     <option value="{{ $gpuMemory->id }}" {{ old('gpu_memory') == $gpuMemory->id ? 'selected' : '' }}>{{ $gpuMemory->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_memory')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Memory (RAM) -->
            <div class="form-group form-group-custom">
               <h5>Memory (RAM)</h5>
               <div class="form-pd-x">
                  <select name="ram" id="ram" class="custom-select @error('ram') is-invalid @enderror">
                     <option disabled selected>Choose Memory (RAM)</option>
                     @foreach($rams as $ram)
                     <option value="{{ $ram->id }}" {{ old('ram') == $ram->id ? 'selected' : '' }}>{{ $ram->description }}</option>
                     @endforeach
                  </select>
                  @error('ram')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Storage -->
            <div class="form-group form-row form-group-custom">
               <h5>Storage</h5>
               <hr>
               <!-- Storage Type -->
               <div class="col-12 my-1">
                  <label for="storage_type">Storage Type</label>
                  <select name="storage_type" id="storage_type" class="custom-select @error('storage_type') is-invalid @enderror">
                     <option disabled selected>Choose Storage Type</option>
                     @foreach($storageTypes as $storageType)
                     <option value="{{ $storageType->id }}" {{ old('storage_type') == $storageType->id ? 'selected' : '' }}>{{ $storageType->description }}</option>
                     @endforeach
                  </select>
                  @error('storage_type')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Storage Size -->
               <div class="col-12 my-1">
                  <label for="storage_size">Storage Size</label>
                  <select name="storage_size" id="storage_size" class="custom-select @error('storage_size') is-invalid @enderror">
                     <option disabled selected>Choose Storage Size</option>
                     @foreach($storageSizes as $storageSize)
                     <option value="{{ $storageSize->id }}" {{ old('storage_size') == $storageSize->id ? 'selected' : '' }}>{{ $storageSize->description }}</option>
                     @endforeach
                  </select>
                  @error('storage_size')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Price -->
            <div class="form-group form-group-custom">
               <h5>Price</h5>
               <div class="form-pd-x">
                  <select name="price" id="price" class="custom-select @error('price') is-invalid @enderror" onfocus='this.size=3' onchange="this.size=1" onblur="this.size=1">
                     <option disabled selected>Choose Price</option>
                     @foreach($prices as $price)
                     <option value="{{ $price->id }}" {{ old('price') == $price->id ? 'selected' : '' }}>{{ $price->description }}</option>
                     @endforeach
                  </select>
                  @error('price')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Display -->
            <div class="form-group form-row form-group-custom">
               <h5>Display</h5>
               <hr>
               <!-- Display Size -->
               <div class="col-12 my-1">
                  <label for="display_size">Display Size</label>
                  <select name="display_size" id="display_size" class="custom-select @error('display_size') is-invalid @enderror">
                     <option disabled selected>Choose Display Size</option>
                     @foreach($displaySizes as $displaySize)
                     <option value="{{ $displaySize->id }}" {{ old('display_size') == $displaySize->id ? 'selected' : '' }}>{{ $displaySize->description }}</option>
                     @endforeach
                  </select>
                  @error('display_size')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Display Resolution -->
               <div class="col-12 my-1">
                  <label for="display_resolution">Display Resolution</label>
                  <select name="display_resolution" id="display_resolution" class="custom-select @error('display_resolution') is-invalid @enderror">
                     <option disabled selected>Choose Display Resolution</option>
                     @foreach($displayResolutions as $displayResolution)
                     <option value="{{ $displayResolution->id }}" {{ old('display_resolution') == $displayResolution->id ? 'selected' : '' }}>{{ $displayResolution->description }}</option>
                     @endforeach
                  </select>
                  @error('display_resolution')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Display Refresh Rate -->
               <div class="col-12 my-1">
                  <label for="display_refresh_rate">Display Refresh Rate</label>
                  <select name="display_refresh_rate" id="display_refresh_rate" class="custom-select @error('display_refresh_rate') is-invalid @enderror">
                     <option disabled selected>Choose Display Refresh Rate</option>
                     @foreach($displayRefreshRates as $displayRefreshRate)
                     <option value="{{ $displayRefreshRate->id }}" {{ old('display_refresh_rate') == $displayRefreshRate->id ? 'selected' : '' }}>{{ $displayRefreshRate->description }}</option>
                     @endforeach
                  </select>
                  @error('display_refresh_rate')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Brand -->
            <div class="form-group form-group-custom">
               <h5>Brand</h5>
               <div class="form-pd-x">
                  <select name="brand" id="brand" class="custom-select @error('brand') is-invalid @enderror">
                     <option disabled selected>Choose Brand</option>
                     @foreach($brands as $brand)
                     <option value="{{ $brand->id }}" {{ old('brand') == $brand->id ? 'selected' : '' }}>{{ $brand->description }}</option>
                     @endforeach
                  </select>
                  @error('brand')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Unit Weight -->
            <div class="form-group form-group-custom">
               <h5>Unit Weight</h5>
               <div class="form-pd-x">
                  <select name="unit_weight" id="unit_weight" class="custom-select @error('unit_weight') is-invalid @enderror">
                     <option disabled selected>Choose Unit Weight</option>
                     @foreach($unitWeights as $unitWeight)
                     <option value="{{ $unitWeight->id }}" {{ old('unit_weight') == $unitWeight->id ? 'selected' : '' }}>{{ $unitWeight->description }}</option>
                     @endforeach
                  </select>
                  @error('unit_weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Design -->
            <div class="form-group form-group-custom">
               <h5>Design</h5>
               <div class="form-pd-x">
                  <select name="design" id="design" class="custom-select @error('design') is-invalid @enderror">
                     <option disabled selected>Choose Design</option>
                     @foreach($designs as $design)
                     <option value="{{ $design->id }}" {{ old('design') == $design->id ? 'selected' : '' }}>{{ $design->description }}</option>
                     @endforeach
                  </select>
                  @error('design')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Feature -->
            <div class="form-group form-group-custom">
               <h5>Feature</h5>
               <div class="form-pd-x">
                  <select name="feature" id="feature" class="custom-select @error('feature') is-invalid @enderror">
                     <option disabled selected>Choose Feature</option>
                     @foreach($features as $feature)
                     <option value="{{ $feature->id }}" {{ old('feature') == $feature->id ? 'selected' : '' }}>{{ $feature->description }}</option>
                     @endforeach
                  </select>
                  @error('feature')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Backlit Keyboard -->
            <div class="form-group form-group-custom">
               <h5>Backlit Keyboard</h5>
               <div class="form-pd-x">
                  <select name="backlit_keyboard" id="backlit_keyboard" class="custom-select @error('backlit_keyboard') is-invalid @enderror">
                     <option disabled selected>Choose Backlit Keyboard</option>
                     @foreach($backlitKeyboards as $backlitKeyboard)
                     <option value="{{ $backlitKeyboard->id }}" {{ old('backlit_keyboard') == $backlitKeyboard->id ? 'selected' : '' }}>{{ $backlitKeyboard->description }}</option>
                     @endforeach
                  </select>
                  @error('backlit_keyboard')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <div class="d-flex justify-content-end">
               <a href="{{ route('alternativescores.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
               <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Add</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection