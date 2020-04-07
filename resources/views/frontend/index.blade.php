@extends('frontend.master')

@section('title', 'Welcome to dy-laptops!')
@section('content')
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-right">
   <span class="jumbotron-icon-dy"><li class="fas fa-laptop fa-10x"></li></span>
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Catalog</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur autem sed saepe reiciendis ducimus enim esse veniam tenetur quod reprehenderit! Provident quidem beatae ea. Soluta nulla libero incidunt quia repellat?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<li class="fas fa-arrow-circle-right ml-2"></li></a>
   </div>
</div>
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-left">
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Rate</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab rerum quia optio ut nobis repudiandae laudantium velit, voluptate saepe numquam minima. Reprehenderit laboriosam dolorum quia commodi tempora architecto sint officia?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<li class="fas fa-arrow-circle-right ml-2"></li></a>
   </div>
   <div class="jumbotron-icon-dy">
      <span>
         <li class="fas fa-star fa-2x"></li>
         <li class="fas fa-star fa-2x"></li>
         <li class="fas fa-star fa-2x"></li>
         <li class="fas fa-star fa-2x"></li>
         <li class="fas fa-star-half-alt fa-2x"></li>
      </span>
      <span class="mt-3">
         <li class="fas fa-laptop fa-10x"></li>
      </span>
   </div>
</div>
@endsection