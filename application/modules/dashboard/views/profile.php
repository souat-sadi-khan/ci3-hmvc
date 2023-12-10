<div class="card">
    <div class="">
    </div>
    <div class="card-body">
        <h3 class="card-title">My Profile</h3>
        <form action="<?= site_url('dashboard/update_profile') ?>" method="POST" enctype="multipart/form-data" id="base_form">
            <div class="row">
                <!-- First Name -->
                <div class="col-md-6 form-group">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" autocomplete="off" placeholder="Enter Your First Name" required value="<?= $user->fname ?>">
                </div>

                <!-- Last Name -->
                <div class="col-md-6 form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" autocomplete="off" placeholder="Enter Your Last Name" required value="<?= $user->lname ?>">
                </div>

                <!-- Email -->
                <div class="col-md-6 form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Enter Your Email" required value="<?= $user->email ?>">
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6 form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" name="dob" id="dob" class="form-control date" autocomplete="off" required value="<?= $user->dob != '' ? date('d-m-Y', strtotime($user->dob)) : date('d-m-Y') ?>">
                </div>

                <!-- photo -->
                <div class="col-md-12 form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control file" accept=".png,.jpg" data-default-file="<?= base_url() . '' . $user->photo ?>">
                </div>

                <div class="col-md-12 text-right">
                    <button type="submit" id="submit" class="btn btn-sm btn-outline-orange ">
                        Submit <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                    <button type="button" style="display:none" id="submitting" disabled class="btn btn-sm btn-outline-orange ">
                        Processing <i class="fas fa-spinner fa-spin ml-2"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php function pageRequiredScript() { ?>
    <script src="<?= site_url('assets/js/pages/profile.js') ?>"></script>
<?php } ?>