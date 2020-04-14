@extends('frontend.master')

@section('title', 'Catalog')

@section('content')
<div class="row">
   <div class="col-lg-3 filter-card-wrapper my-2">
      <div class="card filter-wrapper">
         <h3>Filter By</h3>
         <div class="filter-group">
            <p>Brand</p>
            <div class="filter">
               <input type="checkbox" name="brand" id="brand-1" value="asus">
               <label for="brand-1">Asus</label>
            </div>
            <div class="filter">
               <input type="checkbox" name="brand" id="brand-2" value="lenovo">
               <label for="brand-2">Lenovo</label>
            </div>
         </div>
         <div class="filter-group">
            <p>Memory (RAM)</p>
            <div class="filter">
               <input type="checkbox" name="ram" id="ram-1" value="4">
               <label for="ram-1">4 GB</label>
            </div>
            <div class="filter">
               <input type="checkbox" name="ram" id="ram-2" value="8">
               <label for="ram-2">8 GB</label>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-9">
      <div id="catalogItemList" class="row">
         @include('frontend.partials.catalog-item-list')
      </div>
   </div>
</div>
@endsection