<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>Kelurahan Kesatrian | Informasi</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/assets_shop') ?>/css/owl.css">
  <style>
    .navbar a.nav-link {
      color: #ffffff !important;
    }

    .navbar-toggler-icon {
      background-color: #ffffff !important;
    }

    .navbar.scrolled a.nav-link {
      color: #FF8C00 !important;
    }

    .navbar.scrolled .navbar-toggler-icon {
      background-color: #ffffff !important;
    }

    /* Menjaga warna putih pada teks 'KELURAHAN KESATRIAN' saat scroll */
    .navbar.scrolled .navbar-brand h2 {
      color: #ffffff !important;
    }
  </style>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header style="background-color: #003366;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #002f5f;">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/dashboard') ?>">
          <h2 style="color: #ffffff;">KELURAHAN KESATRIAN<em style="color: #add8e6;">.</em><em
              style="color: #FF8C00;">.</em><em style="color: #add8e6;">.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('customer/dashboard'); ?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('customer/visimisi'); ?>">Visi Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('customer/profil'); ?>">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('customer/data_mobil') ?>">Berita</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?= base_url('customer/transaksi') ?>">Transaksi Peminjaman</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
            </li>
            <?php if ($this->session->userdata('nama')) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">Welcome | Logout
                  <?= $this->session->userdata('nama'); ?></a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <script>
    // Menambahkan kelas 'scrolled' ke navbar saat di-scroll
    window.addEventListener('scroll', function () {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
</body>

</html>