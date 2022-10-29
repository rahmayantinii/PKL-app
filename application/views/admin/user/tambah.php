<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

<?php echo $this->session->flashdata('message'); ?>


        <form method="post" action="<?= base_url('user/tambahAksi'); ?>">

          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="username">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_lengkap">
              </div>
          </div>

          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="password">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
              <div class="col-sm-5">
                    <select class="form-control" id="jabatan" name="id_jabatan">
                    <?php foreach( $jabatan as $jbt ) : ?>
                        <option value="<?= $jbt['id_jabatan'] ?>"><?= $jbt['nama_jabatan'] ?></option>
                    <?php endforeach; ?>
                    </select>
              </div>
            </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-sm btn-info" href="<?php echo base_url('user/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
              </div>
          </div>
        </form>
      
    </div>



                    