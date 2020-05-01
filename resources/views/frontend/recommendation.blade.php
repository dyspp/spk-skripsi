@extends('frontend.master')

@section('title', 'Recommendation')

@section('content')
<div class="row">
   <div id="categoryWrapper" class="col-lg-4 mt-3">
      <div class="card shadow-sm">
         <div class="card-body">
            <!-- Price -->
            <div class="form-group">
               <label for="price"><i class="fas fa-money-bill-wave mr-2"></i>Price</label>
               <select name="price" id="price" class="custom-select">
                  <option selected value="">All</option>
                  @foreach($prices as $price)
                  <option value="{{ $price->id }}">{{ $price->description }}</option>
                  @endforeach
               </select>
            </div>
            <!-- Processor Classes -->
            <div class="form-group">
               <label for="processorClass"><i class="fas fa-microchip mr-2"></i>Processor</label>
               <select name="processorClass" id="processorClass" class="custom-select">
                  <option selected value="">All</option>
                  @foreach($processorClasses as $processorClass)
                  <option value="{{ $processorClass->id }}">{{ $processorClass->description }}</option>
                  @endforeach
               </select>
            </div>
            <!-- Memory (RAM)  -->
            <div class="form-group">
               <label for="ram"><i class="fas fa-memory mr-2"></i>Memory (RAM)</label>
               <select name="ram" id="ram" class="custom-select">
                  <option selected value="">All</option>
                  @foreach($rams as $ram)
                  <option value="{{ $ram->id }}">{{ $ram->description }}</option>
                  @endforeach
               </select>
            </div>
            <!--  GPU  -->
            <div class="form-group">
               <label for="gpuClass"><i class="fas fa-gamepad mr-2"></i>GPU</label>
               <select name="gpuClass" id="gpuClass" class="custom-select">
                  <option selected value="">All</option>
                  @foreach($gpuClasses as $gpuClass)
                  <option value="{{ $gpuClass->id }}">{{ $gpuClass->description }}</option>
                  @endforeach
               </select>
            </div>
            <!-- Storage Type  -->
            <div class="form-group">
               <label for="storageType"><i class="fas fa-hdd mr-2"></i>Storage Type</label>
               <select name="storageType" id="storageType" class="custom-select">
                  <option selected value="">All</option>
                  @foreach($storageTypes as $storageType)
                  <option value="{{ $storageType->id }}">{{ $storageType->description }}</option>
                  @endforeach
               </select>
            </div>
            <button id="calculateButton" type="button" class="btn btn-block btn-catalog"><i class="fas fa-calculator mr-2"></i>Calculate!</button>
         </div>
      </div>
   </div>
   <div id="recommendationsWrapper" class="col-lg-8 mt-3">
      <h4 class="text-center">Our recommendations for you.</h4>
      <hr class="hr-primary-dy">
      <div id="recommendationList"></div>
   </div>
</div>
@endsection