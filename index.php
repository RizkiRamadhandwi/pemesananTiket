<?php
require 'function.php';
$pesanan = count(query("select * from pesanan order by id desc limit 1")) > 0 ? query("select * from pesanan order by id desc limit 1")[0] : null;

if( isset($_POST["pesan"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			  </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PO. Gunung Harta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="toggle">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#listBus">List Bus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#FormPemesanan">Tiket Pemesanan Bus</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/b-eks.jpg" alt="eksekutif" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Kelas Eksekutif</h1>
            <p>Tingkat kenyamanan dijamin bakal tidur dengan pulas</p>
            <p><a class="btn btn-lg btn-primary" href="#FormPemesanan">Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/b-bisnis.jpg" alt="bisnis">

        <div class="container">
        <div class="carousel-caption text-start">
            <h1>Kelas Bisnis</h1>
            <p>Tidak terlalu mahal, dan tidak terlalu murah pas dikantong penumpang</p>
            <p><a class="btn btn-lg btn-primary" href="#FormPemesanan">Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/b-eco.jpg" alt="ekonomi" width="100%" height="100%">
        <div class="container">
        <div class="carousel-caption text-start">
            <h1>Kelas Ekomoni</h1>
            <p>tingkat kemurahan nya tiada tanding</p>
            <p><a class="btn btn-lg btn-primary" href="#FormPemesanan">Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">kembali</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">selanjutnya </span>
    </button>
  </div>



  <div class="container marketing" id="listBus">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">

        <h2 class="fw-normal">Eksekutif</h2>
        <p>Rp. 300.000/orang</p>
        <p><a class="btn btn-secondary" href="#FormPemesanan">Pesan Sekarang</a></p>
      </div>
      <div class="col-lg-4">

        <h2 class="fw-normal">Bisnis</h2>
       <p>Rp. 200.000/orang</p>
        <p><a class="btn btn-secondary" href="#FormPemesanan">Pesan Sekarang</a></p>
      </div>
      <div class="col-lg-4">


        <h2 class="fw-normal">Ekonomi</h2>
        <p>Rp. 100.000/orang</p>
        <p><a class="btn btn-secondary" href="#FormPemesanan">Pesan Sekarang</a></p>
      </div>
    </div>



    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Kabin Eksekutif</h2>
        <p>Konfigurasi kursinya biasanya 2-1, dua di kanan, satu di kiri. Konfigurasi ini membuat kursi bus SE lebih lebar ketimbang bus Eksekutif dan Bisnis yang normalnya memakai konfigurasi 2-2, yang menjadikan bus SE lebih nyaman. Kapasitasnya umumnya 21 kursi, namun ada juga yang hanya 18 kursi.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/kb-eks.jpg" alt="kb-eks">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Kabin Bisnis</h2>
       <p>Konfigurasi kursinya biasa menggunakan konfigurasi 2-2, 2 di kiri dan 2 di kanan. Ketimbang konfigurasi 3-2, konfigurasi 2-2 jelasnya lebih nyaman karena kursinya lebih lebar dan tidak empet-empetan. Kapasitasnya biasanya 36 hingga 39 orang, tergantung kebijakan PO dan ketersediaan toilet atau tidak.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/kb-bisnis.jpg" alt="kb-eks">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Kabin Ekonomi</h2>
       <p>Konfigurasi kursi bus ekonomi biasanya 3-2, 3 kursi di sebelah kanan dengan 2 kursi di sebelah kiri.Biasanya, konfigurasi 3-2 pada bus ekonomi bisa memuat hingga 59 orang, 56 orang jika memiliki toilet. Atau kalau menggunakan konfigurasi 2-2, tanpa toilet bisa memuat hingga 45-50 orang penumpang.</p>
      </div>
      <div class="col-md-5">
      <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/kb-eco.jpg" alt="kb-eks">

      </div>
    </div>

    
    <section id="FormPemesanan">
        <hr class="featurette-divider">
        <div class="row">
        <div class="col-md-6">
            <h2>Form Pemesanan</h2>
            <form action="" class="mt-3" method="post">
                <div class="row my-2">
                    <div class="col-4">Nama Lengkap</div>
                    <div class="col-8"><input class="form-control" type="text" name="namaLengkap" id="namaLengkap"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Nomer Identitas</div>
                    <div class="col-8"><input class="form-control" type="number" name="noIdentitas" id="noIdentitas"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">No. HP</div>
                    <div class="col-8"><input class="form-control" type="number" name="noHP" id="noHP"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Kelas Penumpang</div>
                    <div class="col-8">
                    <select class="form-select" aria-label="Default select example" name="kp" id="kp">
                        <option selected value="">Pilih</option>
                        <option value="eksekutif">Eksekutif</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="ekonomi">Ekonomi</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Jadwal Keberangkatan</div>
                    <div class="col-8"><input class="form-control" type="date" name="jadwalKeberangkatan" id="jadwalKeberangkatan"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Jumlah Penumpang<p> <small class="text-muted">Bukan Lansia (usia &lt; 60)</small></p></div>
                    <div class="col-8"><input class="form-control" type="number" name="jumlahPenumpang" id="jumlahPenumpang" min="0" value="1"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Jumlah Penumpang Lansia<p> <small class="text-muted">60 tahun keatas</small></p></div>
                    <div class="col-8"><input class="form-control" type="number" name="jumlahPenumpangLansia" id="jumlahPenumpangLansia" min="0" value="0"></div>
                </div>
                <div class="row my-2">
                    <div class="col-4">Harga Tiket</div>
                    <div class="col-8"><p class="fw-bold">Rp. <span id="hargaTiket"></span></p></div>
                    <input type="hidden" name="hargaTiket" id="hargaTiketSebenarnya">
                </div>
                <div class="row my-2">
                    <div class="col-4">Total Bayar</div>
                    <div class="col-8"><p class="fw-bold">Rp. <span id="totalBayar"></span></p></div>
                    <input type="hidden" name="totalBayar" id="totalBayarSebenarnya">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya dan/atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                </div>
                <div class="row my-2">
                    <div class="col-4 d-grid mx-auto"><button type="button" id='hitung' class="btn btn-danger">Hitung</button></div>
                    <div class="col-4 d-grid mx-auto"><button disabled type="submit" class="btn btn-danger" name="pesan" id="pesan">Pesan</button></div>
                    <div class="col-4 d-grid mx-auto"><button type="button" class="btn btn-danger" id="cancel">Cancel</button></div>
                </div>
            </form>
        </div>
<?php if($pesanan != null): ?>
        <div class="col-6">
        <h2>Daftar Pemesanan</h2>
        <table class="table">
  <tbody>
    <tr>
      <th scope="row">Nama Lengkap</th>
      <td><?= $pesanan['namaL'] ?></td>
    </tr>
    <tr>
      <th scope="row">Nomer Identitas</th>
      <td><?= $pesanan['nik'] ?></td>
    </tr>
    <tr>
      <th scope="row">No. HP</th>
      <td><?= $pesanan['noHp'] ?></td>
    </tr>
    <tr>
      <th scope="row">Kelas Penumpang</th>
      <td><?= $pesanan['kelasPnp'] ?></td>
    </tr>
    <tr>
      <th scope="row">Jadwal Keberangkatan</th>
      <td><?= $pesanan['tglBerangkat'] ?></td>
    </tr>
    <tr>
      <th scope="row">Jumlah Penumpang</th>
      <td><?= $pesanan['jmlPnp'] ?> orang</td>
    </tr>
    <tr>
      <th scope="row">Jumlah Penumpang Lansia</th>
      <td><?= $pesanan['jmlPnpLansia'] ?> orang</td>
    </tr>
    <tr>
      <th scope="row">Harga Tiket</th>
      <td><?= $pesanan['hargaTiket'] ?></td>
    </tr>
    <tr>
      <th scope="row">Total Bayar</th>
      <td><?= $pesanan['TotalBayar'] ?></td>
    </tr>
    
  </tbody>
</table>
        </div>

        <?php endif ?>
    </div>
</section>
    


    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"></p>
    <p>&copy; 2017–2022 PO.Gunung Harta &middot; </p>
  </footer>
</main>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="src.js"></script>
  </body>
</html>