<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new role</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body d-flex flex-column">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-nick">Role Name:</span>
                </div>
                <input type="text" class="form-control" id="nick" aria-describedby="label-for-nick">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-password">Permissions:</span>
                </div>
                <input type="password" class="form-control" id="password" aria-describedby="label-for-password">
            </div>
            
             <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-select-role">Role:</span>
                </div>
                <select class='form-control' id='select' aria-describedby="label-for-select-role">
                    <option value='1' selected>User</option>
                    <option value='2'>Moderator</option>
                    <option value='3'>Administrator</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="add" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
        </div>
    </div>
</div>