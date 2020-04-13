@extends('frontend.master')

@section('title')
Catalog - {{ $item->name }}
@endsection

@section('content')
<div class="item-details">
   <h3>{{ $item->name }}</h3>
   <hr>
   <div class="item-image">
      <img src="{{ asset('images/alternatives/' .$item->image) }}" alt="{{ $item->name }}">
   </div>
   <div class="table-responsive">
      <table class="table table-bordered table-border-dark shadow-sm ">
         <tbody class="w-25p th-dark tr-align-middle th-text-nowrap">
            <tr>
               <th><i class="fas fa-desktop mr-2"></i>Brand</th>
               <td>{{ $item->brand }}</td>
            </tr>
            <tr>
               <th><i class="fas fa-money-bill-wave mr-2"></i>Price</th>
               <td>{{ formatPrice($item->price) }}</td>
            </tr>
            <tr>
               <th><i class="fas fa-microchip mr-2"></i>Processor</th>
               <td>{{ $item->processor}}</td>
            </tr>
            <tr>
               <th><i class="fas fa-gamepad mr-2"></i>GPU</th>
               <td>{{ $item->gpu }}</td>
            </tr>
            <tr>
               <th><i class="fas fa-memory mr-2"></i>Memory (RAM)</th>
               <td>{{ $item->ram }} GB</td>
            </tr>
            <tr>
               <th><i class="fas fa-hdd mr-2"></i>Storage</th>
               <td>{{ $item->storage }}</td>
            </tr>
            <tr>
               <th><i class="fas fa-eye mr-2"></i>Display</th>
               <td>{{ $item->display }}</td>
            </tr>
            <tr>
               <th><i class="fas fa-weight mr-2"></i>Unit Weight</th>
               <td>{{ $item->unit_weight }} Kg</td>
            </tr>
            <tr>
               <th><i class="fas fa-wifi mr-2"></i>Connectivity</th>
               <td>
                  @foreach(stringToList($item->connectivity) as $connectivity)
                  <li>{{ $connectivity }}</li>
                  @endforeach
               </td>
            </tr>
            <tr>
               <th><i class="fas fa-ethernet mr-2"></i>Ports</th>
               <td>
                  @foreach(stringToList($item->ports) as $port)
                  <li>{{ $port }}</li>
                  @endforeach
               </td>
            </tr>
            <tr>
               <th><i class="fas fa-box-open mr-2"></i>Features</th>
               <td>
                  @foreach(stringToList($item->features) as $feature)
                  <li>{{ $feature }}</li>
                  @endforeach
               </td>
            </tr>
            <tr>
               <th><i class="fas fa-globe mr-2"></i>Official Website</th>
               <td>
                  <a href="{{ $item->link }}" target="_blank" rel="noopener noreferrer" class="btn btn-block btn-catalog text-white"><i class="fas fa-external-link-alt mr-2"></i>Link</a>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection