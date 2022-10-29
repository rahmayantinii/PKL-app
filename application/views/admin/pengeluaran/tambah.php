<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

<?php echo $this->session->flashdata('message'); ?>

      <?php echo form_open_multipart('pengeluaran/tambahAksi'); ?>

        <form method="post" action="">
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-5">
                <select class="form-control" id="username" name="id_user">
                    <?php foreach( $user as $u ) : ?>
                        <option value="<?= $u['id_user'] ?>"><?= $u['username'] ?></option>
                    <?php endforeach; ?>
                </select>
              </div>
          </div>

          <div class="form-group row">
                <label for="aset" class="col-sm-2 col-form-label">Nama Aset</label>
              <div class="col-sm-5">
                <select class="form-control" id="aset" name="id_aset">
                    <?php foreach( $aset as $a ) : ?>
                        <option value="<?= $a['id_aset'] ?>"><?= $a['nama_aset'] ?></option>
                    <?php endforeach; ?>
                </select>
                <a href="<?php echo base_url('aset/tambah') ?>" class="text-info">Tidak ada nama aset diatas? Tambahkan aset disini!</a>
              </div>
            </div>

          <div class="form-group row">
            <label for="tgl_pengeluaran" class="col-sm-2 col-form-label">Tanggal Pengeluaran</label>
              <div class="col-sm-5">
                    <input type="date" class="form-control" name="tgl_pengeluaran">
              </div>
            </div>

          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-sm btn-info" href="<?php echo base_url('pengeluaran/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <?php echo form_close() ?>

              </div>
          </div>
        </form>
      
    </div>



                    