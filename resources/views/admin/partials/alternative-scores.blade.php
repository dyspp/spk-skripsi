<div class="d-flex justify-content-center flex-wrap">
   <img class="img-fluid" src="{{ asset('images/alternatives/'.$alternativeScore->alternative->image) }}" alt="{{ $alternativeScore->alternative->name }}">
</div>
<p class="text-center">{{ $alternativeScore->alternative->name }}</p>
<table class="table table-bordered table-border-purple">
   <thead class="table-border-bottom-none text-center">
      <tr>
         <th colspan="2">Details</th>
         <th>Score</th>
      </tr>
   </thead>
   <tbody class="tr-align-middle">
      <tr>
         <th>Processor Manufacturer</th>
         <td>{{ $alternativeScore->processorManufacturerScore->description }}</td>
         <td>{{ $alternativeScore->processorManufacturerScore->score }}</td>
      </tr>
      <tr>
         <th>Processor Class</th>
         <td>{{ $alternativeScore->processorClassScore->description }}</td>
         <td>{{ $alternativeScore->processorClassScore->score }}</td>
      </tr>
      <tr>
         <th>Processor Base Speed</th>
         <td>{{ $alternativeScore->processorBaseSpeedScore->description }}</td>
         <td>{{ $alternativeScore->processorBaseSpeedScore->score }}</td>
      </tr>
      <tr>
         <th>Processor Core</th>
         <td>{{ $alternativeScore->processorCoreScore->description }}</td>
         <td>{{ $alternativeScore->processorCoreScore->score }}</td>
      </tr>
      <tr>
         <th>GPU Manufacturer</th>
         <td>{{ $alternativeScore->gpuManufacturerScore->description }}</td>
         <td>{{ $alternativeScore->gpuManufacturerScore->score }}</td>
      </tr>
      <tr>
         <th>GPU Class</th>
         <td>{{ $alternativeScore->gpuClassScore->description }}</td>
         <td>{{ $alternativeScore->gpuClassScore->score }}</td>
      </tr>
      <tr>
         <th>GPU Memory</th>
         <td>{{ $alternativeScore->gpuMemoryScore->description }}</td>
         <td>{{ $alternativeScore->gpuMemoryScore->score }}</td>
      </tr>
      <tr>
         <th>Memory (Ram)</th>
         <td>{{ $alternativeScore->ramScore->description }}</td>
         <td>{{ $alternativeScore->ramScore->score }}</td>
      </tr>
      <tr>
         <th>Storage Type</th>
         <td>{{ $alternativeScore->storageTypeScore->description }}</td>
         <td>{{ $alternativeScore->storageTypeScore->score }}</td>
      </tr>
      <tr>
         <th>Storage Size</th>
         <td>{{ $alternativeScore->storageSizeScore->description }}</td>
         <td>{{ $alternativeScore->storageSizeScore->score }}</td>
      </tr>
      <tr>
         <th>Price</th>
         <td>{{ $alternativeScore->priceScore->description }}</td>
         <td>{{ $alternativeScore->priceScore->score }}</td>
      </tr>
      <tr>
         <th>Display Size</th>
         <td>{{ $alternativeScore->displaySizeScore->description }}</td>
         <td>{{ $alternativeScore->displaySizeScore->score }}</td>
      </tr>
      <tr>
         <th>Display Resolution</th>
         <td>{{ $alternativeScore->displayResolutionScore->description }}</td>
         <td>{{ $alternativeScore->displayResolutionScore->score }}</td>
      </tr>
      <tr>
         <th>Display Refresh Rate</th>
         <td>{{ $alternativeScore->displayRefreshRateScore->description }}</td>
         <td>{{ $alternativeScore->displayRefreshRateScore->score }}</td>
      </tr>
      <tr>
         <th>Brand</th>
         <td>{{ $alternativeScore->brandScore->description }}</td>
         <td>{{ $alternativeScore->brandScore->score }}</td>
      </tr>
      <tr>
         <th>Unit Weight</th>
         <td>{{ $alternativeScore->unitWeightScore->description }}</td>
         <td>{{ $alternativeScore->unitWeightScore->score }}</td>
      </tr>
      <tr>
         <th>Design</th>
         <td>{{ $alternativeScore->designScore->description }}</td>
         <td>{{ $alternativeScore->designScore->score }}</td>
      </tr>
      <tr>
         <th>Feature</th>
         <td>{{ $alternativeScore->featureScore->description }}</td>
         <td>{{ $alternativeScore->featureScore->score }}</td>
      </tr>
      <tr>
         <th>Backlit Keyboard</th>
         <td>{{ $alternativeScore->backlitKeyboardScore->description }}</td>
         <td>{{ $alternativeScore->backlitKeyboardScore->score }}</td>
      </tr>
   </tbody>
</table>