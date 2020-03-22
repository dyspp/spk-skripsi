@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<div class="row">
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
   <div class="col-lg-7">
      <div class="card shadow-sm form-scroll">
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
                  <select name="gpu_manufacturer" id="gpu_manufacturer" class="custom-select">
                     <option disabled selected>Choose GPU Manufacturer</option>
                     @foreach($gpuManufacturers as $gpuManufacturer)
                        <option value="{{ $gpuManufacturer->id }}">{{ $gpuManufacturer->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- GPU Class -->
               <div class="col-12 my-1">
                  <select name="gpu_class" id="gpu_class" class="custom-select">
                     <option disabled selected>Choose GPU Class</option>
                     @foreach($gpuClasses as $gpuClass)
                        <option value="{{ $gpuClass->id }}">{{ $gpuClass->description }}</option>
                     @endforeach
                  </select>
               </div>
               <!-- GPU Memory -->
               <div class="col-12 my-1">
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
               <div class="form-pd-x">
                  <label for="ram">Memory (RAM)</label>
                  <select name="ram" id="ram" class="custom-select">
                     <option disabled selected>Choose Memory (RAM)</option>
                     @foreach($rams as $ram)
                        <option value="{{ $ram->id }}">{{ $ram->description }}</option>
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