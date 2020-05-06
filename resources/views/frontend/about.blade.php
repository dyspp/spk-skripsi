@extends('frontend.master')

@section('title', 'About')

@section('content')
<div class="about-container">
    <div class="about-header">
        <h3>About <span class="brand">dy-laptops</span></h3>
    </div>
    <hr>
    <div class="about-body">
        <div class="about-image">
            <img src="{{ asset('images/app/dy.jpg') }}" alt="dy">
            <p>"Wind Breeze" - Dody Septian (Dy)</p>
        </div>
        <div class="about-dy">
            <p><span class="brand">dy-laptops</span> is a Decision Support System (DDS) created to help people, specifically college students who want to buy a laptop based on their needs but not sure which one to buy. <span class="brand">dy-laptops</span> created by <strong>Dody Septian Perdana Putra</strong>, a student at <strong><a href="https://stikom-bali.ac.id/" target="_blank" rel="noopener noreferrer">Institut Teknologi dan Bisnis (ITB) STIKOM Bali</a></strong> as the final project for getting his Computer Science degree.</p>
        </div>
    </div>
</div>
@endsection