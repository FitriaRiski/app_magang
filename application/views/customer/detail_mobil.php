<!-- Banner Starts Here -->
<div class="container">
  <div style="height: 150px;"></div>

  <div class="card">
    <div class="card-body">
      <?php foreach ($detail as $dt): ?>
        <div class="row">
          <div class="col-md-6">
            <img width="500px;" src="<?= base_url('assets/upload/') . $dt->gambar; ?>" alt="">
          </div>
          <div class="col-md-6">
            <table class="table">
              <tr>
                <th>Judul Berita</th>
                <td><?= $dt->nama_buku; ?></td>
              </tr>
              <tr>
                <th>Deskripsi</th>
                <td><?= $dt->deskripsi; ?></td>
              </tr>
              <tr>
                <th>Edisi</th>
                <td><?= $dt->warna; ?></td>
              </tr>
              <tr>
                <th>Tanggal</th>
                <td><?= $dt->tahun; ?></td>
              </tr>
              <tr>
                <th>Status</th>
                <td>
                  <?php if ($dt->status == '1') {
                    echo "Valid";
                  } else {
                    echo "Tidak Valid";
                  } ?>
                </td>

              </tr>
              <tr>
              </tr>
            </table>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<!-- Banner Ends Here -->

<div style="height: 180px;"></div>