<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title ?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
    <?php foreach($bulan_pembayaran as $b) : ?>
    <div class="mb-4 text-center">
    <h3 class="font-weight-bold text-gray-800">Laporan Pemasukan : <?php echo $b['nama_bulan']; ?> <?php echo $b['tahun']; ?></h3><br>
    <h4 class="font-weight-bold text-gray-800">
        Rp<?php echo number_format($b['pembayaran_perminggu'],0,',',',') ; ?> /minggu</h4>
    <?php endforeach; ?>
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
                    <td>Status</td>
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
                <td><a href="" class="badge badge-danger">-8,000</a> / <a href="" class="badge badge-success">Lunas</a></td>

            </tr>
        <?php endforeach; ?> 
    </tbody>
    <tr class="font-weight-bold">
            <td colspan="7">Jumlah Pemasukan</td>
            <td>Rp1,000,000</td>
    </tr>
    </table>
    </div>
    </div>
</body>
</html>

<script type="text/javascript">
    window.print();
</script>