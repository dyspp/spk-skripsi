@extends('frontend.master')

@section('title', 'Catalog')

@section('content')
<div class="row">
   <div class="col-lg-2 filter-card-wrapper my-1">
      <div class="card">
         <div class="card-body">
            <h3>Filter By</h3>
         </div>
      </div>
   </div>
   <div class="col-lg-10">
      <div class="row">
         @foreach($alternatives as $alternative)
         <div class="col-lg-4 col-md-4 col-sm-6 col-6 alternative-card-wrapper my-1">
            <div class="card shadow-sm alternative-card">
               <div class="d-flex justify-content-center px-1">
                  <img src="{{ asset('images/alternatives/' .$alternative->image) }}" alt="{{ $alternative->name }}" class="img-fluid">
               </div>
               <hr>
               <div class="card-body text-center">
                  <p>{{ $alternative->name }}</p>
               </div>
               <a href="{{ route('public.catalog.item', $alternative->slug) }}" class="btn btn-block btn-catalog"><i class="fas fa-list mr-2"></i>Details</a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection