@extends('frontend.master')

@section('title', 'Catalog')

@section('content')
<div class="row">
   <div class="col-lg-3 col-md-3 filter-card-wrapper my-2">
      <h3>Filter By</h3>
      <div class="card filter-wrapper shadow-sm">
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
   <div class="col-lg-9 col-md-9 my-2">
      <div id="searchbarWrapper" class="searchbar-wrapper shadow-sm">
         <input id="searchbar" class="form-control" type="text" name="searchbar" placeholder="Search for laptop">
         <div id="searchResults" class="search-results-wrapper shadow-sm"></div>
      </div>
      <div id="catalogItemList" class="row">
         @include('frontend.partials.catalog-item-list')
      </div>
   </div>
</div>
@endsection