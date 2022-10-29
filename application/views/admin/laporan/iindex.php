<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laporan</title>
</head>
<body>
	Filter Tanggal <br><br><hr>
	<form action="<?php echo base_url(); ?>Laporan/filter" method="post" target="_blank">

		Tanggal Awal <br>
		<input type="date" name="tglAwal" required=""><br>

		Tanggal Akhir <br>
		<input type="date" name="tglAkhir" required=""><br> <br>

		<input type="submit" value="Print">
		
	</form>

</body>
</html>

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
                <?php echo form_open_multipart('jabatan/tambahAksi'); ?>
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control">
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
        foreach ($jabatan as $jbt) : $no++; ?>
        <div class="modal fade" id="editmodal<?php echo $jbt['id_jabatan'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-gray-800" id="exampleModalLabel">Form Edit Data</h5>
              </div>
              <div class="modal-body font-weight-bold">
                <?php echo form_open_multipart('jabatan/ubahAksi'); ?>
                <div class="form-group">
                    <label>Id</label>
                    <input type="text" name="id_jabatan" class="form-control" value="<?php echo $jbt['id_jabatan']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" value="<?php echo $jbt['nama_jabatan']; ?>">
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
                    