@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<div class="row">
   <div class="col-xl-7">
      <div class="card shadow-sm">
      <div class="card-body">
         <h3>Add Alternative Scores Form</h3>
         <hr class="hr-purple">
         <form action="{{ route('alternativescores.store') }}" method="POST">
         @csrf
            <select name="alternative" id="alternative" class="custom-select">
               <option disabled selected>Choose Alternative</option>
               @foreach($alternatives as $alternative)
               <option value="{{ $alternative->id }}">{{ $alternative->name }}</option>
               @endforeach
            </select>
            <select name="brand" id="brand" class="custom-select">
               <option disabled selected>Choose Brand</option>
               @foreach($brands as $brand)
               <option value="{{ $brand->id }}">{{ $brand->description }}</option>
               @endforeach
            </select>
            <select name="price" id="price" class="custom-select">
               <option disabled selected>Choose Price</option>
               @foreach($prices as $price)
               <option value="{{ $price->id }}">{{ $price->description }}</option>
               @endforeach
            </select>
            <select name="processor" id="processor" class="custom-select">
               <option disabled selected>Choose Processor</option>
               @foreach($processors as $processor)
               <option value="{{ $processor->id }}">{{ $processor->description }}</option>
               @endforeach
            </select>
         </form>
      </div>
      </div>
   </div>
</div>
@endsection