<?php $this->load->view('link/template/header_link'); ?>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-4 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="<?= base_url() . 'assets/images/logo.png' ?>" alt="logo">
                            </div>
                            <h3 class="text-custom">Welcome back!</h3>
                            <form class="pt-3" method="POST" action="<?= base_url() . 'administrator/login_credential' ?>" id="base_form">
                                <!-- <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>"><br>    -->
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-user-tie text-custom"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0" name="username" data-parsley-errors-container="#username_error" id="username" required placeholder="Username">
                                    </div>
                                    <span id="username_error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="fas fa-lock text-custom"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0" id="password" placeholder="Password" required name="password" data-parsley-errors-container="#password_error">                        
                                    </div>
                                    <span id="password_error"></span>
                                </div>
                                
                                <div class="my-3">
                                    <button type="submit" id="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                                    <button type="button" id="submitting" style="display:none;" disabled class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Precessing <i class="fas fa-spinner fa-spin"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8 login-half-bg">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" style="background-image: url('<?= base_url() . 'assets/images/background-one.webp' ?>')">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-custom">Tech ICS Global Controller</h2>
                                        <p class="lead"> HyBrid provides you with a powerful and cost-effective HR platform to ensure you get the best from your employees and managers. HyBrid is a timely solution to upgrade and modernize your HR team to make it more efficient and consolidate your employee information into one intuitive HR system. </p>
                                    </div>
                                </div>
                                <div class="carousel-item" style="background-image: url('<?= base_url() . 'assets/images/background-two.webp' ?>')">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-custom">Tech ICS Global Controller</h2>
                                        <p class="lead"> HyBrid provides you with a powerful and cost-effective HR platform to ensure you get the best from your employees and managers. HyBrid is a timely solution to upgrade and modernize your HR team to make it more efficient and consolidate your employee information into one intuitive HR system. </p>
                                    </div>
                                </div>
                                <div class="carousel-item" style="background-image: url('<?= base_url() . 'assets/images/background-three.webp' ?>')">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2 class="text-custom">Tech ICS Global Controller</h2>
                                        <p class="lead"> HyBrid provides you with a powerful and cost-effective HR platform to ensure you get the best from your employees and managers. HyBrid is a timely solution to upgrade and modernize your HR team to make it more efficient and consolidate your employee information into one intuitive HR system. </p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-bottom">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © <?= date('Y') ?>  All rights reserved.</p>
            </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() . 'assets/js/base.min.js' ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="<?= base_url() . 'assets/js/toastr.min.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/login.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/sweet-alert.min.js' ?>"></script>
</body>
</html>