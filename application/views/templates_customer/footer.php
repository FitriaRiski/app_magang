<footer class="footer fixed-bottom" style="padding: 10px 0; background-color: #002f5f; color: #ffffff; text-align: center; font-size: 14px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="copyright-text">
          <p>
            KELURAHAN KESATRIAN || INFORMASI PELAYANAN 
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/assets_shop') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="<?= base_url('assets/assets_shop') ?>/js/custom.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/owl.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/slick.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/isotope.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/accordions.js"></script>

<script language="text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                    // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value='';         // with more chance of typos
      t.style.color='#fff';
    }
  }
</script>
