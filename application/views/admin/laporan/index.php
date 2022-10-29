<div class="container-fluid">
<!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-info">Laporan
        </div>
        <div class="card-body" align="center">
        <div class="table-center">
        <table id="dataTable" width="100%" cellspacing="0">
            <thead class="font-weight-bold text-gray-900" style="background-color: ;">
                <tr>
                    <td class="h3 font-weight-bold text-gray-800">Pemasukan</td>
                    <td class="col-sm-2 h3 font-weight-bold text-gray-800">Pengeluaran</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><h6 class="m-0 font-weight-bold text-gray-800">Pilih Bulan Pembayaran
                        <select class="form-control col-sm-10" id="bulan_pembayaran" name="id_bulan">
                            <?php foreach( $bulan_pembayaran as $b ) : ?>
                                <option value="<?= $b['id_bulan'] ?>"><?= $b['nama_bulan'].' | '. $b['tahun'].' | '. number_format($b['pembayaran_perminggu'],0,',',',');  ?></option>
                        </select></td>
                    <td><h6 class="m-0 font-weight-bold text-gray-800">Dari Tanggal <br>
                        <input type="date" name=""></td>
                    <td><h6 class="m-0 font-weight-bold text-gray-800">Sampai Tanggal <br>
                        <input type="date" name=""></td>
                        
                </tr>
                <tr>
                    <td>
                    <a href="<?php echo base_url('laporan/laporanMasuk/'.$b['id_bulan']); ?>"><button class="btn btn-sm btn-info">Laporan Pemasukan</button></a> 
                    <?php endforeach; ?>   
                    </td>
                    <td>
                        <a href="<?php echo base_url('laporan/laporanKeluar'); ?>"><button class="btn btn-sm btn-info">Laporan Pengeluaran</button></a>
                    </td>
            </tr>
    </tbody>
    </table><br><br>
    </div>
    </div>
    </div>

</div>
    

                    