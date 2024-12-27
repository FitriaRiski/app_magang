<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Jenis Berita</h1>
    </div>
    
    <a href="<?= base_url('admin/data_tipe/tambah_tipe'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
    <?= $this->session->flashdata('pesan'); ?>

    <table class="table table-stripped table-bordered table-hover">
      <thead>
        <tr>
          <th width="20px;">No</th>
          <th>Alias Jenis Berita</th>
          <th>Jenis Berita</th>
          <th width="180px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; 
        foreach($tipe as $tp): ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $tp->genre; ?></td>
          <td><?= $tp->genre_name; ?></td>
          <td>
            <a href="<?= base_url('admin/data_tipe/update_tipe/'). $tp->id_tipe; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
            <a onclick="confirm('Yakin hapus?')" href="<?= base_url('admin/data_tipe/delete_tipe/'). $tp->id_tipe; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </section>
</div>