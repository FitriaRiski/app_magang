<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Update Jenis Berita</h1>
    </div>

    <?php foreach($tipe as $tp): ?>
    <form action="<?= base_url('admin/data_tipe/update_tipe_aksi') ?>" method="post">
      <div class="form-group">
        <label for="">Alias Jenis Berita</label>
        <input type="hidden" name="id_tipe" value="<?= $tp->id_tipe; ?>">
        <input type="text" name="genre" class="form-control"  value="<?= $tp->genre; ?>">
        <?= form_error('genre', '<div class="text-small text-danger">', '</div>') ?>
      </div>
      <div class="form-group"> 
        <label for="">Jenis Berita</label>
        <input type="text" name="genre_name" class="form-control"  value="<?= $tp->genre_name; ?>">
        <?= form_error('genre_name', '<div class="text-small text-danger">', '</div>') ?>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-warning">Reset</button>

    </form>
    <?php endforeach; ?>

  </section>
</div>