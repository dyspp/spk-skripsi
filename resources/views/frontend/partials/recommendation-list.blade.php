@foreach($alternativeRanks as $alternativeRank)
<div class="recommendation-card shadow-sm">
   <div class="recommendation-image">
      <img src="{{ asset('images/alternatives/' .$alternativeRank->alternative_image) }}" alt="{{ $alternativeRank->alternative_image }}">
   </div>
   <div class="recommendation-info">
      <ul class="my-1">
         <li><strong>Score: </strong>{{ $alternativeRank->final_score }}</li>
         <li><strong>Name: </strong>{{ $alternativeRank->alternative_name }}</li>
      </ul>
      <div class="recommendation-buttons">
         <a href="{{ route('public.catalog.item', $alternativeRank->alternative_slug) }}" target="_blank" rel="noopener noreferrer" class="btn btn-block btn-catalog"><i class="fas fa-list mr-2"></i>Details</a>
         <div class="compare-checkbox">
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="compare" id="alternative-{{ $alternativeRank->alternative_id }}" value="{{ $alternativeRank->alternative_id }}" class="custom-control-input">
               <label for="alternative-{{ $alternativeRank->alternative_id }}" class="custom-control-label">Compare</label>
            </div>
         </div>
      </div>
   </div>
   <div class="recommendation-rank">
      <p><i class="fas fa-crown mr-2"></i>{{ $rank++ }}</p>
   </div>
</div>
@endforeach