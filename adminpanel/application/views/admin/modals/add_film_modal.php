<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dodaj nowy Film</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body d-flex flex-column">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Tytuł:</span>
                </div>
                <input type="text" class="form-control" id="title" aria-describedby="label-for-first-name">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="label-for-first-name">Link:</span>
                </div>
                <input type="text" class="form-control" id="link" aria-describedby="label-for-first-name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="add" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
        </div>
    </div>
</div>