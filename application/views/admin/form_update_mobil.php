<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Update Berita</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <?php foreach($buku as $mb): ?>

        <form action="<?= base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Jenis Berita</label>
                <input type="hidden" name="id_buku" value="<?= $mb->id_buku; ?>">
                <select name="genre" id="" class="form-control">
                  <option value="<?= $mb->genre ?>"><?= $mb->genre_name ?></option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->genre ?>"><?= $tp->genre_name; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('genre', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Judul Berita</label>
                <input type="text" name="nama_buku" class="form-control" value="<?= $mb->nama_buku ?>">
                <?= form_error('nama_buku', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?= $mb->deskripsi ?>">
                <?= form_error('deskripsi', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Edisi</label>
                <input type="text" name="warna" class="form-control" value="<?= $mb->warna ?>">
                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tanggal</label>
                <input type="text" name="tahun" class="form-control" value="<?= $mb->tahun ?>">
                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option <?php if($mb->status == "1"){echo "selected='selected'";} ?> value="1">Valid</option>
                  <option <?php if($mb->status == "0"){echo "selected='selected'";} ?> value="0">Tidak Valid</option>
                </select>
                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <!-- Tampilkan gambar lama jika ada -->
                <?php if ($mb->gambar): ?>
                <img src="<?= base_url('assets/upload/') . $mb->gambar; ?>" width="100" alt="Gambar lama">
                <?php endif; ?>
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
              <button type="reset" class="btn btn-success mt-4">Reset</button>
            </div>
          </div>
        </form>

        <?php endforeach; ?>
      </div>
    </div>

  </section>
</div>




