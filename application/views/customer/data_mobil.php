<!-- Page Content -->
<!-- Banner Starts Here -->
<!-- <div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Fleet</h4>
            <h2>Choose from our fleet!</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> -->

<!-- Banner Ends Here -->

<div style="height: 40px;"></div>

<section class="blog-posts grid-system">
  <div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="all-blog-posts">
      <div class="row">

        <?php foreach($buku as $mb): ?>
        <div class="col-md-4 col-sm-6">
          <div class="blog-post">
            <div class="blog-thumb">
              <img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="">
            </div>
            <div class="down-content">
              <a href="#"><h4><?= $mb->nama_buku; ?></h4></a>
              <div class="post-options">
                <div class="row">
                  <div class="col-lg-12">
                    <ul class="post-tags">
                      <li><i class="fa fa-bullseye"></i></li>
                      <li><a href="<?= base_url('customer/data_mobil/detail_mobil/'.$mb->id_buku) ?>"> | Detail</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<div style="height: 180px;"></div>


