@extends('frontend.master')

@section('title')
Catalog - {{ $item->name }}
@endsection

@section('content')
<div class="item-details">
   <h3 class="item-name">{{ $item->name }}</h3>
   <hr>
   <div class="item-image">
      <img src="{{ asset('images/alternatives/' .$item->image) }}" alt="{{ $item->name }}">
   </div>
   <div class="item-specs-wrapper">
      <div class="item-spec">
         <div class="item-spec-name"><p>Price</p></div>
         <div class="item-spec-description"><p>{{ formatPrice($item->price) }}</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Processor</p></div>
         <div class="item-spec-description"><p>{{ $item->processor }}</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>GPU</p></div>
         <div class="item-spec-description"><p>{{ $item->gpu }}</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Memory (RAM)</p></div>
         <div class="item-spec-description"><p>{{ $item->ram }} GB</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Storage</p></div>
         <div class="item-spec-description"><p>{{ $item->storage }}</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Display</p></div>
         <div class="item-spec-description"><p>{{ $item->display }}</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Unit Weight</p></div>
         <div class="item-spec-description"><p>{{ $item->unit_weight }} Kg</p></div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Connectivity</p></div>
         <div class="item-spec-description">
            @foreach(stringToList($item->connectivity) as $connectivity)
            <li>{{ $connectivity }}</li>
            @endforeach
         </div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Ports</p></div>
         <div class="item-spec-description">
            @foreach(stringToList($item->ports) as $port)
            <li>{{ $port }}</li>
            @endforeach
         </div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Features</p></div>
         <div class="item-spec-description">
            @foreach(stringToList($item->features) as $feature)
            <li>{{ $feature }}</li>
            @endforeach
         </div>
      </div>
      <div class="item-spec">
         <div class="item-spec-name"><p>Official Website</p></div>
         <div class="item-spec-description">
            <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-link mr-1"></i>Link</a>
         </div>
      </div>
   </div>
</div>
@endsection