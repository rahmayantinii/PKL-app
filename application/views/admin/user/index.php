
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
</div>



<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">DataTables User
        <a href="<?php echo base_url('user/tambah') ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-plus">
            Tambah Data</i></a>
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Nama Lengkap</td>
                <td>Nama Jabatan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($user as $u) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u['username'] ?></td>
            <td><?php echo $u['nama_lengkap'] ?></td>
            <td><?php echo $u['nama_jabatan'] ?></td>
            <td>
                <center>
                                   
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" 
                    href="<?php echo base_url('user/hapus/'.$u['id_user']) ?>"><i class="fas fa-trash"></i></a>
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
            <div class="modal-body font-weight-bold">
            <?php echo form_open_multipart('user/tambahAksi'); ?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama Jabatan</label>
                    <select class="form-control" id="jabatan" name="id_jabatan">
                    <?php foreach( $jabatan as $jbt ) : ?>
                        <option value="<?= $jbt['id_jabatan'] ?>"><?= $jbt['nama_jabatan'] ?></option>
                    <?php endforeach; ?>
                    </select>
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
        foreach ($user as $u) : $no++; ?>
        <div class="modal fade" id="modal<?php echo $u['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body font-weight-bold">
                <?php echo form_open_multipart('user/ubahAksi'); ?>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id_siswa" class="form-control" value="<?php echo $u['id_user']; ?>" readonly>
                </div>
                <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $u['username']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $u['nama_lengkap']; ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $u['password']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Jabatan</label>
                        <select class="form-control" id="jabatan" name="id_jabatan">
                        <?php foreach( $jabatan as $jbt ) : ?>
                            <?php if( $jbt == $user['nama_jabatan']) : ?>
                            <option value="<?= $jbt; ?>" selected><?= $jbt; ?></option>
                        <?php else: ?>
                            <option value="<?= $jbt; ?>"><?= $jbt; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                <?php echo form_close() ?>
            </div>
          </div>
        </div>
     </div>
    <?php endforeach; ?>


<!-- akhir model -->