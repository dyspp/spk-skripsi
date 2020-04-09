@extends('frontend.master')

@section('title', 'Welcome to dy-laptops!')
@section('content')
<!-- Catalog -->
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-right">
   <div class="jumbotron-icon-dy">
      <i class="fas fa-laptop-code fa-10x"></i>
   </div>
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Catalog</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur autem sed saepe reiciendis ducimus enim esse veniam tenetur quod reprehenderit! Provident quidem beatae ea. Soluta nulla libero incidunt quia repellat?</p>
      <a href="{{ route('catalog') }}" class="btn btn-lg jumbotron-button-dy">Visit<i class="fas fa-arrow-circle-right ml-2"></i></a>
   </div>
</div>
<!-- Rate -->
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-left">
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Rate</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab rerum quia optio ut nobis repudiandae laudantium velit, voluptate saepe numquam minima. Reprehenderit laboriosam dolorum quia commodi tempora architecto sint officia?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<i class="fas fa-arrow-circle-right ml-2"></i></a>
   </div>
   <div class="jumbotron-icon-dy">
      <span class="text-center">
         <i class="fas fa-star fa-lg"></i>
         <i class="fas fa-star fa-lg"></i>
         <i class="fas fa-star fa-lg"></i>
         <i class="fas fa-star fa-lg"></i>
         <i class="fas fa-star-half-alt fa-lg"></i>
      </span>
      <span class="mt-3">
         <i class="fas fa-desktop fa-10x"></i>
      </span>
   </div>
</div>
<!-- Compare -->
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-right">
   <div class="jumbotron-icon-dy">
      <i class="fas fa-balance-scale-right fa-10x"></i>
   </div>
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Compare</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab rerum quia optio ut nobis repudiandae laudantium velit, voluptate saepe numquam minima. Reprehenderit laboriosam dolorum quia commodi tempora architecto sint officia?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<i class="fas fa-arrow-circle-right ml-2"></i></a>
   </div>
</div>
<!-- Help -->
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-left">
   <div class="jumbotron-body-dy">
      <h1 class="display-4">Help</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab rerum quia optio ut nobis repudiandae laudantium velit, voluptate saepe numquam minima. Reprehenderit laboriosam dolorum quia commodi tempora architecto sint officia?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<i class="fas fa-arrow-circle-right ml-2"></i></a>
   </div>
   <div class="jumbotron-icon-dy">
      <i class="fas fa-question-circle fa-10x"></i>
   </div>
</div>
<!-- About -->
<div class="jumbotron jumbotron-fluid shadow-sm jumbotron-dy text-right">
   <div class="jumbotron-icon-dy">
      <i class="fas fa-info-circle fa-10x"></i>
   </div>
   <div class="jumbotron-body-dy">
      <h1 class="display-4">About</h1>
      <hr class="my-2">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab rerum quia optio ut nobis repudiandae laudantium velit, voluptate saepe numquam minima. Reprehenderit laboriosam dolorum quia commodi tempora architecto sint officia?</p>
      <a href="#" class="btn btn-lg jumbotron-button-dy">Visit<i class="fas fa-arrow-circle-right ml-2"></i></a>
   </div>
</div>
@endsection