@isset($recommendation)
<div class="recommendation-card">
   <div class="card-body d-flex justify-content-center">
      <p class="text-secondary-dy" style="margin: 0;">Oops! No laptop matches the chosen criteria. :(</p>
   </div>
</div>
@endisset
@isset($catalog)
<div class="no-data-alert">
   <div class="col-12 alert alert-secondary-dy text-center">
      <p style="margin: 0px;">No data found</p>
   </div>
</div>
@endisset