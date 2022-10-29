<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

        <form method="post" action="<?= base_url('aset/ubahAksi'); ?>">

          <div class="form-group row">
            <label for="id_aset" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="id_aset" value="<?php echo $aset['id_aset']; ?>" readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="nama_aset" class="col-sm-2 col-form-label">Nama Aset</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama_aset" value="<?php echo $aset['nama_aset']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="jml_aset" class="col-sm-2 col-form-label">Jumlah Aset</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="jml_aset" value="<?php echo $aset['jml_aset']; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga_aset" class="col-sm-2 col-form-label">Harga Satuan</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="harga_aset" value="<?php echo $aset['harga_aset']; ?>">
            </div>
          </div>
              
              <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-sm btn-info" href="<?php echo base_url('aset/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
              </div>
          </div>
        </form>
    </div>



                    