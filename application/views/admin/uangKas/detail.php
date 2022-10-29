<div class="container-fluid">
    <?php foreach($bulan_pembayaran as $b) : ?>
    <div class="mb-4 text-center">
    <h3 class="font-weight-bold text-gray-800">
        <?= $title;?> : <?php echo $b['nama_bulan']; ?> <?php echo $b['tahun']; ?></h3><br>
    <h4 class="font-weight-bold text-gray-800">
        Rp<?php echo number_format($b['pembayaran_perminggu'],0,',',',') ; ?> / minggu</h4>
    <?php endforeach; ?>
    </div>

<?php echo $this->session->flashdata('message'); ?>

    
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">DataTables Detail
        </div>

        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
            <thead class="font-weight-bold text-gray-900" style="background-color: ;">
                <tr>
                    <td>No</td>
                    <td>Nama Siswa</td>
                    <td>Minggu Ke 1</td>
                    <td>Minggu Ke 2</td>
                    <td>Minggu Ke 3</td>
                    <td>Minggu Ke 4</td>
                    <td>Minggu Ke 5</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($detail_pembayaran as $d) : ?>
            <tr class="text-center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['nama_siswa'] ?></td>
                <td><?php echo number_format($d['minggu_ke_1'],0,',',',')?></a></td>
                <td><?php echo number_format($d['minggu_ke_2'],0,',',',')?></a></td>
                <td><?php echo number_format($d['minggu_ke_3'],0,',',',')?></a></td>
                <td><?php echo number_format($d['minggu_ke_4'],0,',',',')?></a></td>
                <td><?php echo number_format($d['minggu_ke_5'],0,',',',')?></a></td>
                <td><a href=""class="badge badge-success" data-toggle="modal" data-target="#exampleModa">Bayar</a>
                    <!-- modal untuk tambah data -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Ubah Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body font-weight-bold">
                            <?php echo form_open_multipart('uangkas/ubahAksi'); ?>
                            <div class="form-group">
                                <input type="hidden" name="id_detail" class="form-control" value="<?php echo $d['id_detail']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $d['id_siswa'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_bulan" class="form-control" value="<?php echo $d['id_bulan'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 1</label>
                                <input type="text" name="minggu_ke_1" class="form-control" value="<?php echo $d['minggu_ke_1'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 2</label>
                                <input type="text" name="minggu_ke_2" class="form-control" value="<?php echo $d['minggu_ke_2'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 3</label>
                                <input type="text" name="minggu_ke_3" class="form-control" value="<?php echo $d['minggu_ke_3'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 4</label>
                                <input type="text" name="minggu_ke_4" class="form-control" value="<?php echo $d['minggu_ke_4'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="float-left">Minggu Ke 5</label>
                                <input type="text" name="minggu_ke_5" class="form-control" value="<?php echo $d['minggu_ke_5'] ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <?php echo form_close() ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- akhir model -->
                </td>
              <?php endforeach; ?>
                    

