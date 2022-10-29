<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

<?php echo $this->session->flashdata('message'); ?>


        <form method="post" action="<?= base_url('siswa/tambahAksi'); ?>">

          <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nisn">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_siswa">
              </div>
          </div>

          <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-5">
                <label>
                    <input type="radio" name="jk" value="L"> Laki-laki |
                    <input type="radio" name="jk" value="P"> Perempuan
                </label>
              </div>
          </div>

          <div class="form-group row">
            <label for="nohp" class="col-sm-2 col-form-label">No. Handphone</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nohp">
              </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="email">
              </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-info btn-sm" href="<?php echo base_url('siswa/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              </div>
          </div>
        </form>
    </div>



                    