<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>House Home</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <!-- perbedaan include dengan require adalah
include kalau eror codingan selanjutnya ttp di  -->
  <?php
  include "navbar.php";
  ?>
  
  <!-- End Navbar -->

  <!-- Hero -->
  <section id="hero" class="mb-3">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">Rumah</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam cum id consequuntur cupiditate dignissimos minus at totam ab blanditiis neque facilis, molestiae beatae veniam quo.</p>

          <a href="#paket" class="btn btn-md btn-primary px-5">Pilih Rumah</a>
        </div>
        <div class="col-lg-6">
            <!-- mx-auto untuk meletakkan elemen di tengah -->
          <img src="../assets/img/home.jpg" alt="" class="img-fluid mx-auto d-block" width="400">
        </div>
      </div>
    </div>
  </section>

  <!-- <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/tipe36.jpg" class="d-block w-100" height="200px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/tipe45.jpg" class="d-block w-100" height="200px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/tipe54.jpeg" class="d-block w-100" height="200px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
  <!-- End Hero -->

  <!-- Paket -->
  <section id="paket" class="mb-3 py-3 container-fluid bg-light">
    <div class="container mb-4">
      <h3 class="mb-4 mt-2 text-center">Daftar Rumah Yang Tersedia</h3>

      <div class="row">
        <?php
        require "../data/properti.php";
        //perulangan
        foreach ($rumah as $index => $value){
        //   var_dump($index);
        //   var_dump($value);
        ?>

        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2 h-100">
            <img src="../assets/img/<?= $value[3]?>" name="gambar" class="card-img-top" height="250px" alt="">
            <div class="card-body">
              <h5><?= $value[0]?></h5>
              <p><?= $value[1]?></p>
            </div>
            <div class="card-footer">
              <h5>Rp. <?= number_format($value[2], '0') ?></h5>
              <div class="card-footer">
                <!-- id menggunakan index dari array dataproduk -->
                <!-- id tersbut akan dikirim ke halaman transaksi.php -->
                <a href="transaksi.php?id=<?= $index ?>" class="btn btn-primary w-100">Pilih</a>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <!-- End Paket -->

 <?php
 include "footer.php";
 ?>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>