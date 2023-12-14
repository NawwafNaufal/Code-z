<style>
    .custom-text-color {
        color: #2ABCDC;
    }

    .hr-custom-color {
        background-color: #2ABCDC;
        height: 1px;
    }

    .custom-login-button {
        background-color: #08A1CD;
        border-color: #08A1CD;
        color: #ffffff;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
    }

    .custom-login-button:hover {
        background-color: #2ABCDC;
        border-color: #2ABCDC;
        color: #ffffff;
        cursor: pointer;
    }
</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h2 custom-text-color font-weight-bold text-left mb-4">Log in</h1>
                                    <hr class="hr-custom-color">
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <h6 class="custom-text-color font-weight-bold">Username</h6>
                                        <input type="text" class="form-control form-control-user rounded-0" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                                        <small class="text-danger"><?= form_error('email'); ?></small>
                                    </div>
                                    <h6 class="custom-text-color font-weight-bold">Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user rounded-0" id="password" name="password" placeholder="Password">
                                        <small class="text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <div class="text-right ">
                                        <a class="small custom-text-color" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block custom-login-button rounded-0">
                                        Login
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block custom-login-button rounded-0">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small custom-text-color" href="<?= base_url(); ?>auth/registration">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>