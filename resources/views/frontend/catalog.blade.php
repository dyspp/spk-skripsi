@extends('frontend.master')

@section('title', 'Catalog')

@section('content')
<div class="row" style="border: 1px solid gray">
   <div class="col-lg-2" style="border: 1px solid navy">
      <h3>Filter</h3>
   </div>
   <div class="col-lg-10" style="border: 1px solid salmon">
      <div class="row">
         @foreach($alternatives as $alternative)
         <div class="col-lg-4 col-md-4 col-sm-6 col-6 alternatives-catalog">
            <div class="card my-2 shadow-sm alternative-card">
               <div class="d-flex justify-content-center px-1">
                  <img src="{{ asset('images/alternatives/' .$alternative->image) }}" alt="{{ $alternative->name }}" class="img-fluid">
               </div>
               <div class="card-body text-center">
                  <strong>{{ formatPrice($alternative->price) }}</strong>
                  <hr>
                  <p>{{ $alternative->name }}</p>
               </div>
               <a href="{{ route('catalog.show-item', $alternative->slug) }}" class="btn btn-block btn-catalog"><i class="fas fa-list mr-2"></i>Details</a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection