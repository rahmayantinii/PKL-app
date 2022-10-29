<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-6">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">DataTables Pengeluaran </h6>
        </div>

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead class="font-weight-bold text-gray-900" style="background-color: ;">
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Pesan</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach($pengeluaran as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p['username'] ?></td>
            <td>telah menambahkan pengeluaran <?php echo $p['nama_aset'] ?> <?php echo $p['jml_aset'] ?>pcs dengan biaya Rp<?php echo number_format($p['harga_aset'] * $p['jml_aset'],0,',',','); ?></td>
            <td><?php echo $p['tgl_pengeluaran'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        </div>
        </div>
    </div>
</div>

