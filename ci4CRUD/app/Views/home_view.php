<div class="container mt-5 pt-5">
  <a href="<?= base_url('tambah'); ?>" class="btn btn-primary mb-3">
    <i class="fas fa-user-plus me-2"></i>Tambah Karyawan
  </a>
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Data Karyawan</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Nama Karyawan</th>
              <th>No. Telepon</th>
              <th>Tanggal Lahir</th>
              <th>Golongan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($karyawan as $row) : ?>
              <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['no_telp']; ?></td>
                <td><?= $row['tgl_lahir']; ?></td>
                <td class="text-center"><?= $row['golongan']; ?></td>
                <td class="text-center">
                  <a href="<?= base_url('edit/' . $row['id']); ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-user-edit me-2"></i>Edit
                  </a>
                  <button class="btn btn-danger btn-sm" onclick="confirmDelete('<?= $row['id']; ?>')">
                    <i class="fas fa-user-times me-2"></i>Hapus
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
            <?php if (count($karyawan) == 0) : ?>
              <tr>
                <td colspan="6" class="text-center">Data karyawan tidak ditemukan</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>