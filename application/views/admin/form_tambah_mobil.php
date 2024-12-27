<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Input Berita</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Jenis Berita</label>
                <select name="genre" id="" class="form-control">
                  <option value="">--Pilih Jenis Berita--</option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->genre ?>"><?= $tp->genre_name; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('genre', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Judul Berita</label>
                <input type="text" name="nama_buku" class="form-control">
                <?= form_error('nama_buku', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control">
                <?= form_error('deskripsi', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Edisi</label>
                <input type="text" name="warna" class="form-control">
                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Tanggal</label>
                <input type="text" name="tahun" class="form-control">
                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option value="">--Pilih Status--</option>
                  <option value="1">Valid</option>
                  <option value="0">Tidak Valid</option>
                </select>
                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
              <button type="reset" class="btn btn-success mt-4">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
