<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 ">Change your password for</h1>
                                    <h5 class="mb-4"><?= $this->session->userdata('reset_username');?></h5>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password1" id="password" placeholder="Enter new password..."><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password2" id="password" placeholder="Repeat password..."><?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                    Reset Password</button>
                                </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

</div>
