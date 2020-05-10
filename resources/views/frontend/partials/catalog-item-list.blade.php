@foreach($alternatives as $alternative)
<div class="col-lg-4 col-md-4 col-sm-6 col-6 alternative-card-wrapper my-2">
   <div class="card shadow-sm alternative-card">
      <div class="d-flex justify-content-center px-1">
         <img src="{{ asset('images/alternatives/' .$alternative->image) }}" alt="{{ $alternative->name }}" class="alternative-image">
      </div>
      <hr>
      <div class="card-body text-center">
         <strong><p>{{ formatPrice($alternative->price) }}</p></strong>
         <p>{{ $alternative->name }}</p>
      </div>
      <a href="{{ route('public.catalog.item', $alternative->slug) }}" class="btn btn-block btn-catalog"><i class="fas fa-list mr-2"></i>Details</a>
   </div>
</div>
@endforeach
<div class="col-12 d-flex justify-content-center">
   {{ $alternatives->links('frontend.partials.pagination') }}
</div>