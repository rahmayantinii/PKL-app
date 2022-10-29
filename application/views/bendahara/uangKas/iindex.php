
<?php foreach ($bulan_pembayaran as $bln) : ?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-bottom-info py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-gray-800 mb-1"><?php echo $bln['nama_bulan'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-500 mb-1"><?php echo $bln['tahun'];  ?></div>
                    <div class="text-x font-weight-bold text-gray-700 mb-1">Rp. <?php echo number_format($bln['pembayaran_perminggu'],0,',',',');  ?> / minggu</div>
                    <div class="text-x font-weight-bold text-gray-700 mb-1">Total uang kas bulan ini :<br>

                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editmodal"><i class="fas fa-bars"></i>
                        </button>
                        <a onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>