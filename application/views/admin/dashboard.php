<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard Kelurahan Kesatrian</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-home"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Berita</h4>
            </div>
            <div class="card-body">
              <?= $buku; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Data Pengguna</h4>
            </div>
            <div class="card-body">
              <?= $customer; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
      
