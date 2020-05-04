@extends('frontend.master')

@section('title', 'Welcome to dy-laptops!')
@section('content')
<div class="greeting">
   <h1>Welcome to <span>dy-laptops</span>!</h1>
</div>
<hr>
<!-- Catalog -->
<div class="section">
   <h1 class="section-title">Catalog</h1>
   <div class="section-image">
      <img src="{{ asset('images/app/laptops.jpg') }}" alt="laptops">
   </div>
   <div class="section-body">
      <div class="section-content">
         <div class="section-description">
            <p>Need a laptop to help you <em>study</em> for your exams? Laptop for boosting your performance at <em>work</em> ? Laptop for enjoying your <em>entertainment</em> to their fullest? Or even a laptop that can help you gain the victory at your <em>gaming</em> session? You come to the right place! Browse our laptops <strong>Catalog</strong> and find the laptop that fits your needs the best!</p>
         </div>
         <div class="section-link">
            <a href="{{ route('public.catalog') }}" class="btn btn-lg btn-section">Take me!<i class="fas fa-running ml-2"></i></a>
         </div>
      </div>
   </div>
</div>
<!-- Recommendation -->
<div class="section">
   <h1 class="section-title">Recommendation</h1>
   <div class="section-image">
      <img src="{{ asset('images/app/recommendation.jpg') }}" alt="recommendation">
   </div>
   <div class="section-body">
      <div class="section-content">
         <div class="section-description">
            <p>Tight in the budget or need a laptop with certain specifications, but don't know which one to buy? Don't worry, we got you covered! Use our <strong>Recommendation</strong> tool to help you find the laptop that fits your needs the most!</p>
         </div>
         <div class="section-link">
            <a href="{{ route('public.recommendation') }}" class="btn btn-lg btn-section">Take me!<i class="fas fa-running ml-2"></i></a>
         </div>
      </div>
   </div>
</div>
<!-- Compare -->
<div class="section">
   <h1 class="section-title">Compare</h1>
   <div class="section-image">
      <img src="{{ asset('images/app/compare.jpg') }}" alt="compare">
   </div>
   <div class="section-body">
      <div class="section-content">
         <div class="section-description">
            <p>Not sure which one to choose between laptop A and laptop B? Don't worry! With our <strong>Compare</strong> tool, we will help you see the overall differences between them and also help you make your decision!</p>
         </div>
         <div class="section-link">
            <a href="{{ route('public.compare') }}" class="btn btn-lg btn-section">Take me!<i class="fas fa-running ml-2"></i></a>
         </div>
      </div>
   </div>
</div>
<!-- Help -->
<div class="section">
   <h1 class="section-title">Help</h1>
   <div class="section-image">
      <img src="{{ asset('images/app/help.jpg') }}" alt="help">
   </div>
   <div class="section-body">
      <div class="section-content">
         <div class="section-description">
            <p>Confuse when browsing through our site or not sure how to use one of our tools? Gladly visit our <strong>Help</strong> page to improve your experience with <span class="brand">dy-laptops</span>!</p>
         </div>
         <div class="section-link">
            <a href="#" class="btn btn-lg btn-section">Take me!<i class="fas fa-running ml-2"></i></a>
         </div>
      </div>
   </div>
</div>
<!-- About -->
<div class="section">
   <h1 class="section-title">About</h1>
   <div class="section-image">
      <img src="{{ asset('images/app/about.jpg') }}" alt="about">
   </div>
   <div class="section-body">
      <div class="section-content">
         <div class="section-description">
            <p>Want to know more about us? Visit the <strong>About</strong> page to see the information about the people behind <span class="brand">dy-laptops</span>!</p>
         </div>
         <div class="section-link">
            <a href="#" class="btn btn-lg btn-section">Take me!<i class="fas fa-running ml-2"></i></a>
         </div>
      </div>
   </div>
</div>
@endsection