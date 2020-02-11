@if(Session::has('created'))
<div class="alert alert-success p-2 mb-0">
   <button type="button" class="close ml-3" data-dismiss="alert">x</button>
   <strong>{{ session('created') }}</strong>
</div>
@elseif(Session::has('updated'))
   <div class="alert alert-info p-2 mb-0">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('updated') }}</strong>
   </div>
@elseif(Session::has('deleted'))
   <div class="alert alert-danger p-2 mb-0">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('deleted') }}</strong>
   </div>
@endif