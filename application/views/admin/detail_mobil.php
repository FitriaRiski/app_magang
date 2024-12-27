<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail Berita</h1>
    </div>
  </section>

  <?php foreach($detail as $dt): ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-5">
            <img width="110%;" src="<?= base_url('assets/upload/'). $dt->gambar; ?>" alt="">
          </div>
          <div class="col-md-7">
            <table class="table">
              <tr>
                <td>Jenis Berita</td>
                <td>
                  <?php 
                    if($dt->genre == "Pengumuman Resmi"){
                      echo "Pengumuman Resmi";
                    }
                    elseif($dt->genre == "Kegiatan Kelurahan"){
                      echo "Kegiatan Kelurahan";
                    }
                    elseif($dt->genre == "Informasi Kepegawaian"){
                      echo "Informasi Kepegawaian";
                    }
                    else{ ?>
                      <span class="text-danger">Jenis berita belum terdaftar</span>
                    <?php }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Judul Berita</td>
                <td><?= $dt->nama_buku; ?></td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td><?= $dt->deskripsi; ?></td>
              </tr>
              <tr>
                <td>Edisi</td>
                <td><?= $dt->warna; ?></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td><?= $dt->tahun; ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>
                  <?php
                  if($dt->status == "0"){ ?>
                    <span class="badge badge-danger">Tidak Valid</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Valid</span>
                  <?php } ?>
                </td>
              </tr>
            </table>

            <a href="<?= base_url('admin/data_mobil'); ?>" class="btn btn-sm btn-danger ml-4">Kembali</a>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
</div>
