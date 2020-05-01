@extends('frontend.master')

@section('title', 'Catalog')

@section('content')
<div class="row">
   <!-- Filter -->
   <div class="col-lg-3 col-md-3 col-sm-4 filter-card-wrapper my-2">
      <h3>Filter By</h3>
      <div class="card filter-wrapper shadow-sm">
         <!-- Brand -->
         <div class="filter-group">
            <p>Brand</p>
            <hr class="hr-secondary-dy">
            @foreach($brands as $index => $brand)
               <div class="custom-control custom-checkbox filter">
                  <input class="custom-control-input" type="checkbox" name="brand" id="brand-{{ $index+1 }}" value="{{ strtolower($brand) }}">
                  <label class="custom-control-label" for="brand-{{ $index+1 }}">{{ $brand }}</label>
               </div>
            @endforeach
         </div>
         <!-- Memorty (RAM) -->
         <div class="filter-group">
            <p>Memory (RAM)</p>
            <hr class="hr-secondary-dy">
            @foreach($rams as $index => $ram)
            <div class="custom-control custom-checkbox filter">
               <input class="custom-control-input" type="checkbox" name="ram" id="ram-{{ $index+1 }}" value="{{ $ram }}">
               <label class="custom-control-label" for="ram-{{ $index+1 }}">{{ $ram }} GB</label>
            </div>
            @endforeach
         </div>
         <!-- Processor -->
         <div class="filter-group">
            <p>Processor</p>
            <hr class="hr-secondary-dy">
            @foreach($processors as $index => $processor)
            <div class="custom-control custom-checkbox filter">
               <input class="custom-control-input" type="checkbox" name="processor" id="processor-{{ $index+1 }}" value="{{ strtolower($processor) }}">
               <label class="custom-control-label" for="processor-{{ $index+1 }}">{{ $processor }}</label>
            </div>
            @endforeach
         </div>
         <!-- GPU -->
         <div class="filter-group">
            <p>GPU</p>
            <hr class="hr-secondary-dy">
            @foreach($gpus as $index => $gpu)
            <div class="custom-control custom-checkbox filter">
               <input class="custom-control-input" type="checkbox" name="gpu" id="gpu-{{ $index+1 }}" value="{{ strtolower($gpu) }}">
               <label class="custom-control-label" for="gpu-{{ $index+1 }}">{{ $gpu }}</label>
            </div>
            @endforeach
         </div>
         <!-- Storage Type -->
         <div class="filter-group">
            <p>Storage Type</p>
            <hr class="hr-secondary-dy">
            @foreach($storageTypes as $index => $storageType)
            <div class="custom-control custom-checkbox filter">
               <input class="custom-control-input" type="checkbox" name="storage-type" id="storageType-{{ $index+1 }}" value="{{ strtolower($storageType) }}">
               <label class="custom-control-label" for="storageType-{{ $index+1 }}">{{ $storageType }}</label>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   <!-- Catalog -->
   <div class="col-lg-9 col-md-9 col-sm-8 my-2">
      <!-- Search Bar -->
      <div id="searchbarWrapper" class="searchbar-wrapper shadow-sm">
         <div class="d-flex">
            <input id="searchbar" class="form-control" type="text" name="searchbar" placeholder="Search for laptop" tabindex="1">
            <div class="spinner-border spinner-border-sm text-secondary-dy"></div>
         </div>
         <div id="searchResults" class="search-results-wrapper shadow-sm"></div>
      </div>
      <!-- Catalog Item List -->
      <div id="catalogItemList" class="row">
         @include('frontend.partials.catalog-item-list')
      </div>
   </div>
</div>
@endsection