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
@endif