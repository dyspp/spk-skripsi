@foreach($alternativeRanks as $alternativeRank)
<div class="recommendation-card shadow-sm">
   <div class="recommendation-image">
      <img src="{{ asset('images/alternatives/' .$alternativeRank->alternative_image) }}" alt="{{ $alternativeRank->alternative_image }}">
   </div>
   <div class="recommendation-info">
      <ul class="my-1">
         <li><strong>Name: </strong>{{ $alternativeRank->alternative_name }}</li>
         <li><strong>Score: </strong>{{ $alternativeRank->final_score }}</li>
      </ul>
      <a href="{{ route('public.catalog.item', $alternativeRank->alternative_slug) }}" target="_blank" rel="noopener noreferrer" class="btn btn-block btn-catalog"><i class="fas fa-list mr-2"></i>Details</a>
   </div>
   <div class="recommendation-rank">
      <p><i class="fas fa-crown mr-2"></i>{{ $number++ }}</p>
   </div>
</div>
@endforeach