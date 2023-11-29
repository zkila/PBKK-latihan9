<div class="container mt-5 pt-5">
  <a href="<?= base_url(); ?>" class="btn btn-secondary mb-3">
    <i class="fas fa-arrow-left me-2"></i>Kembali
  </a>
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Tambah Karyawan</h5>
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo base_url('tambah_proses'); ?>">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Karyawan</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="no_telp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control" id="no_telp" name="no_telp" required>
        </div>
        <div class="mb-3">
          <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="mb-3">
          <label for="golongan" class="form-label">Golongan</label>
          <select class="form-select" id="golongan" name="golongan" required>
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save me-2"></i>Simpan
        </button>
      </form>
    </div>
  </div>
</div>