<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

        <form method="post" action="<?= base_url('siswa/ubahAksi'); ?>">

          <div class="form-group row">
            <label for="id_siswa" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="id_siswa" value="<?php echo $siswa['id_siswa']; ?>" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nisn" value="<?php echo $siswa['nisn']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_siswa" value="<?php echo $siswa['nama_siswa']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-5">
                <label>
                    <input type="radio" name="jk" value="L" <?php if($siswa['jk']=='L') echo 'checked'?>> Laki-laki |
                    <input type="radio" name="jk" value="P" <?php if($siswa['jk']=='P') echo 'checked'?>> Perempuan
                </label>
              </div>
          </div>

          <div class="form-group row">
            <label for="nohp" class="col-sm-2 col-form-label">No. Handphone</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="nohp" value="<?php echo $siswa['nohp']; ?>">
              </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="email" value="<?php echo $siswa['email']; ?>">
              </div>
          </div>
              
              <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-sm btn-info" href="<?php echo base_url('siswa/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
              </div>
          </div>
        </form>
    </div>



                    