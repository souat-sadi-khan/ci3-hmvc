<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel-3">Create New User</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<form action="<?= site_url('admin/user/store') ?>" method="POST" id="content_form">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" autocomplete="off" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" autocomplete="off" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="off" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" autocomplete="off" required>
            </div>
            <div class="col-md-4 form-group">
                <label for="dob">Date for Birth</label>
                <input type="text" name="dob" id="dob" class="form-control date" placeholder="Enter Date of Birth" value="<?= date('d-m-Y') ?>" autocomplete="off" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required autocomplete="off" >
            </div>
            <div class="col-md-6 form-group">
                <label for="retype_password">Retype Password</label>
                <input type="password" name="retype_password" id="retype_password" class="form-control" placeholder="Retype Password" autocomplete="off" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="submit" style="border-radius: 10px;" class="btn btn-success">
            <i class="far fa-paper-plane fa-fw"></i>
            Submit
        </button>
        <button type="button" disabled id="submitting" style="border-radius: 10px;display:none" class="btn btn-success">
            <i class="fad fa-spinner fa-spin"></i>
            Processing
        </button>
        <button type="button" style="border-radius: 10px;" class="btn btn-danger" data-dismiss="modal">
            <i class="fas fa-times fa-fw"></i>
            Close
        </button>
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