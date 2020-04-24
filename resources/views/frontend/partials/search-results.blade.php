@if($results->count() == 0)
<div class="search-result">
   <p class="text-center text-secondary-dy" style="width: 100%;">No data found.</p>
</div>
@endif
@if($page === 'catalog')
@foreach($results as $result)
<a href="{{ route('public.catalog.item', $result->slug) }}">
   <div class="search-result">
      <img src="{{ asset('images/alternatives/' .$result->image) }}" alt="{{ $result->name }}" width="50px">
      <p>{{ $result->name }}</p>
   </div>
</a>
@endforeach
@elseif($page === 'compare')
@foreach($results as $result)
<div class="search-result">
   <img src="{{ asset('images/alternatives/' .$result->image) }}" alt="{{ $result->name }}" width="50px">
   <p>{{ $result->name }}</p>
   <input type="hidden" name="resultId" value="{{ $result->id }}">
</div>
@endforeach
@endif