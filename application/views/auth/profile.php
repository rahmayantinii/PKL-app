<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 font-weight-bold text-gray-800"><?= $title; ?></h1>
</div>

<?php foreach($user as $u) : ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/pic.png'); ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nama : <?= $u['nama_lengkap']; ?></h5>
        <p class="card-text">Username : <?= $u['username']; ?></p>
        <p class="card-text"><small class="text-muted">Nama Jabatan : <?= $u['nama_jabatan']; ?></small></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>        