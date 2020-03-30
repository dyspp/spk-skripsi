@extends('admin.dashboards.master')

@section('title', 'Alternative Scores')

@section('content')
<!-- Button and Messages -->
<div class="d-flex mb-2">
   @include('admin.partials.alert-messages')
   <div class="ml-auto">
      <a href="{{ route('alternativescores.create') }}" class="btn btn-purple"><i class="fas fa-plus mr-2"></i>New</a>
   </div>
</div>
<!-- Data -->
<div class="card shadow-sm">
   <div class="card-body pb-1">
      <h3>Alternative Score Data</h3>
      <hr class="hr-purple">
      @if($alternativeScores->isNotEmpty())
      <div class="table-responsive text-nowrap">
         <table class="table table-hover">
            <thead class="table-border-none">
               <tr>
                  <th>No.</th>
                  <th>Alternative</th>
                  <th>Processor Manufacturer</th>
                  <th>Processor Class</th>
                  <th>Processor Base Speed</th>
                  <th>Processor Core</th>
                  <th>GPU Manufacturer</th>
                  <th>GPU Class</th>
                  <th>GPU Memory</th>
                  <th>Memory (RAM)</th>
                  <th>Storage Type</th>
                  <th>Storage Size</th>
                  <th>Price</th>
                  <th>Display Size</th>
                  <th>Display Resolution</th>
                  <th>Display Refresh Rate</th>
                  <th>Brand</th>
                  <th>Unit Weight</th>
                  <th>Design</th>
                  <th>Feature</th>
                  <th>Backlit Keyboard</th>
                  <th>Actions</th>
               </tr>
            </thead>
            <tbody>
               @foreach($alternativeScores as $index => $alternativeScore)
               <tr>
                  <td>{{ $alternativeScores->firstItem() + $index }}</td>
                  <td>{{ $alternativeScore->alternative->name }}</td>
                  <td>{{ $alternativeScore->processorManufacturerScore->description }}</td>
                  <td>{{ $alternativeScore->processorClassScore->description}}</td>
                  <td>{{ $alternativeScore->processorBaseSpeedScore->description }}</td>
                  <td>{{ $alternativeScore->processorCoreScore->description }}</td>
                  <td>{{ $alternativeScore->gpuManufacturerScore->description }}</td>
                  <td>{{ $alternativeScore->gpuClassScore->description }}</td>
                  <td>{{ $alternativeScore->gpuMemoryScore->description }}</td>
                  <td>{{ $alternativeScore->ramScore->description }}</td>
                  <td>{{ $alternativeScore->storageTypeScore->description }}</td>
                  <td>{{ $alternativeScore->storageSizeScore->description }}</td>
                  <td>{{ $alternativeScore->priceScore->description }}</td>
                  <td>{{ $alternativeScore->displaySizeScore->description }}</td>
                  <td>{{ $alternativeScore->displayResolutionScore->description }}</td>
                  <td>{{ $alternativeScore->displayRefreshRateScore->description }}</td>
                  <td>{{ $alternativeScore->brandScore->description }}</td>
                  <td>{{ $alternativeScore->unitWeightScore->description }}</td>
                  <td>{{ $alternativeScore->designScore->description }}</td>
                  <td>{{ $alternativeScore->featureScore->description }}</td>
                  <td>{{ $alternativeScore->backlitkeyboardScore->description }}</td>
                  <td>
                     <div class="d-flex justify-content-center">
                        <a href="{{ route('alternativescores.edit', $alternativeScore->id) }}" class="btn btn-sm btn-primary mr-2"><i class="far fa-edit mr-2"></i>Edit</a>
                        <form action="{{ route('alternativescores.destroy', $alternativeScore->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-sm btn-danger" onClick="return confirm('This action cannot be undone. Continue?')">
                              <i class="far fa-trash-alt mr-2"></i>Delete
                           </button>
                        </form>
                     </div>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      @else
      <div class="alert alert-border alert-warning text-center">
         <strong>No data found.</strong>
      </div>
      @endif
   </div>
</div>
<!-- Pagination -->
@if($alternativeScores->total() > $alternativeScores->perPage())
<div class="d-flex justify-content-center mt-2">
   {{ $alternativeScores->links() }}
</div>
@endif
@endsection