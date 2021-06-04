<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new player</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body d-flex flex-column">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Social Club Nick:</span>
                </div>
                <input type="text" class="form-control" id="nick" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Discord Code:</span>
                </div>
                <input type="text" class="form-control" id="discord" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Level:</span>
                </div>
                <input type="text" class="form-control" id="level" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Zarobione:</span>
                </div>
                <input type="text" class="form-control" id="earned" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Wydane:</span>
                </div>
                <input type="text" class="form-control" id="spent" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Komentarz:</span>
                </div>
                <input type="text" class="form-control" id="comment" aria-describedby="label-for-first-name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="add" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
        </div>
    </div>
</div>