<div class="modal modal-dy fade" id="modalChangePrivilege" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalChangePrivilegeLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-header-text">
               <i class="fas fa-info-circle mr-2"></i>
               <h5 class="modal-title" id="modalChangePrivilegeLabel">Change Privilege</h5>
            </div>
         </div>
        <form id="changePrivilegeForm" action="" method="post">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <select name="privilege" id="privilege" class="custom-select mb-2">
                    <option value="super_admin">Super Admin</option>
                    <option value="admin">Admin</option>
                </select>
                <p>Change privilege for <strong><span id="modalChangePrivilegeAdminName"></span></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Cancel</button>
                <button type="submit" class="btn btn-purple"><i class="fas fa-check mr-2"></i>Yes</button>
            </div>
        </form>
      </div>
   </div>
</div>