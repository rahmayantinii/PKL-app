<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

        <form method="post" action="<?= base_url('user/ubahAksi'); ?>">

          <div class="form-group row">
            <label for="id_user" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="id_user" value="<?php echo $user['id_user']; ?>" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $user['nama_lengkap']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="password" value="<?php echo $user['password']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
              <div class="col-sm-5">
                    <select class="form-control" id="id_jabatan" name="jabatan">
                    <?php foreach( $jabatan as $j ) : ?>
                        <?php if( $j['id_jabatan'] == $user['id_jabatan'] ) : ?>
                          <option value="<?= $j['id_jabatan']; ?>" selected><?= $j['nama_jabatan']; ?></option>
                        <?php else : ?>
                          <option value="<?= $j['id_jabatan']; ?>"><?= $j['nama_jabatan']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
              </div>
            </div>
              
              <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-sm btn-info" href="<?php echo base_url('user/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
              </div>
          </div>
        </form>
    </div>



                    