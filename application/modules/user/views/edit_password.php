<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel-3">Update Password</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form action="<?= site_url('admin/user/update-password/'. $model->id ) ?>" method="POST" id="content_form">
    <div class="modal-body">
        <div class="row">
            <!-- old_password -->
            <div class="col-md-12 form-group">
                <label for="old_password">Old Password <span class="text-danger">*</span></label>
                <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Enter Old Password" required autocomplete="off">
            </div>

            <!-- new_password -->
            <div class="col-md-6 form-group">
                <label for="new_password">New Password <span class="text-danger">*</span></label>
                <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter New Password" required autocomplete="off">
            </div>

            <!-- retype_password -->
            <div class="col-md-6 form-group">
                <label for="retype_password">Retype Password <span class="text-danger">*</span></label>
                <input type="password" name="retype_password" id="retype_password" class="form-control" placeholder="Retype Password" required autocomplete="off">
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