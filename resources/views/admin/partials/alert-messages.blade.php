@if(Session::has('Created'))
<div class="alert alert-success p-2 mb-0">
   <button type="button" class="close ml-3" data-dismiss="alert">x</button>
   <strong>{{ session('Created') }}</strong>
</div>
@elseif(Session::has('Updated'))
   <div class="alert alert-info p-2 mb-0">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('Updated') }}</strong>
   </div>
@elseif(Session::has('Deleted'))
   <div class="alert alert-danger p-2 mb-0">
      <button type="button" class="close ml-3" data-dismiss="alert">x</button>
      <strong>{{ session('Deleted') }}</strong>
   </div>
@endif