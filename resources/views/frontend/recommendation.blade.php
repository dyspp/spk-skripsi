@extends('frontend.master')

@section('title', 'Recommendation')

@section('content')
<div class="row">
   <div id="categoryWrapper" class="col-lg-4 mt-3">
      <h4 class="text-center">Available Criteria</h4>
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
      <div class="alert alert-secondary-dy">
         <h5><i class="fas fa-info-circle mr-2"></i>Quick Guide</h5>
         <ul>
            <li>Choose one or more from the available criteria <span>on the left side</span>.</li>
            <li>Alternatively, you can choose the "All" option too for all the criteria.</li>
            <li>Once ready and comfortable with your choices, click the <strong>Calculate!</strong> button to get your laptop(s) recommendation.</li>
            <li>That's all!</li>
         </ul>
      </div>
      <h4 class="text-center">Our recommendations for you.</h4>
      <hr class="hr-primary-dy">
      <div id="recommendationList">
         <p></p>
      </div>
      <hr class="hr-primary-dy">
      <div class="compare-item-container">
         <div class="compare-item-container-toggle-open">
            <i class="fas fa-angle-double-up fa-lg"></i>
         </div>
         <div class="compare-item-container-toggle-close">
            <i class="fas fa-times fa-lg"></i>
         </div>
         <div class="compare-item-max">
            <h5>Compare Items</h5>
            <p>You can select up to <span>4</span> items to compare. Click the <strong>Compare</strong> button to see the details for each items.</p>
         </div>
         <div class="compare-item-list"></div>
         <div class="compare-button-container">
            <button id="compareButton" class="btn btn-outline-primary">Compare!</button>
            <button id="resetButton" class="btn btn-outline-success">Reset</button>
         </div>
      </div>
   </div>
</div>
@endsection