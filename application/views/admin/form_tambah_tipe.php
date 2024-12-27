<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Input Jenis Berita</h1>
    </div>

    <form action="<?= base_url('admin/data_tipe/tambah_tipe_aksi') ?>" method="post">
      <div class="form-group"> 
        <label for="">Alias Jenis Berita</label>
        <input type="text" name="genre" class="form-control">
        <?= form_error('genre', '<div class="text-small text-danger">', '</div>') ?>
      </div>
      <div class="form-group"> 
        <label for="">Jenis Berita</label>
        <input type="text" name="genre_name" class="form-control">
        <?= form_error('genre_name', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-warning">Reset</button>

    </form>


  </section>
</div>