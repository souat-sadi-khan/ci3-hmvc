<?php $this->load->view('link/template/header_link'); ?>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5 border" style="border-radius:10px;">
                                <div class="brand-logo">
                                    <img src="<?= base_url() . 'assets/images/logo.png' ?>" alt="logo">
                                </div>
                                <h4>OTP sends to the s*****@sk-associates.org</h4>
                                <h6 class="font-weight-light">Please enter the <b>O</b>ne <b>T</b>ime <b>P</b>assword to verify your account.</h6>
                                <form class="pt-3" method="POST" action="<?= base_url() . 'administrator/verify_credential' ?>" id="base_form">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="otp" required placeholder="One Time Password" autocomplete="off" name="otp" maxlength="6">
                                    </div>
                                    
                                    <div class="mt-3">
                                        <button id="submit" style="border-radius:10px;" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                            SIGN IN
                                        </button>
                                        <button type="button" id="submitting" disabled class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:none;border-radius:10px;">
                                            Processing 
                                            <i class="fas fa-spinner fa-spin fa-fw"></i
                                        </button>
                                    </div>

                                    <div class="text-center mt-4 font-weight-light">
                                        Want to <b>Sign In</b> again? <a href="<?= site_url('administrator') ?>" class="text-primary">Click Here</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="<?= base_url() . 'assets/js/base.min.js' ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="<?= base_url() . 'assets/js/toastr.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/login.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/sweet-alert.min.js' ?>"></script>
    <script>
        // Numeric only control handler
        jQuery.fn.ForceNumericOnly =
        function()
        {
            return this.each(function()
            {
                $(this).keydown(function(e)
                {
                    var key = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                    // home, end, period, and numpad decimal
                    return (
                        key == 8 || 
                        key == 9 ||
                        key == 13 ||
                        key == 46 ||
                        key == 110 ||
                        key == 190 ||
                        (key >= 35 && key <= 40) ||
                        (key >= 48 && key <= 57) ||
                        (key >= 96 && key <= 105));
                });
            });
        };
        $("#otp").ForceNumericOnly();
    </script>
</body>

</html>