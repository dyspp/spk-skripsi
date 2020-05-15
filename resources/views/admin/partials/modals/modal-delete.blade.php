<div class="modal modal-dy fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-header-text">
               <i class="fas fa-exclamation-triangle mr-2"></i>
               <h5 class="modal-title" id="modalDeleteLabel">Warning!</h5>
            </div>
         </div>
         <div class="modal-body">
            <p><strong><span id="modalDeleteItemName"></span></strong> will be deleted from the database. Continue?</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-purple" data-dismiss="modal"><i class="fas fa-times mr-2"></i>No</button>
            <form id="deleteForm" action="" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger"><i class="fas fa-check mr-2"></i>Yes</button>
            </form>
         </div>
      </div>
   </div>
</div>