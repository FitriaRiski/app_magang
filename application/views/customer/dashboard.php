<!-- Page Content -->
<br><br><br><img src="<?= base_url('assets/assets_shop') ?>/images/mmainbanner.png" class="card-img-top"
  style="border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: auto; object-fit: cover; margin-top: 20px; margin-bottom: 30px;"
  alt="mainbenner">
<!-- Banner Starts Here -->

<style>
  .main-banner {
    padding: 20px 0;
  }

  .card {
    border-radius: 10px;
    /* Mengurangi radius sudut kotak */
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    /* Menambahkan bayangan kotak untuk efek kedalaman */
  }

  .card-img-top {
    width: 100%;
    height: 200px;
    /* Mengurangi tinggi gambar */
    object-fit: cover;
    /* Menjaga rasio gambar */
  }

  .card-body {
    padding: 1rem;
    /* Mengurangi padding di dalam kotak */
  }

  .card-title {
    font-family: Rosario;
    font-weight: bold;
    color: darkblue;
    font-size: 20px;
    /* Mengurangi ukuran font judul */
  }

  .card-text {
    font-family: Rosario;
    color: orange;
    font-size: 18px;
    /* Mengurangi ukuran font teks */
  }

  .meta-category span {
    display: inline-block;
    margin-right: 10px;
    /* Mengurangi jarak antar ikon */
  }

  .meta-category {
    margin-top: 10px;
  }

  .container-fluid {
    padding: 0 15px;
    /* Mengurangi padding di container */
  }

  @media (max-width: 768px) {
    .card-img-top {
      height: 150px;
      /* Menyesuaikan tinggi gambar pada perangkat kecil */
    }
  }

  .image-container img {
    width: 100%;
    /* Gambar akan menyesuaikan lebar kontainer */
    height: auto;
    /* Menjaga aspek rasio gambar */
    border-radius: 10px;
    /* Tambahkan radius jika diperlukan */
    object-fit: cover;
    /* Menjaga tampilan gambar */
    display: block;
    margin: 0 auto;
  }

  .image-container {
    margin-bottom: 20px;
    /* Jarak antar gambar */
  }

  .map-container {
    margin: 20px 0;
    text-align: center;
  }

  iframe {
    width: 100%;
    height: 400px;
    border: 0;
  }

  /*ini buat bg sectiion hehe*/

  .carousel-caption {
    background: rgba(0, 0, 0, 0.6);
    /* Background transparan untuk teks */
    padding: 10px;
    border-radius: 8px;
  }

  .carousel-caption h5,
  .carousel-caption p {
    color: #fff;
    /* Pastikan teks tetap putih */
  }

  .carousel-item img {
    height: 500px;
    object-fit: cover;
    /* Menjaga gambar agar tidak terdistorsi */
    width: 100%;
  }

  /* ini untuk galeri */
  .carousel-control-prev,
  .carousel-control-next {
    width: 60px;
    height: 60px;
    top: 50%;
    transform: translateY(-50%);
    background-color: orangered;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    border: 2px solid white;
    z-index: 10;
  }

  .carousel-control-prev {
    left: -60px;
  }

  .carousel-control-next {
    right: -60px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 25px;
    height: 25px;
    background-color: white;
    mask-size: contain;
    mask-position: center;
    mask-repeat: no-repeat;
  }

  .carousel-control-prev-icon {
    mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3E%3Cpath d='M11.354 1.146a.5.5 0 0 1 0 .708L6.207 7l5.147 5.146a.5.5 0 0 1-.708.708l-5.5-5.5a.5.5 0 0 1 0-.708l5.5-5.5a.5.5 0 0 1 .708 0z'/%3E%3C/svg%3E");
  }

  .carousel-control-next-icon {
    mask-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3E%3Cpath d='M4.646 1.146a.5.5 0 0 0 0 .708L9.793 7l-5.147 5.146a.5.5 0 0 0 .708.708l5.5-5.5a.5.5 0 0 0 0-.708l-5.5-5.5a.5.5 0 0 0-.708 0z'/%3E%3C/svg%3E");
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    background-color: #ff8c00;
  }

  /*text caption browww yang galeri*/
  .carousel-caption h5 {
    font-size: 1.5rem;
    /* Ukuran font untuk judul */
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }

  .carousel-caption p {
    font-size: 1rem;
    /* Ukuran font untuk deskripsi */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  }
</style>

<br> <br> <br>
<div class="image-container">
  <img src="<?= base_url('assets/assets_shop') ?>/images/informasi.png" class="card-img-top"
    style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 30px; width: 100%; max-width: 700px; object-fit: cover; display: block; margin: 0 auto;"
    alt="suratpemisah">
</div>
</head>

<body>
  <div class="main-banner header-text py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Card 1 -->
        <br>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/pengantar.png" class="card-img-top"
              alt="Surat Pengantar Logo">
            <div class="card-body text-center">
              <h5 class="card-title">SURAT PENGANTAR</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat pengantar RT dan RW</p>
              <p class="card-text">Foto usaha (domisili / keterangan usaha)</p>
              <p class="card-text">Foto sekolah (domisili sekolah)</p>
            </div>
          </div>
          <br>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/keterangan.png" class="card-img-top"
              alt="Surat Keterangan Logo">
            <div class="card-body text-center">
              <h5 class="card-title">SURAT KETERANGAN</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat pengantar RT dan RW</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/skck.png" class="card-img-top" alt="SKCK Logo">
            <div class="card-body text-center">
              <h5 class="card-title">SKCK</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat pengantar RT dan RW</p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/sktm.png" class="card-img-top" alt="SKTM Logo">
            <div class="card-body text-center">
              <h5 class="card-title">SKTM</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat pengantar RT dan RW</p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/tenaker.png" class="card-img-top"
              alt="Tenaga Kerja Logo">
            <div class="card-body text-center">
              <h5 class="card-title">TENAGA KERJA</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat Pengantar RT dan RW</p>
              <p class="card-text">Surat izin keluarga (Opsional)</p>
              <p class="card-text">Surat pernyataan PT</p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/asabritaspen.png" class="card-img-top"
              alt="Asabri dan Taspen Logo">
            <div class="card-body text-center">
              <h5 class="card-title">ASABRI DAN TASPEN</h5>
              <p class="card-text">KTP</p>
              <p class="card-text">KK</p>
              <p class="card-text">Surat Pengantar RT dan RW</p>
              <p class="card-text">Skep kematian</p>
              <p class="card-text">Akta kematian</p>
              <p class="card-text">Surat dari kesatuan</p>
            </div>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/nikah.png" class="card-img-top" alt="nikahlogo">
            <div class="card-body text-center">
              <h5 class="card-title">NIKAH</h5>
              <p class="card-text"> KTP dan KK masing masing mempelai 2 lembar</p>
              <p class="card-text"> KTP dan KK masing masing orang tua mempelai 2 lembar
              </p>
              <p class="card-text"> Surat pengantar RT dan RW</p>
              <p class="card-text"> Foto kedua mempelai latar belakang biru ukuran 3 x 4
              </p>
              <p class="card-text"> FC akta kelahiran / ijazah kedua mempelai</p>
              <p class="card-text"> FC surat kematian / surat cerai (jika dibutuhkan)
              </p>
              <p class="card-text"> Surat keterangan sehat dari puskesmas Kendalkerep
              </p>
              <p class="card-text"> Rekom nikah dari KUA suami (jika menikah di
                kesatrian)</p>
              <p class="card-text"> KTP dan KK wali nikah 2 lembar</p>
              <p class="card-text"> FC surat nikah orang tua</p>
              <p class="card-text"> Map kertas</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/ahliwaris.png" class="card-img-top" alt="nikahlogo">
            <div class="card-body text-center">
              <h5 class="card-title">AHLI WARIS</h5>
              <p class="card-text">Pengantar dari RT/RW</p>
              <p class="card-text">Fotokopi Kutipan Akta Kematian Pewaris</p>
              <p class="card-text">Fotokopi Surat Nikah Pewaris </p>
              <p class="card-text">Fotokopi Kartu Keluarga (KK) seluruh Ahli Waris</p>
              <p class="card-text">Kartu Tanda Penduduk (KTP) seluruh Ahli Waris</p>
              <p class="card-text">Fotokopi Akta Kelahiran seluruh Ahli Waris</p>
              <p class="card-text">Meterai Rp 10.000,- (sepuluh ribu rupiah)</p>
              <p class="card-text">Draft Surat Pernyataan Ahli Waris dibantu oleh Kelurahan</p>
              <p class="card-text">Dokumentasi foto penandatanganan Surat Pernyataan Waris</p>
              <p class="card-text">Dokumen dibuat rangkap 3, (1 Surat bermaterai dan 1 rangkap untuk pemohon, 1 rangkap
                untuk arsip Kelurahan, 1 rangkap Arsip Kecamatan)</p>
              <p class="card-text">Dalam kasus tertentu ada persyaratan tambahan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <img src="<?= base_url('assets/assets_shop') ?>/images/keramaian.png" class="card-img-top"
              alt="keramaianlogo">
            <div class="card-body text-center">
              <h5 class="card-title">IZIN KERAMAIAN</h5>
              <p class="card-text">Mengisi Formulir bermaterei cukup</p>
              <p class="card-text">Fotokopi KTP Ketua Panitia atau penyelenggara</p>
              <p class="card-text">Proposal Uraian Kegiatan</p>
              <p class="card-text">Rekomendasi Tempat/Gedung/Fasilitas Umum yang mengetahui dan memberikan izin
                penggunaan tempat</p>
              <p class="card-text">Bukti titipan pembayaran pajak hiburan / tontonan dari Dinas Pendapatan</p>
              <p class="card-text">Surat pernyataan kesanggupan bermaterei cukup asli dan fotokopi rangkap 1</p>
              <p class="card-text">Asli Surat Izin Keramaian Umum dan fotokopi rangkap 1 (satu) yang telah habis masa
                berlakunya (untuk Perpanjangan / Daftar Ulang Izin Keramaian Umum / Tontonan)</p>
              <p class="card-text">Surat pernyataan kesanggupan bermaterei cukup, asli dan fotokopi rangkap 1 (satu)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- info? -->

<div class="image-container">
  <img src="<?= base_url('assets/assets_shop') ?>/images/jadwalll.png" class="card-img-top"
    style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 30px; width: 100%; max-width: 700px; object-fit: cover; display: block; margin: 0 auto;"
    alt="jadwalpemisah">
</div>
<section class="blog-posts grid-system">
  <div class="container">
    <div class="all-blog-posts">
      <div class="image-container">
        <img src="<?= base_url('assets/assets_shop') ?>/images/jadwal1.png" alt="Jadwal Kelurahan">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="all-blog-posts">
      <div class="image-container">
        <img src="<?= base_url('assets/assets_shop') ?>/images/jadwal2.png" alt="Jadwal Dispenduk">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="all-blog-posts">
      <div class="image-container">
        <img src="<?= base_url('assets/assets_shop') ?>/images/nomor.png" alt="nomorpelayanan">
      </div>
    </div>
  </div>
</section>
<!-- ending infoo -->

<section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Tertarik Dengan Informasi Terbaru?</span>
              <h4>Silahkan, cek informasi terbaru disini!</h4>
            </div>
            <div class="col-lg-4">
              <div class="main-button">
                <a href="<?= base_url('customer/data_mobil') ?>">Klik Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- galeri -->
<section>
  <div class="image-container">
    <br><br>
    <img src="<?= base_url('assets/assets_shop') ?>/images/fasilitas.png" class="card-img-top"
      style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 30px; width: 100%; max-width: 700px; object-fit: cover; display: block; margin: 0 auto;"
      alt="fasilitaspemisah">
  </div>
</section>
<section class="gallery-section">
  <div class="container">
    <br>
    <!-- Carousel -->
    <div id="photoGallery" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/assets_shop') ?>/images/pelkel.jpg" class="d-block w-100" alt="image1" />
          <div class="carousel-caption d-none d-md-block">
            <h5>PELAYANAN KELURAHAN KESATRIAN</h5>
            <p>Melayani pembuatan surat pengantar, keterangan, SKTM, nikah, dll.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/assets_shop') ?>/images/peldis.jpg" class="d-block w-100" alt="image2" />
          <div class="carousel-caption d-none d-md-block">
            <h5>PELAYANAN DISPENDUKCAPIL</h5>
            <p>Melayani pembuatan dan pembaharuan data KK, KTP dan AKTA.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/assets_shop') ?>/images/ahliwaris.jpg" class="d-block w-100" alt="image3" />
          <div class="carousel-caption d-none d-md-block">
            <h5>PELAYANAN AHLI WARIS</h5>
            <p>Melayani pembuatan berkas ahli waris.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/assets_shop') ?>/images/aula.jpg" class="d-block w-100" alt="image4" />
          <div class="carousel-caption d-none d-md-block">
            <h5>AULA</h5>
            <p>Lokasi pelaksanaan rapat dan kegiatan lain.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/assets_shop') ?>/images/lurah.jpg" class="d-block w-100" alt="image5" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Ruang Lurah</h5>
            <p>Lokasi permintaan diskusi dan persetujuan berkas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/assets_shop') ?>/images/pps.jpg" class="d-block w-100" alt="image5" />
          <div class="carousel-caption d-none d-md-block">
            <h5>PPS</h5>
            <p>Lokasi pengurusan kegiatan PPS.</p>
          </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <button class="carousel-control-prev custom-control" type="button" data-bs-target="#photoGallery"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
      </button>
      <button class="carousel-control-next custom-control" type="button" data-bs-target="#photoGallery"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"> </span>
      </button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</section>
<!-- ebding galeri -->


<!-- sesi blog -->
<div class="image-container">
  <br><br>
  <img src="<?= base_url('assets/assets_shop') ?>/images/sertifikat.png" class="card-img-top"
    style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 30px; width: 100%; max-width: 700px; object-fit: cover; display: block; margin: 0 auto;"
    alt="sertifikatpemisah">
</div>
<section class="blog-posts grid-system">
  <div class="container">
    <div class="all-blog-posts">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/assets_shop') ?>/images/sertif1.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Desa/ Kelurahan Bersih dan Lestari (BERSERI) Provinsi Jawa Timur Tahun 2022</h4>
                <p>Tanggal: 12 September 2022</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/assets_shop') ?>/images/sertif2.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Kelurahan Dengan Pembayaran Iuran Bulan Berjalan Tahun 2024</h4>
                <p>Tanggal: 2024</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/assets_shop') ?>/images/sertif3.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Keberhasilan Dalam Program Percepatan Penurunan Stunting Di Kota Malang Tahun 2023</h4>
                <p>Tanggal: 2023</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
            <img src="<?= base_url('assets/assets_shop') ?>/images/sertif4.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Penghargaan Atas Terlaksananya Universal Health Coverage</h4>
                <p>Tanggal: 13 Agustus 2018</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/assets_shop') ?>/images/sertif5.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
              <h4>Juara 1 Dalam Rangka Memperingati "Hari Krida Pertanian Ke-51" Yang Dilaksanakan Oleh Dinas Ketahanan Pangan dan Pertanian Kota Malang Serta Bekerjasama Dengan Tim Penggerak PKK Kota Malang</h4>
              <p>Tanggal: 22 Juli 2023</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
            <img src="<?= base_url('assets/assets_shop') ?>/images/sertif6.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Juara 2 PBB Bagi Linmas Kelurahan Keesatrian Se Kecamatan Blimbing Dalam Rangka HUT RI Ke 78</h4>
                <p>Tanggal: 5 Agustus 2023</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/assets_shop') ?>/images/sertif7.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Realisasi Anggaran Tertinggi Per-September Tahun Anggaran 2023 Dengan Prosentase Realisasi Anggaran 81,82%</h4>
                <p>Tanggal: 2 Oktober 2023</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
            <img src="<?= base_url('assets/assets_shop') ?>/images/sertif8.jpeg" alt="">
            </div>
            <div class="down-content">
              <a href="#">
                <h4>Penghargaan Tempat Internship Program Studi Administrasi Publik Universitas Tribhuwana Tunggadewi Malang</h4>
                <p>Tanggal: 29 Juli-29 Agustus 2019</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<!-- end sesi blog -->
<br><br>

<div class="row justify-content-md-center">
  <div class="col-md-3">
    <div class="main-button">
      <!-- <a href="testimonials.html">Lanjutkan Membaca</a> -->
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="image-container">
  <img src="<?= base_url('assets/assets_shop') ?>/images/lokasi.png" class="card-img-top"
    style="border-top-left-radius: 10px; border-top-right-radius: 10px; height: 30px; width: 100%; max-width: 700px; object-fit: cover; display: block; margin: 0 auto;"
    alt="lokasipemisah">
</div>
<div class="container">
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d725.167905798208!2d112.63847795363205!3d-7.9773050667187295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6283ebbcb41a3%3A0x50ee446448d66139!2sVillage%20Government%20Office%20Kesatrian%20Malang!5e0!3m2!1sen!2sid!4v1733648301340!5m2!1sen!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<div style="height: 180px;"></div>