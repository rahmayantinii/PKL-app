<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
    </div>



<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">DataTables Aset
        <a href="<?php echo base_url('aset/tambah') ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-plus">
            Tambah Data</i></a>
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>Nama Aset</td>
                <td>Jumlah Aset</td>
                <td>Harga Satuan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($aset as $a) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $a['nama_aset'] ?></td>
            <td><?php echo $a['jml_aset'] ?></td>
            <td>Rp<?php echo number_format($a['harga_aset'],0,',',',') ?></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('aset/ubah/'.$a['id_aset']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('aset/hapus/'.$a['id_aset']) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- modal untuk tambah data -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body font-weight-bold">
                <?php echo form_open_multipart('aset/tambahAksi'); ?>
                <div class="form-group">
                    <label>Nama Aset</label>
                    <input type="text" name="nama_aset" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jumlah Aset</label>
                    <input type="text" name="jml_aset" class="form-control">
                </div>
                <div class="form-group">
                    <label>Harga Satuan</label>
                    <input type="text" name="harga_aset" class="form-control" placeholder="Rp.">
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


<!-- akhir model -->

<!-- modal untuk edit data -->

        <!-- Modal -->
        <?php $no = 0;
        foreach ($aset as $a) : $no++; ?>
        <div class="modal fade" id="editmodal<?php echo $a['id_aset'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Edit Data</h5>
              </div>
              <div class="modal-body font-weight-bold">
                <?php echo form_open_multipart('aset/ubahAksi'); ?>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id_aset" class="form-control" value="<?php echo $a['id_aset']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Aset</label>
                    <input type="text" name="nama_aset" class="form-control" value="<?php echo $a['nama_aset']; ?>">
                </div>
                <div class="form-group">
                    <label>Jumlah Aset</label>
                    <input type="text" name="jml_aset" class="form-control" value="<?php echo $a['jml_aset']; ?>">
                </div>
                <div class="form-group">
                    <label>Harga Satuan</label>
                    <input type="text" name="harga_aset" class="form-control" value="<?php echo $a['harga_aset']; ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
                <?php echo form_close() ?>
              </div>
            </div>
          </div>
        </div>
    <?php endforeach; ?>

<!-- akhir model -->
                    