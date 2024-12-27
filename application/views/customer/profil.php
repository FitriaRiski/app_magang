<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi dan Misi</title>

  <style>
    /* Import font Bebas Neue dari Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    /* Gaya untuk h1 */
    .visi-title {
      font-family: 'Bebas Neue', cursive;
      /* Font Bebas Neue */
      font-weight: bold;
      /* Bold */
      color: #003366;
      /* Warna biru tua */
      text-align: center;
      /* Rata tengah */
    }

    /* Gaya untuk h2 */
    .visi-subtitle {
      font-family: 'Bebas Neue', cursive;
      /* Font Bebas Neue */
      font-weight: normal;
      /* Normal weight */
      color: #FF8C00;
      /* Warna oranye gelap */
      text-align: left;
      /* Rata kiri */
      font-size: 25px;
      /* Menambah ukuran font */
    }


    /* Styling untuk elemen details */
    details {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    /* Gaya untuk paragraf dalam details */
    details p {
      padding: 10px;
      background-color: #f1f1f1;
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 18px;
      /* Perbesar ukuran font */
      line-height: 1.6;
      /* Menambah jarak antar baris */
    }

    /* Gaya untuk summary di dalam details */
    details summary {
      font-family: 'Bebas Neue', cursive;
      font-weight: normal;
      color: #003366;
      padding: 10px;
      cursor: pointer;
      font-size: 20px;
      /* Perbesar ukuran font */
    }


    /* Styling untuk gambar */
    .card-img-top {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      width: 100%;
      height: auto;
      object-fit: cover;
      margin-top: 20px;
      margin-bottom: 30px;
    }

    /* map broow */
    .map-container {
      margin: 20px 0;
      text-align: center;
    }

    iframe {
      width: 100%;
      height: 400px;
      border: 0;
    }

    /* gambarrr */
    .content-container {
      text-align: center;
      /* Memusatkan semua konten dalam container */
    }

    .center-image {
      display: block;
      margin: 0 auto;
      /* Memusatkan gambar secara horizontal */
      max-width: 100%;
      /* Membuat gambar responsif */
      height: auto;
      /* Menjaga rasio gambar */
    }
  </style>
</head><br><br><br>
<img src="<?= base_url('assets/assets_shop') ?>/images/profil.png" class="card-img-top"
  style="border-top-left-radius: 10px; border-top-right-radius: 10px; width: 100%; height: auto; object-fit: cover; margin-top: 20px; margin-bottom: 30px;"
  alt="visimisibanner">

<body>
  <h1 class="visi-title">daftar profil kelurahan kesatrian</h1> <br>

  <details>
    <summary class="visi-subtitle">Kondisi Wilayah</summary>
    <strong style="color: #003366;; display: block;  font-size: 18px; text-align: center;">BATAS ADMINISTRASI</strong>
    <br>
    <div style="margin-left: 40px; margin-right: 20px;">
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d725.167905798208!2d112.63847795363205!3d-7.9773050667187295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6283ebbcb41a3%3A0x50ee446448d66139!2sVillage%20Government%20Office%20Kesatrian%20Malang!5e0!3m2!1sen!2sid!4v1733648301340!5m2!1sen!2sid"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>


    <details>
      <summary>Batas Wilayah</summary>
      <p>Sebelah Utara&nbsp;&nbsp;&nbsp;&nbsp;: Kelurahan Bunulrejo <br>
        Sebelah Selatan&nbsp;: Kelurahan Jodipan <br>
        Sebelah Barat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Kelurahan Klojen dan Kidul Dalem <br>
        Sebelah Timur&nbsp;&nbsp;&nbsp;&nbsp;: Kelurahan Polehan</p>
    </details>

    <details>
      <summary>Jarak dari Pusat Pemerintahan Kelurahan</summary>
      <p>Pusat Pemerintahan Kecamatan : 4 Km <br>
        Pusat Pemerintahan Kota Administratif : 1 Km <br>
        Pusat Ibukota Propinsi : 90 Km <br>
        Pusat Ibukota Negara : 996 Km </p>
    </details><br>

    <strong style="color: #003366;; display: block;  font-size: 18px; text-align: center;">KONDISI FISIK DASAR</strong>
    <br>

    <details>
      <summary>Topografi dan Ketinggian</summary>
      <p>Kelurahan Kesatrian memiliki ketinggian 700 meter di atas permukaan laut dan mempunyai ketinggian yang
        bervariasi. Topografi di Kelurahan Kesatrian secara garis besar merupakan dataran tinggi.</p>
    </details>

    <details>
      <summary>Jenis dan Kemampuan Tanah</summary>
      <p>Tipe tanah yang ada di wilayah perencanaan hampir sama dengan tipe tanah di Kecamatan Blimbing, yaitu berupa
        tanah alluvial kelabu kehitaman.</p>
    </details>

    <details>
      <summary>Hidrologi</summary>
      <p>Daerah Kesatrian dilalui empat sungai besar. Dua sungai yang terbesar yaitu Sungai Brantas dan Sungai
        Brawijaya, menjadikan daerah ini menjadi salah satu daerah yang cukup subur di Kota Malang.</p>
      <p>Sumber-sumber air yang berada di Kelurahan Kesatrian berasal dari: <br>(a) PDAM, dan <br>(b) Air Sumur yang
        diusahakan oleh masyarakat sendiri</p>
    </details>

    <details>
      <summary>Iklim</summary>
      <p>Iklim di Kelurahan Kesatrian berkisar antara 24,30 – 32,20 C dengan curah hujan rata – rata 1183 mm / tahun.
      </p>
    </details>

    <strong style="color: #003366;; display: block;  font-size: 18px; text-align: center;">WILAYAH ADMINISTRASI</strong>
    <br>

    <details>
      <summary>Peta Wilayah Kesatrian</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/bataskelkesatrian.jpg'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Kelurahan Kesatrian merupakan salah satu kelurahan di Kecamatan Blimbing yang mempunyai luas area sebesar
          1.483 Km²
          dengan jumlah penduduk sekitar 11.340 jiwa (data bulan Oktober 2024). Kelurahan Kesatrian berbatasan dengan
          kelurahan
          lain yang mana di sebelah utara berbatasan dengan Kelurahan Bunulrejo, di sebelah timur berbatasan dengan
          Kelurahan
          Polehan, di sebelah selatan berbatasan dengan Kelurahan Jodipan, dan di sebelah barat berbatasan dengan
          Kelurahan Klojen.</p>
      </div>
    </details>

    <details>
      <summary>RW dan RT</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/trtrw.png'); ?>" alt="Peta Kesatrian" class="center-image">
        <p>Secara administratif Kelurahan Kesatrian terdiri atas 12 (dua belas) RW dan 70 RT. RW-06 kawasan rukun
          warga dengan wilayah terluas, yaitu sebesar 0,299 km2, atau sekitar 19,81% dari luas wilayah Kelurahan
          Kesatrian keseluruhanSementara RW-12 dengan luas wilayah paling sempit hanya sekitar 1,86% dari luas
          wilayah Kelurahan Kesatrian, atau seluas 0,028 km2.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Berdasarkan Gender</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tpendkel.png'); ?>" alt="Peta Kesatrian" class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024, jumlah
          penduduk Kelurahan Kesatrian pada tahun 2024 sebanyak 11.340 jiwa dengan penduduk yang bergender
          perempuan sebanyak 5.546 jiwa dan jumlah penduduk bergender laki-laki sebesar 5.794 jiwa.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Menurut Usia Produktif</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tusia.png'); ?>" alt="Peta Kesatrian" class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024,
          jumlah penduduk Kelurahan Kesatrian pada tahun 2024 sebanyak 11.340 jiwa dengan penduduk.
          Mengelompokan penduduk berdasarkan usia produtif dan non produktif. Penduduk yang tergolong usia
          non produktif berusia 0-14 tahun, sedangkan usia produktif 15-64 tahun. Penduduk kesatrian yang
          tergolong usia produktif berjumlah 8.184 jiwa dan non produktif 8.184 jiwa.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Menurut Kelompok Usia</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tusiausia.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024
          penduduk kelurahan kesatrian dapat dibagi menjadi laki-laki dan perempuan berdasarkan
          kelompok usia.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Menurut Tingkat Pendidikan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/ttingkatpendidikan.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024
          dapat dibagi menjadi penduduk laki-laki dan perempuan berdasarkan pendidikannya. Jumlah Peringkat
          paling tinggi sebagian besar yaitu memiliki tamatan tingkat pendidikan SLTA atau sederajat yaitu
          4.588 jiwa, dengan komposisi 2.831 laki-laki. Tamatan tingkat pendidikan SLTA/sederajat dan 1.757
          perempuan tamatan SLTA/sederajat.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Menurut Pekerjaan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tpekerjaan.jpeg'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024 dan data
          dari Dinas Kependudukan dan Catatan Sipil tahun 2024, penduduk kelurahan kesatrian dapat dibagi
          menjadi penduduk laki-laki dan perempuan berdasarkan pekerjaannya. Terdapat penduduk yang belum/tidak
          bekerja berjumlah 2.639 jiwa, Dengan komposisi 1.308 jiwa laki-laki dan 1.331 jiwa perempuan.
          Penduduk yang belum bekerja/tidak bekerja termasuk anak yang berusia belum memasuki sekolah.
          Jenis pekerjaan yang ada dikelurahan kesatrian yaitu mayoritas Tentara Nasional Indonesia (TNI)
          sebanyak 2.082 jiwa.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Penduduk Menurut Kepala Keluarga</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tkepkeluarga.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024 dan data
          dari Dinas Kependudukan dan Catatan Sipil tahun 2024 penduduk kelurahan kesatrian dapat dibagi
          menjadi penduduk laki- laki dan perempuan berdasarkan kepala keluarganya. Di Kelurahan kesatrian
          terdapat 3.932 kepala keluarga. dengan komposisi 3.330 jiwa bergender laki-laki dan 602 jiwa
          bergeder perempuan.</p>
      </div>
    </details>









    <details>
      <summary>Jumlah Penduduk Menurut Kepadatan Penduduk</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tkepadatanpenduduk.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan d Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian
          tahun 2024 dan data dari Dinas Kependudukan dan Catatan Sipil tahun 2024 didapatkan bahwa
          kepadatan penduduk yang paling mencolok berada di RW-02 dengan kepadatan penduduk 0,033 jiwa/m2
          dan menduduki prosentase kepadatan 24,29 %. Sedangkan kepadatan kedua berada pada RW-12 dengan
          kepadatan penduduk 0,029 jiwa/m2 dan menduduki prosentase kepadatan 21,31 %. Di kedua RW
          tersebut memang benar-benar RW yang tidak mempunyai fasilitas dari TNI atau bukan tanah hak milik TNI.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Keagamaan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tagama.png'); ?>" alt="Peta Kesatrian" class="center-image">
        <p>Berdasarkan survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024, sarana prasarana
          pada suatu wilayah menunjang aktivitas penduduknya, salah satunya sarana keagamaan untuk menunjang
          penduduknya dalam menjalankan ibadah sesuai keyakinannya. Sarana dan prasarana keagamaan yang paling
          banyak di Kelurahan Kesatrian yaitu bangunan masjid, terdapat 14 buah masjid dan 12 mushola.
          berdasarkan jumlah masjid & mushola yang begitu banyak, mayoritas penduduk keluaraha Kesatrian
          memeluk agama Islam. Sarana prasarana kegamaan lainnya terdapat bangunan gereja untuk menfasilitasi
          penduduk yang beragama Kristen. </p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Kesehatan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tkesehatan.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey sarana dan prasarana kesehatan di Kelurahan Kesatrian yang dilakukan oleh Tim
          Profil dan Monografi Kesatrian tahun 2024. Pada Kelurahan Kesatrian terdapat 15 buah posyandu. Dengan
          keberadaan posyandu di tiap-tiap RW, maka pelayanan dasar di bidang kesehatan terutama bagi anak-anak
          dan ibu hamil sudah mencapai keseluruhan penduduknya. Selain itu pada kelurahan kesatrian terdapat
          rumah sakit yang bernama (rumah Sakit Bhirawa” tepatnya berada di wilayah RW 09. </p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Pendidikan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/ttpendidikan.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey Tim Profil dan Monografi Kesatrian tahun 2024, sarana dan prasarana pendidikan
          formal di Kelurahan Kesatrian meliputi 5 buah SD/sederajat, maka pelayanan dasar di bidang pendidikan
          dengan program pendidikan dasar 12 tahun terpenuhi. Selain itu terdapat 8 buah Pendidikan TK.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Rekreasi dan Hiburan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/trekreasi.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024, Sarana dan
          prasarana rekreasi dan hiburan di Kelurahan Kesatrian terdapat 15 buah. Artinya sarana prasarana
          dapat menunjang kondisi psikologis penduduknya dalam taraf yang baik atau stabil, sehingga tidak
          menimbulkan gejala-gejala psikis yang timbul akibat rutinitas, hiburan dan rekreasi menjadi tempat
          refresehing dari kegiatan sehari-hari. Tempat wisata di RW 12 yaitu “Kampung Tridi” dan di RW 04
          bernama “Taman Rampal”. Pada tahun 2024 di Kelurahan Kesatrian terdapat tempat wisata yang baru
          didirikan yaitu Tempat wisata Pemancingan yang terletak di RW 10. </p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Rekreasi dan Hiburan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/trekreasi.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024, Sarana dan
          prasarana rekreasi dan hiburan di Kelurahan Kesatrian terdapat 15 buah. Artinya sarana prasarana
          dapat menunjang kondisi psikologis penduduknya dalam taraf yang baik atau stabil, sehingga tidak
          menimbulkan gejala-gejala psikis yang timbul akibat rutinitas, hiburan dan rekreasi menjadi tempat
          refresehing dari kegiatan sehari-hari. Tempat wisata di RW 12 yaitu “Kampung Tridi” dan di RW 04
          bernama “Taman Rampal”. Pada tahun 2024 di Kelurahan Kesatrian terdapat tempat wisata yang baru
          didirikan yaitu Tempat wisata Pemancingan yang terletak di RW 10. </p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Keamanan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tkeamanan.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey yang dilakukan oleh survey yang dilakukan oleh Tim Profil dan Monografi
          Kesatrian tahun 2024, sarana dan prasarana keamanan lingkungan di Kelurahan Kesatrian terdapat
          11 buah pos kampling dan 8 pos ronda. Dapat disimpulkan bahwa kondisi lingkungan di Kelurahan
          Kesatrian cenderung tertib dan aman.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Sarana dan Prasarana Olahraga, Seni dan Budaya</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tolahraga.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan survey yang dilakukan oleh survey yang dilakukan oleh Tim Profil dan Monografi
          Kesatrian tahun 2024, sarana dan prasarana olahraga, seni dan budaya di Kelurahan Kesatrian
          yang dapat menunjang kesehatan jasmani memadai. menunjukkan bahwa warga kelurahan kesatrian
          sehat jasmani dan rohani. Hal itu ditunjukkan dengan banyaknya lapangan olahraga yang mencapai
          14 buah lapangan. Terdapat sanggar senam atau fitness center yang terletak di RW 01 2 buah.
          Sanggar tari yang ada dikelurahan kesatrian bernama sanggar “senaputra”.</p>
      </div>
    </details>

    <details>
      <summary>Jumlah Anak Menurut Tingkat Pendidikan</summary>
      <div class="content-container">
        <img src="<?= base_url('assets/assets_shop/images/tpendidikananak.png'); ?>" alt="Peta Kesatrian"
          class="center-image">
        <p>Berdasarkan data survey yang dilakukan oleh Tim Profil dan Monografi Kesatrian tahun 2024,
          jumlah anak berusia dibawah 18 tahun berdasarkan tingkat pendidikannya berjumlah 3.124 anak,
          dengan komposisi 1.543 anak laki-laki dan 1.581 anak perempuan.</p>
      </div>
    </details>
  </details>


  <details>
    <summary class="visi-subtitle">TUPOKSI KELURAHAN</summary>

    <!-- Teks Tupoksi Kelurahan Tetap di Posisi Semula -->
    <span
      style="color: #003366; display: block; margin-bottom: 10px;  font-size: 18px; text-align: justify; margin-left: 20px;">
      Berdasarkan Peraturan Daerah Kota Malang Nomor 8 Tahun 2008 tentang Organisasi dan Tata Kerja Kecamatan dan
      Kelurahan, maka Tugas Pokok dan Fungsi Kelurahan Kesatrian adalah sebagai berikut dibawah ini:
    </span>

    <!-- Daftar Berindentasi -->
    <ol style="padding-left: 40px; font-family: Arial, sans-serif; font-size: 18px; color: #333; margin-left: 20px;">
      <li>
        <span style="color: #003366;">Lurah mempunyai tugas pokok menyelenggarakan urusan pemerintahan, pembangunan dan
          kemasyarakatan.</span>
      </li>

      <li>
        <span style="color: #003366;">Selain tugas pokok sebagaimana dimaksud pada ayat (1), Lurah melaksanakan urusan
          pemerintahan yang dilimpahkan oleh Walikota.</span>
      </li>

      <li>
        <span style="color: #003366;">Untuk melaksanakan tugas pokok sebagaimana dimaksud pada ayat (1) dan ayat (2),
          Kelurahan mempunyai fungsi:</span>
        <ul style="list-style-type: disc; margin-left: 30px; color: #555;">
          <li>penyusunan dan pelaksanaan Rencana Strategis dan Rencana Kerja;</li>
          <li>pelaksanaan kegiatan pemerintahan;</li>
          <li>penyelenggaraan kegiatan peningkatan kesejahteraan masyarakat;</li>
          <li>pengkoordinasian kegiatan pembangunan;</li>
          <li>pemberdayaan masyarakat;</li>
          <li>pelayanan masyarakat;</li>
          <li>penyelenggaraan ketentraman dan ketertiban umum;</li>
          <li>pemeliharaan sarana dan prasarana pelayanan umum;</li>
          <li>pembinaan lembaga kemasyarakatan;</li>
          <li>pelaksanaan Standar Pelayanan Minimal (SPM);</li>
          <li>penyusunan dan pelaksanaan Standar Pelayanan Publik (SPP);</li>
          <li>pelaksanaan fasilitasi pengukuran Indeks Kepuasan Masyarakat (IKM) dan/atau pelaksanaan pengumpulan
            pendapat pelanggan secara periodik yang bertujuan untuk memperbaiki kualitas layanan;</li>
          <li>pengelolaan pengaduan masyarakat;</li>
          <li>penyampaian data hasil pembangunan dan informasi lainnya terkait layanan publik secara berkala melalui web
            site Pemerintah Daerah;</li>
          <li>pengelolaan administrasi umum meliputi penyusunan program, ketatalaksanaan, ketatausahaan, keuangan,
            kepegawaian, rumah tangga, perlengkapan, kehumasan, kepustakaan dan kearsipan;</li>
          <li>pengevaluasian dan pelaporan pelaksanaan tugas pokok dan fungsi;</li>
          <li>pelaksanaan tugas lain yang diberikan oleh Walikota sesuai dengan tugas dan fungsinya.</li>
        </ul>
      </li>

      <li>
        <span style="color: #003366;">Poin Utama Kedua</span>
      </li>

      <li>
        <span style="color: #003366;">Struktur organisasi Kelurahan, terdiri dari:</span>
        <ul style="list-style-type: disc; margin-left: 30px; color: #555;">
          <li>Lurah;</li>
          <li>Sekretaris Kelurahan;</li>
          <li>Seksi Pemerintahan, Ketentraman dan Ketertiban Umum;</li>
          <li>Seksi Pemberdayaan Masyarakat dan Pembangunan;</li>
          <li>Seksi Kesejahteraan Masyarakat;</li>
        </ul>
      </li>
    </ol>
  </details>


  <br><br><br>
</body>

</html>