<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
</div>


<!-- DataTables Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">DataTables Jabatan
            <a href="<?php echo base_url('jabatan/tambah') ?>" class="btn btn-sm btn-info float-right"><i class="fas fa-plus">
            Tambah Data</i></a>
    </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>Nama Jabatan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($jabatan as $jbt) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $jbt['nama_jabatan'] ?></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-info" href="<?php echo base_url('jabatan/ubah/'.$jbt['id_jabatan']) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('jabatan/hapus/'.$jbt['id_jabatan']) ?>"><i class="fas fa-trash"></i></a>
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

