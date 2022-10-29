<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
    </div>


<?php echo $this->session->flashdata('message'); ?>

<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">DataTables Pengeluaran
        <button type="button" class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus">
            Tambah Data</i>
        </button>
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Nama Aset</td>
                <td>Jumlah</td>
                <td>Harga Satuan</td>
                <td>Tanggal Pengeluaran</td>
                <td>Total Pengeluaran</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($pengeluaran as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p['username'] ?></td>
            <td><?php echo $p['nama_aset'] ?></td>
            <td><?php echo $p['jml_aset'] ?></td>
            <td>Rp<?php echo number_format($p['harga_aset'],0,',',',') ?></td>
            <td><?php echo $p['tgl_pengeluaran'] ?></td>
            <td>Rp<?php echo number_format($p['harga_aset'] * $p['jml_aset'],0,',',','); ?></td>
            <td> 
                <center>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal<?php echo $p['id_pengeluaran'];?>"><i class="fas fa-edit"></i>
                    </button>
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('pengeluaran/hapus/'.$p['id_pengeluaran']) ?>"><i class="fas fa-trash"></i></a>
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
            </div>
            <div class="modal-body">
<?php echo form_open_multipart('pengeluaran/tambahAksi'); ?>
            <div class="form-group font-weight-bold">
                <label>Username</label>
                <select class="form-control" id="username" name="id_user">
                    <?php foreach( $user as $u ) : ?>
                        <option value="<?= $u['id_user'] ?>"><?= $u['username'] ?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Nama Aset</label>
                <select class="form-control" id="jabatan" name="id_aset">
                    <?php foreach( $aset as $a ) : ?>
                        <option value="<?= $a['id_aset'] ?>"><?= $a['nama_aset'] ?></option>
                    <?php endforeach; ?>
                    </select>
            <p class="text-info" data-toggle="modal" data-target="#exampleModall">Tidak ada nama aset diatas? Tambahkan aset disini!</p>
            </div>
            <!-- modal untuk tambah data -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body font-weight-bold">
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
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group font-weight-bold">
                <label>Tanggal Pengeluaran</label>
                <input type="date" name="tgl_pengeluaran" class="form-control">
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

<!-- modal untuk edit data -->

<!-- Modal -->
<?php $no = 0;
foreach ($pengeluaran as $p) : $no++; ?>
<div class="modal fade" id="editmodal<?php echo $p['id_pengeluaran'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Ubah Data</h5>
            </div>
            <div class="modal-body font-weight-bold">
            <?php echo form_open_multipart('pengeluaran/ubahAksi'); ?>
            <div class="form-group">
                <label>Username</label>
                <select class="form-control" id="username" name="id_user">
                    <?php foreach( $user as $u ) : ?>
                        <option value="<?= $u['id_user'] ?>"><?= $u['username'] ?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label>Nama Aset</label>
                <select class="form-control" id="jabatan" name="id_aset">
                    <?php foreach( $aset as $a ) : ?>
                        <option value="<?= $a['id_aset'] ?>"><?= $a['nama_aset'] ?></option>
                    <?php endforeach; ?>
                    </select>
            </div>
            <div class="form-group">
                <label>Tanggal Pengeluaran</label>
                <input type="date" name="tgl_pengeluaran" class="form-control">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <?php echo form_close() ?>
            </div>
        </div> 
    </div>
</div>
<?php endforeach; ?>

<!-- akhir modal -->