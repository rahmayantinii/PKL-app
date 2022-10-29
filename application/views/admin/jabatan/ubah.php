<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

        <form method="post" action="<?= base_url('jabatan/ubahAksi'); ?>">

          <div class="form-group row">
            <label for="id_jabatan" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="id_jabatan" value="<?php echo $jabatan['id_jabatan']; ?>" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $jabatan['nama_jabatan']; ?>">
            </div>
          </div>
              
              <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-info btn-sm" href="<?php echo base_url('jabatan/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
              </div>
          </div>
        </form>
    </div>



                    