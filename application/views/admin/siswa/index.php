<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
</div>


<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">DataTables Siswa
        <a href="<?php echo base_url('siswa/tambah') ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-plus">
            Tambah Data</i></a>
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>NISN</td>
                <td>Nama Siswa</td>
                <td>Jenis Kelamin</td>
                <td>No. Handphone</td>
                <td>Email</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($siswa as $s) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $s['nisn'] ?></td>
            <td><?php echo $s['nama_siswa'] ?></td>
            <td><?php echo $s['jk'] ?></td>
            <td><?php echo $s['nohp'] ?></td>
            <td><?php echo $s['email'] ?></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('siswa/ubah/'.$s['id_siswa']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('siswa/hapus/'.$s['id_siswa']) ?>"><i class="fas fa-trash"></i></a>
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
                <?php echo form_open_multipart('siswa/tambahAksi'); ?>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_siswa" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label>
                        <input type="radio" name="jk" value="L"> Laki-laki |
                        <input type="radio" name="jk" value="P"> Perempuan
                    </label>
                </div>
                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" name="nohp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
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
        foreach ($siswa as $s) : $no++; ?>
        <div class="modal fade" id="editmodal<?php echo $s['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body font-weight-bold">
                <?php echo form_open_multipart('siswa/ubahAksi'); ?>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id_siswa" class="form-control" value="<?php echo $s['id_siswa']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" name="nisn" class="form-control" value="<?php echo $s['nisn']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_siswa" class="form-control" value="<?php echo $s['nama_siswa']; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label>
                        <input type="radio" name="jk" value="L" <?php if($s['jk']=='L') echo 'checked'?>> Laki-laki |
                        <input type="radio" name="jk" value="P" <?php if($s['jk']=='P') echo 'checked'?>> Perempuan
                    </label>
                </div>
                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" name="nohp" class="form-control" value="<?php echo $s['nohp']; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $s['email']; ?>">
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
                    