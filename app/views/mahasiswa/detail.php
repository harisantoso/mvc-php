<div class="container mt-5">

  <h3 class="mt-3">Detail Mahasiswa</h3>

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
      <!-- <a href="<?= BASEURL; ?>/mahasiswa" class="card-link text-decoration-none">Back</a> -->
      <a href="<?= BASEURL; ?>/mahasiswa" class="badge bg-dark text-decoration-none">Back</a>
    </div>
  </div>

</div>