<!-- CRUD -->
@if(Session::has('created'))
<div>
   <div class="alert alert-success p-2 mt-3">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('created') }}</strong>
   </div>
</div>
@elseif(Session::has('updated'))
<div>
   <div class="alert alert-info p-2 mt-3">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('updated') }}</strong>
   </div>
</div>
@elseif(Session::has('deleted'))
<div>
   <div class="alert alert-danger p-2 mt-3">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('deleted') }}</strong>
   </div>
</div>
<!-- Auth -->
@elseif(Session::has('authenticated'))
<div class="alert alert-info mt-3 my-0">
   <strong><i class="fas fa-info-circle mr-2"></i>{{ session('authenticated') }}</strong>
</div>
@elseif(Session::has('unauthorized'))
<div class="alert alert-danger mt-3 my-0">
   <strong><i class="fas fa-exclamation-triangle mr-2"></i>{{ session('unauthorized') }}</strong>
</div>
<!-- Admin -->
@elseif(Session::has('added'))
<div class="alert alert-success mt-3">
   <strong>{{ session('added') }}</strong>
</div>
@elseif(Session::has('profile_updated'))
<div class="alert alert-success">
   <strong>{{ session('profile_updated') }}</strong>
</div>
@elseif(Session::has('privilege_updated'))
<div>
   <div class="alert alert-success p-2 mt-3">
      <strong>{{ session('privilege_updated') }}</strong>
   </div>
</div>
@endif