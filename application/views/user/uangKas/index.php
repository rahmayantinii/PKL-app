<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-6">
        <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
    </div>            
    <h4 class="h5 mb-4 font-weight-bold text-gray-800">Pilih Bulan Pembayaran :</h4>       

<?php echo $this->session->flashdata('message'); ?>
    
<!-- Content Row -->
<div class="row float-left">

<?php foreach ($bulan_pembayaran as $bln) : ?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-md-4 mb-4 align-items-center">
    <div class="card border-bottom-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-4">
                    <div class="h5 font-weight-bold text-gray-800 mb-1"><?php echo $bln['nama_bulan'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-500 mb-1"><?php echo $bln['tahun'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-700 mb-1">Rp. <?php echo number_format($bln['pembayaran_perminggu'],0,',',',');  ?> / minggu</div>
                    <div class="text-x font-weight-bold text-gray-700 mb-1">Total uang kas bulan ini :<br>
                        <div class="btn btn-sm btn-success font-weight-bold text-gray-100"> Rp<?php echo number_format($bln['total_semua'],0,',',',');  ?> </div>
                        <a  class="btn btn-sm btn-info" href="<?php echo base_url('users/detail/'.$bln['id_bulan']) ?>"><i class="fas fa-bars"></i></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
</div>

<?php foreach ($bulan_pembayaran as $bln) : ?>
<!-- modal untuk tambah data -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Tambah Bulan Pembayaran</h5>
              </div>
              <div class="modal-body">
                <?php echo form_open_multipart('uangKas/tambahAksi'); ?>
                <div class="form-group font-weight-bold">
                    <label>Nama Bulan</label>
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
                <div class="form-group font-weight-bold">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $bln['tahun']; ?>">
                </div>
                <div class="form-group font-weight-bold">
                    <label>Pembayaran Perminggu </label>
                    <input type="text" name="pembayaran_perminggu" class="form-control" placeholder="Rp.">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
        </div>
<!-- akhir modal -->
<?php endforeach; ?>





                    