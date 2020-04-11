@extends('frontend.master')

@section('title', "Rate")

@section('content')
<div class="row" style="border: 1px solid red;">
   <div class="col-lg-4">
      
      {{-- Price --}}
      <div class="form-group">
         <label for="price">Price</label>
         <select name="price" id="price" class="custom-select">
            <option selected disabled>Choose One!</option>
            <option value="">All</option>
            @if(isset($prices))
               @foreach($prices as $price)
               <option value="{{ $price->id }}">{{ $price->description }}</option>
               @endforeach
            @endif
         </select>
      </div>
      {{-- Processor Classes --}}
      <div class="form-group">
         <label for="processorClass">Processor</label>
         <select name="processorClass" id="processorClass" class="custom-select">
            <option selected disabled>Choose One!</option>
            <option value="">All</option>
            @if(isset($processorClasses))
               @foreach($processorClasses as $processorClass)
               <option value="{{ $processorClass->id }}">{{ $processorClass->description }}</option>
               @endforeach
            @endif
         </select>
      </div>
      {{-- Memory (RAM) --}}
      <div class="form-group">
         <label for="ram">Memory (RAM)</label>
         <select name="ram" id="ram" class="custom-select">
            <option selected disabled>Choose One!</option>
            <option value="">All</option>
            @if(isset($rams))
               @foreach($rams as $ram)
               <option value="{{ $ram->id }}">{{ $ram->description }}</option>
               @endforeach
            @endif
         </select>
      </div>
      {{-- GPU --}}
      <div class="form-group">
         <label for="gpuClass">GPU</label>
         <select name="gpuClass" id="gpuClass" class="custom-select">
            <option selected disabled>Choose One!</option>
            <option value="">All</option>
            @if(isset($gpuClasses))
               @foreach($gpuClasses as $gpuClass)
               <option value="{{ $gpuClass->id }}">{{ $gpuClass->description }}</option>
               @endforeach
            @endif
         </select>
      </div>
      {{-- Storage Type --}}
      <div class="form-group">
         <label for="storageType">Storage Type</label>
         <select name="storageType" id="storageType" class="custom-select">
            <option selected disabled>Choose One!</option>
            <option value="">All</option>
            @if(isset($storageTypes))
               @foreach($storageTypes as $storageType)
               <option value="{{ $storageType->id }}">{{ $storageType->description }}</option>
               @endforeach
            @endif
         </select>
      </div>
      <button id="rateButton" type="button" class="btn btn-block btn-catalog">Rate!</button>
   </div>
   <div class="col-lg-8">
      <ul id="ranks">
         
      </ul>
   </div>
</div>
@endsection