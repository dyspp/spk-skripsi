@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<div class="row">
   <!-- Alternative Details -->
   <div class="col-lg-6 col-md-6 sticky-element overflow-y-auto">
      <div class="card shadow-sm sticky-element">
         <div class="card-body">
            <h3>Alternative Details</h3>
            <hr class="hr-purple">
            @include('admin.partials.alternative-details')
         </div>
      </div>
   </div>
   <!-- Form -->
   <div class="col-lg-6 col-md-6">
      <div class="card shadow-sm">
         <div class="card-body">
            <h3>Edit Alternative Score Form</h3>
            <hr class="hr-purple">
            <form action="{{ route('alternativescores.update', $alternativeScore->id) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Alternative Input -->
            <div class="form-group form-group-custom">
               <h5>Alternative</h5>
               <div class="form-pd-x">
                  <input type="text" disabled value="{{ $alternative->name }}" class="form-control">
               </div>
            </div>
            <!-- Processor Input -->
            <div class="form-group form-row form-group-custom">
               <h5>Processor</h5>
               <hr>
               <!-- Processor Manufacturer Input -->
               <div class="col-12 my-1">
                  <label for="processor_manufacturer">Processor Manufacturer</label>
                  <select name="processor_manufacturer" id="processor_manufacturer" class="custom-select @error('processor_manufacturer') is-invalid @enderror">
                     <option disabled selected>Choose Processor Manufacturer</option>
                     @foreach($processorManufacturers as $processorManufacturer)
                     <option value="{{ $processorManufacturer->id }}" {{ setSelected($alternativeScore->processor_manufacturer, $processorManufacturer->id) }}>{{ $processorManufacturer->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_manufacturer')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor CLass Input -->
               <div class="col-12 my-1">
                  <label for="processor_class">Processor Class</label>
                  <select name="processor_class" id="processor_class" class="custom-select @error('processor_class') is-invalid @enderror">
                     <option disabled selected>Choose Processor Class</option>
                     @foreach($processorClasses as $processorClass)
                     <option value="{{ $processorClass->id }}" {{ setSelected($alternativeScore->processor_class, $processorClass->id) }}>{{ $processorClass->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_class')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor Base Speed Input -->
               <div class="col-12 my-1">
                  <label for="processor_base_speed">Processor Base Speed</label>
                  <select name="processor_base_speed" id="processor_base_speed" class="custom-select @error('processor_base_speed') is-invalid @enderror">
                     <option disabled selected>Choose Processor Base Speed</option>
                     @foreach($processorBaseSpeeds as $processorBaseSpeed)
                     <option value="{{ $processorBaseSpeed->id }}" {{ setSelected($alternativeScore->processor_base_speed, $processorBaseSpeed->id) }}>{{ $processorBaseSpeed->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_base_speed')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Processor Core Input -->
               <div class="col-12 my-1">
                  <label for="processor_core">Processor Core</label>
                  <select name="processor_core" id="processor_core" class="custom-select @error ('processor_core') is-invalid @enderror">
                     <option disabled selected>Choose Processor Core</option>
                     @foreach($processorCores as $processorCore)
                     <option value="{{ $processorCore->id }}" {{ setSelected($alternativeScore->processor_core, $processorCore->id) }}>{{ $processorCore->description }}</option>
                     @endforeach
                  </select>
                  @error('processor_core')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- GPU Input -->
            <div class="form-group form-row form-group-custom">
               <h5>GPU</h5>
               <hr>
               <!-- GPU Manufacturer Input -->
               <div class="col-12 my-1">
                  <label for="gpu_manufacturer">GPU Manufacturer</label>
                  <select name="gpu_manufacturer" id="gpu_manufacturer" class="custom-select @error('gpu_manufacturer') is-invalid @enderror">
                     <option disabled selected>Choose GPU Manufacturer</option>
                     @foreach($gpuManufacturers as $gpuManufacturer)
                     <option value="{{ $gpuManufacturer->id }}" {{ setSelected($alternativeScore->gpu_manufacturer, $gpuManufacturer->id) }}>{{ $gpuManufacturer->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_manufacturer')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- GPU Class Input -->
               <div class="col-12 my-1">
                  <label for="gpu_class">GPU Class</label>
                  <select name="gpu_class" id="gpu_class" class="custom-select @error('gpu_class') is-invalid @enderror">
                     <option disabled selected>Choose GPU Class</option>
                     @foreach($gpuClasses as $gpuClass)
                     <option value="{{ $gpuClass->id }}" {{ setSelected($alternativeScore->gpu_class, $gpuClass->id) }}>{{ $gpuClass->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_class')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- GPU Memory Input -->
               <div class="col-12 my-1">
                  <label for="gpu_memory">GPU Memory</label>
                  <select name="gpu_memory" id="gpu_memory" class="custom-select @error('gpu_memory') is-invalid @enderror">
                     <option disabled selected>Choose GPU Memory</option>
                     @foreach($gpuMemories as $gpuMemory)
                     <option value="{{ $gpuMemory->id }}" {{ setSelected($alternativeScore->gpu_memory, $gpuMemory->id) }}>{{ $gpuMemory->description }}</option>
                     @endforeach
                  </select>
                  @error('gpu_memory')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Memory (RAM) Input -->
            <div class="form-group form-group-custom">
               <h5>Memory (RAM)</h5>
               <div class="form-pd-x">
                  <select name="ram" id="ram" class="custom-select @error('ram') is-invalid @enderror">
                     <option disabled selected>Choose Memory (RAM)</option>
                     @foreach($rams as $ram)
                     <option value="{{ $ram->id }}" {{ setSelected($alternativeScore->ram, $ram->id) }}>{{ $ram->description }}</option>
                     @endforeach
                  </select>
                  @error('ram')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Storage Input -->
            <div class="form-group form-row form-group-custom">
               <h5>Storage</h5>
               <hr>
               <!-- Storage Type Input -->
               <div class="col-12 my-1">
                  <label for="storage_type">Storage Type</label>
                  <select name="storage_type" id="storage_type" class="custom-select @error('storage_type') is-invalid @enderror">
                     <option disabled selected>Choose Storage Type</option>
                     @foreach($storageTypes as $storageType)
                     <option value="{{ $storageType->id }}" {{ setSelected($alternativeScore->storage_type, $storageType->id) }}>{{ $storageType->description }}</option>
                     @endforeach
                  </select>
                  @error('storage_type')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Storage Size Input -->
               <div class="col-12 my-1">
                  <label for="storage_size">Storage Size</label>
                  <select name="storage_size" id="storage_size" class="custom-select @error('storage_size') is-invalid @enderror">
                     <option disabled selected>Choose Storage Size</option>
                     @foreach($storageSizes as $storageSize)
                     <option value="{{ $storageSize->id }}" {{ setSelected($alternativeScore->storage_size, $storageSize->id) }}>{{ $storageSize->description }}</option>
                     @endforeach
                  </select>
                  @error('storage_size')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Price Input -->
            <div class="form-group form-group-custom">
               <h5>Price</h5>
               <div class="form-pd-x">
                  <select name="price" id="price" class="custom-select @error('price') is-invalid @enderror" onfocus='this.size=3' onchange="this.size=1" onblur="this.size=1">
                     <option disabled selected>Choose Price</option>
                     @foreach($prices as $price)
                     <option value="{{ $price->id }}" {{ setSelected($alternativeScore->price, $price->id) }}>{{ $price->description }}</option>
                     @endforeach
                  </select>
                  @error('price')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Display Input -->
            <div class="form-group form-row form-group-custom">
               <h5>Display</h5>
               <hr>
               <!-- Display Size Input -->
               <div class="col-12 my-1">
                  <label for="display_size">Display Size</label>
                  <select name="display_size" id="display_size" class="custom-select @error('display_size') is-invalid @enderror">
                     <option disabled selected>Choose Display Size</option>
                     @foreach($displaySizes as $displaySize)
                     <option value="{{ $displaySize->id }}" {{ setSelected($alternativeScore->display_size, $displaySize->id) }}>{{ $displaySize->description }}</option>
                     @endforeach
                  </select>
                  @error('display_size')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Display Resolution Input -->
               <div class="col-12 my-1">
                  <label for="display_resolution">Display Resolution</label>
                  <select name="display_resolution" id="display_resolution" class="custom-select @error('display_resolution') is-invalid @enderror">
                     <option disabled selected>Choose Display Resolution</option>
                     @foreach($displayResolutions as $displayResolution)
                     <option value="{{ $displayResolution->id }}" {{ setSelected($alternativeScore->display_resolution, $displayResolution->id) }}>{{ $displayResolution->description }}</option>
                     @endforeach
                  </select>
                  @error('display_resolution')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
               <!-- Display Refresh Rate Input -->
               <div class="col-12 my-1">
                  <label for="display_refresh_rate">Display Refresh Rate</label>
                  <select name="display_refresh_rate" id="display_refresh_rate" class="custom-select @error('display_refresh_rate') is-invalid @enderror">
                     <option disabled selected>Choose Display Refresh Rate</option>
                     @foreach($displayRefreshRates as $displayRefreshRate)
                     <option value="{{ $displayRefreshRate->id }}" {{ setSelected($alternativeScore->display_refresh_rate, $displayRefreshRate->id) }}>{{ $displayRefreshRate->description }}</option>
                     @endforeach
                  </select>
                  @error('display_refresh_rate')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Brand Input -->
            <div class="form-group form-group-custom">
               <h5>Brand</h5>
               <div class="form-pd-x">
                  <select name="brand" id="brand" class="custom-select @error('brand') is-invalid @enderror">
                     <option disabled selected>Choose Brand</option>
                     @foreach($brands as $brand)
                     <option value="{{ $brand->id }}" {{ setSelected($alternativeScore->brand, $brand->id) }}>{{ $brand->description }}</option>
                     @endforeach
                  </select>
                  @error('brand')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Unit Weight Input -->
            <div class="form-group form-group-custom">
               <h5>Unit Weight</h5>
               <div class="form-pd-x">
                  <select name="unit_weight" id="unit_weight" class="custom-select @error('unit_weight') is-invalid @enderror">
                     <option disabled selected>Choose Unit Weight</option>
                     @foreach($unitWeights as $unitWeight)
                     <option value="{{ $unitWeight->id }}" {{ setSelected($alternativeScore->unit_weight, $unitWeight->id) }}>{{ $unitWeight->description }}</option>
                     @endforeach
                  </select>
                  @error('unit_weight')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Design Input -->
            <div class="form-group form-group-custom">
               <h5>Design</h5>
               <div class="form-pd-x">
                  <select name="design" id="design" class="custom-select @error('design') is-invalid @enderror">
                     <option disabled selected>Choose Design</option>
                     @foreach($designs as $design)
                     <option value="{{ $design->id }}" {{ setSelected($alternativeScore->design, $design->id) }}>{{ $design->description }}</option>
                     @endforeach
                  </select>
                  @error('design')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Feature Input -->
            <div class="form-group form-group-custom">
               <h5>Feature</h5>
               <div class="form-pd-x">
                  <select name="feature" id="feature" class="custom-select @error('feature') is-invalid @enderror">
                     <option disabled selected>Choose Feature</option>
                     @foreach($features as $feature)
                     <option value="{{ $feature->id }}" {{ setSelected($alternativeScore->feature, $feature->id) }}>{{ $feature->description }}</option>
                     @endforeach
                  </select>
                  @error('feature')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <!-- Backlit Keyboard Input -->
            <div class="form-group form-group-custom">
               <h5>Backlit Keyboard</h5>
               <div class="form-pd-x">
                  <select name="backlit_keyboard" id="backlit_keyboard" class="custom-select @error('backlit_keyboard') is-invalid @enderror">
                     <option disabled selected>Choose Backlit Keyboard</option>
                     @foreach($backlitKeyboards as $backlitKeyboard)
                     <option value="{{ $backlitKeyboard->id }}" {{ setSelected($alternativeScore->backlit_keyboard, $backlitKeyboard->id) }}>{{ $backlitKeyboard->description }}</option>
                     @endforeach
                  </select>
                  @error('backlit_keyboard')
                  <strong class="invalid-feedback">{{ $message }}</strong>
                  @enderror
               </div>
            </div>
            <div class="d-flex justify-content-end">
               <a href="{{ route('alternativescores.index') }}" onClick="return confirm('Your actions will be discarded. Continue?')" class="btn btn-danger mr-2"><i class="fas fa-times mr-2"></i>Cancel</a>
               <button class="btn btn-purple" type="submit"><i class="fas fa-check mr-2"></i>Update</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection