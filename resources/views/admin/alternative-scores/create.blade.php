@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<div class="row">
   <!-- Alternative Details -->
   <div class="col-lg-5 sticky">
      <div class="card shadow-sm sticky sticky-element">
         <div class="card-body">
            <h3>Alternative Details</h3>
            <hr class="hr-purple">
            <i class="fas fa-spin fa-circle-notch" id="load"></i>
            <ul id="alternative-details">
            </ul>
         </div>
      </div>
   </div>
   <!-- Form -->
   <div class="col-lg-7">
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
                  <select name="alternative" id="alternative" class="custom-select">
                     <option disabled selected>Choose Alternative</option>
                     @foreach($alternatives as $alternative)
                        <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Processor -->
            <div class="form-group form-row form-group-custom">
               <h5>Processor</h5>
               <hr>
               <!-- Processor Manufacturer -->
               <div class="col-12 my-1">
                  <label for="processor_manufacturer">Processor Manufacturer</label>
                  <select name="processor_manufacturer" id="processor_manufacturer" class="custom-select">
                     <option disabled selected>Choose Processor Manufacturer</option>
                     @foreach($processorManufacturers as $processorManufacturer)
                        <option value="{{ $processorManufacturer->id }}">{{ $processorManufacturer->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Processor CLass -->
               <div class="col-12 my-1">
                  <label for="processor_class">Processor Class</label>
                  <select name="processor_class" id="processor_class" class="custom-select">
                     <option disabled selected>Choose Processor Class</option>
                     @foreach($processorClasses as $processorClass)
                        <option value="{{ $processorClass->id }}">{{ $processorClass->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Processor Base Speed -->
               <div class="col-12 my-1">
                  <label for="processor_base_speed">Processor Base Speed</label>
                  <select name="processor_base_speed" id="processor_base_speed" class="custom-select">
                     <option disabled selected>Choose Processor Base Speed</option>
                     @foreach($processorBaseSpeeds as $processorBaseSpeed)
                        <option value="{{ $processorBaseSpeed->id }}">{{ $processorBaseSpeed->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Processor Core -->
               <div class="col-12 my-1">
                  <label for="processor_core">Processor Core</label>
                  <select name="processor_core" id="processor_core" class="custom-select">
                     <option disabled selected>Choose Processor Core</option>
                     @foreach($processorCores as $processorCore)
                        <option value="{{ $processorCore->id }}">{{ $processorCore->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- GPU -->
            <div class="form-group form-row form-group-custom">
               <h5>GPU</h5>
               <hr>
               <!-- GPU Manufacturer -->
               <div class="col-12 my-1">
                  <label for="gpu_manufacturer"></label>
                  <select name="gpu_manufacturer" id="gpu_manufacturer" class="custom-select">
                     <option disabled selected>Choose GPU Manufacturer</option>
                     @foreach($gpuManufacturers as $gpuManufacturer)
                        <option value="{{ $gpuManufacturer->id }}">{{ $gpuManufacturer->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- GPU Class -->
               <div class="col-12 my-1">
                  <label for="gpu_class"></label>
                  <select name="gpu_class" id="gpu_class" class="custom-select">
                     <option disabled selected>Choose GPU Class</option>
                     @foreach($gpuClasses as $gpuClass)
                        <option value="{{ $gpuClass->id }}">{{ $gpuClass->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- GPU Memory -->
               <div class="col-12 my-1">
                  <label for="gpu_memory"></label>
                  <select name="gpu_memory" id="gpu_memory" class="custom-select">
                     <option disabled selected>Choose GPU Memory</option>
                     @foreach($gpuMemories as $gpuMemory)
                        <option value="{{ $gpuMemory->id }}">{{ $gpuMemory->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Memory (RAM) -->
            <div class="form-group form-group-custom">
               <h5>Memory (RAM)</h5>
               <div class="form-pd-x">
                  <select name="ram" id="ram" class="custom-select">
                     <option disabled selected>Choose Memory (RAM)</option>
                     @foreach($rams as $ram)
                        <option value="{{ $ram->id }}">{{ $ram->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Storage -->
            <div class="form-group form-row form-group-custom">
               <h5>Storage</h5>
               <hr>
               <!-- Storage Type -->
               <div class="col-12 my-1">
                  <label for="storage_type">Storage Type</label>
                  <select name="storage_type" id="storage_type" class="custom-select">
                     <option disabled selected>Choose Storage Type</option>
                     @foreach($storageTypes as $storageType)
                        <option value="{{ $storageType->id }}">{{ $storageType->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Storage Size -->
               <div class="col-12 my-1">
                  <label for="storage_size">Storage Size</label>
                  <select name="storage_size" id="storage_size" class="custom-select">
                     <option disabled selected>Choose Storage Size</option>
                     @foreach($storageSizes as $storageSize)
                        <option value="{{ $storageSize->id }}">{{ $storageSize->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Price -->
            <div class="form-group form-group-custom">
               <h5>Price</h5>
               <div class="form-pd-x">
                  <select name="price" id="price" class="custom-select" onfocus='this.size=3' onchange="this.size=1" onblur="this.size=1">
                     <option disabled selected>Choose Price</option>
                     @foreach($prices as $price)
                        <option value="{{ $price->id }}">{{ $price->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Display -->
            <div class="form-group form-row form-group-custom">
               <h5>Display</h5>
               <hr>
               <!-- Display Size -->
               <div class="col-12 my-1">
                  <label for="display_size">Display Size</label>
                  <select name="display_size" id="display_size" class="custom-select">
                     <option disabled selected>Choose Display Size</option>
                     @foreach($displaySizes as $displaySize)
                        <option value="{{ $displaySize->id }}">{{ $displaySize->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Display Resolution -->
               <div class="col-12 my-1">
                  <label for="display_resolution">Display Resolution</label>
                  <select name="display_resolution" id="display_resolution" class="custom-select">
                     <option disabled selected>Choose Display Resolution</option>
                     @foreach($displayResolutions as $displayResolution)
                        <option value="{{ $displayResolution->id }}">{{ $displayResolution->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- Display Refresh Rate -->
               <div class="col-12 my-1">
                  <label for="display_refresh_rate">Display Refresh Rate</label>
                  <select name="display_refresh_rate" id="display_refresh_rate" class="custom-select">
                     <option disabled selected>Choose Display Refresh Rate</option>
                     @foreach($displayRefreshRates as $displayRefreshRate)
                        <option value="{{ $displayRefreshRate->id }}">{{ $displayRefreshRate->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Brand -->
            <div class="form-group form-group-custom">
               <h5>Brand</h5>
               <div class="form-pd-x">
                  <select name="brand" id="brand" class="custom-select">
                     <option disabled selected>Choose Brand</option>
                     @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Unit Weight -->
            <div class="form-group form-group-custom">
               <h5>Unit Weight</h5>
               <div class="form-pd-x">
                  <select name="unit_weight" id="unit_weight" class="custom-select">
                     <option disabled selected>Choose Unit Weight</option>
                     @foreach($unitWeights as $unitWeight)
                        <option value="{{ $unitWeight->id }}">{{ $unitWeight->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Design -->
            <div class="form-group form-group-custom">
               <h5>Design</h5>
               <div class="form-pd-x">
                  <select name="design" id="design" class="custom-select">
                     <option disabled selected>Choose Design</option>
                     @foreach($designs as $design)
                        <option value="{{ $design->id }}">{{ $design->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Feature -->
            <div class="form-group form-group-custom">
               <h5>Feature</h5>
               <div class="form-pd-x">
                  <select name="feature" id="feature" class="custom-select">
                     <option disabled selected>Choose Feature</option>
                     @foreach($features as $feature)
                        <option value="{{ $feature->id }}">{{ $feature->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- Backlit Keyboard -->
            <div class="form-group form-group-custom">
               <h5>Backlit Keyboard</h5>
               <div class="form-pd-x">
                  <select name="backlit_keyboard" id="backlit_keyboard" class="custom-select">
                     <option disabled selected>Choose Backlit Keyboard</option>
                     @foreach($backlitKeyboards as $backlitKeyboard)
                        <option value="{{ $backlitKeyboard->id }}">{{ $backlitKeyboard->description }}</option>
                     @endforeach
                  </select>
               </div>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection