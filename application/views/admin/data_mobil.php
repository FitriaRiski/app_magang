<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Berita</h1>
    </div>
    
    <a href="<?= base_url('admin/data_mobil/tambah_mobil'); ?>" class="btn btn-primary mb-3">Tambah Data</a>
    <?= $this->session->flashdata('pesan'); ?>

    <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Jenis Berita</th>
          <th>Judul Berita</th>
          <th>Deskripsi</th>
          <!-- <th>Diskon</th> Kolom Diskon Baru hehe uwu -->
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach($buku as $mb): ?>
        <tr>
          <td><?= $no++; ?>.</td>
          <td>
            <img width="70px;" src="<?= base_url('assets/upload/'). $mb->gambar; ?>" alt="">
          </td>
          <td><?= $mb->genre; ?></td>
          <td><?= $mb->nama_buku; ?></td>
          <td><?= $mb->deskripsi; ?></td>
          <td>
            <?php if($mb->status == 0){ ?>
              <span class="badge badge-danger">Tidak Valid</span>
            <?php }
            else{ ?>
              <span class="badge badge-primary">Valid</span>
            <?php } ?>
          </td>
          <td>
            <a href="<?= base_url('admin/data_mobil/detail_mobil/'). $mb->id_buku; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
            <a onclick="return confirm('Yakin hapus?')" href="<?= base_url('admin/data_mobil/delete_mobil/'). $mb->id_buku; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
            <a href="<?= base_url('admin/data_mobil/update_mobil/'). $mb->id_buku; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>
</div>
