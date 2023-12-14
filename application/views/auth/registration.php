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

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h2 custom-text-color font-weight-bold text-left mb-4">Buat Akun</h1>
                            <hr class="hr-custom-color">
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <h6 class="custom-text-color font-weight-bold">Nama Lengkap</h6>
                                <input type="text" class="form-control form-control-user rounded-0" id="name" name="name" placeholder="Full Name" value="<?= set_value('name') ?>">
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="form-group">
                                <h6 class="custom-text-color font-weight-bold">Email</h6>
                                <input type="text" class="form-control form-control-user rounded-0" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <h6 class="custom-text-color font-weight-bold">Password</h6>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user rounded-0" id="password1" name="password1" placeholder="Password">
                                    <small class="text-danger"><?= form_error('password1'); ?></small>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user rounded-0" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block custom-login-button rounded-0">
                                Register Account
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block custom-login-button rounded-0">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small custom-text-color" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>