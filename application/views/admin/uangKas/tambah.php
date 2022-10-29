<div class="container-fluid">
    
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr><br>

<?php echo $this->session->flashdata('message'); ?>


        <form method="post" action="<?= base_url('uangkas/tambahAksi'); ?>">

          <div class="form-group row">
            <label for="nama_bulan" class="col-sm-2 col-form-label">Nama Bulan</label>
              <div class="col-sm-5">
                <select class="form-control" id="bulan_pembayaran" name="nama_bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="tahun">
              </div>
          </div>

          <div class="form-group row">
            <label for="pembayaran_perminggu" class="col-sm-2 col-form-label">Pembayaran /minggu</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="pembayaran_perminggu" placeholder="Rp.">
              </div>
          </div>

          <div class="form-group row">
            <label for="nama_jabatan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-5">
                <a class="btn btn-info" href="<?php echo base_url('uangkas/index') ?>">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </div>
        </form>
    </div>



                    