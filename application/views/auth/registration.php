<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>")>
                            <div class="form-group">
                                <div class="col-sm-15 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nama_lengkap" id="nama_lengkap" placeholder="Full Name" value="<?= set_value('nama_lengkap'); ?>"><?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="username" id="username"placeholder="Username" value="<?= set_value('username'); ?>"><?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-15 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-info btn-user btn-block">Register Account</button>
                        </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
     </div>
</div>