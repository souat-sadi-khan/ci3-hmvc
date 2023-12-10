<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel-3">Update Username</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form action="<?= site_url('admin/user/update-username/'. $model->id ) ?>" method="POST" id="content_form">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="old_username">Old Username <span class="text-danger">*</span></label>
                <input type="text" name="old_username" id="old_username" class="form-control" placeholder="Enter Old Username" required autocomplete="off">
            </div>
            <div class="col-md-12 form-group">
                <label for="new_username">New Username <span class="text-danger">*</span></label>
                <input type="text" name="new_username" id="new_username" class="form-control" placeholder="Enter New Username" required autocomplete="off">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="submit" style="border-radius: 10px;" class="btn btn-success">
            <i class="far fa-paper-plane fa-fw"></i>
            Update
        </button>
        <button type="button" disabled id="submitting" style="border-radius: 10px;display:none" class="btn btn-success">
            <i class="fas fa-spinner fa-spin"></i>
            Processing
        </button>
        <button type="button" style="border-radius: 10px;" class="btn btn-danger" data-dismiss="modal">
            <i class="fas fa-times fa-fw"></i>
            Close
        </button>
    </div>
</form>