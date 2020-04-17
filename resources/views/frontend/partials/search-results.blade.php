@if($results->count() == 0)
<div class="search-result">
   <p class="text-center text-secondary-dy" style="width: 100%;">No data found.</p>
</div>
@else
@foreach($results as $result)
<a href="{{ route('public.catalog.item', $result->slug) }}">
   <div class="search-result">
      <img src="{{ asset('images/alternatives/' .$result->image) }}" alt="{{ $result->name }}" width="50px">
      <p>{{ $result->name }}</p>
   </div>
</a>
@endforeach
@endif