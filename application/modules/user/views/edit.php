<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel-3">Update User Information</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form action="<?= site_url('admin/user/update/'. $model->id ) ?>" method="POST" id="content_form">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" autocomplete="off" required value="<?= $model->fname ?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" autocomplete="off" required value="<?= $model->lname ?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="off" required value="<?= $model->email ?>">
            </div>
            <div class="col-md-6 form-group">
                <label for="dob">Date for Birth</label>
                <input type="text" name="dob" id="dob" class="form-control date" placeholder="Enter Date of Birth" value="<?= date('d-m-Y', strtotime($model->dob)) ?>" autocomplete="off" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
    </div>
</form>
<script>
    $('.date').datetimepicker({
        timepicker:false,
        format:'d-m-Y',
        formatDate:'d-m-Y',
        scrollMonth : false
    });
</script>