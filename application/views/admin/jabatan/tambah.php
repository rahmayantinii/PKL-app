<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

<?php echo $this->session->flashdata('message'); ?>


        <form method="post" action="<?= base_url('jabatan/tambahAksi'); ?>">

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_jabatan">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-info btn-sm" href="<?php echo base_url('jabatan/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              </div>
          </div>
        </form>
    </div>



                    