
<?php
if(isset($_GET["pesan"])) {
    $pesan = "<p> {$_GET["pesan"]} <p>";
}
else{
    $pesan = "";
}
if(isset($_GET["nama"])) {
    $nilai_nama = $_GET["nama"];
}

else{
    $nilai_nama = "";
}
if(isset($_GET["email"])) {
    $nilai_email = $_GET["email"];
}

else{
    $nilai_email = "";
}
if(isset($_GET["hargamobil"])) {
    $nilai_hargamobil = $_GET["hargamobil"];
}

else{
    $nilai_hargamobil = "";
}
if(isset($_GET["tenor"])) {
    $nilai_tenor = $_GET["tenor"];
}

else{
    $nilai_tenor = "";
}
if(isset($_GET["dp"])) {
    $nilai_dp = $_GET["dp"];
}

else{
    $nilai_dp = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Kredit Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .carousel-item img {
            height: 420px;
            object-fit: cover;
            filter: brightness(50%);
        }
        .carousel-caption {
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
        }
        section {
            scroll-margin-top: 70px;
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#beranda">
                <img src="img/logo-buana.png" alt="Logo Buana Finance" width="45" height="45">
                Buana Finance
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuUtama">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#simulasi">Simulasi Kredit</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="beranda">
        <div id="slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark">
                
            <div class="carousel-item active">
                <img src="img/car15.jpg" class="d-block w-100" alt="Mobil">
                <div class="carousel-caption">
                    <h1 class="fw-bold">Wujudkan Mobil Impianmu</h1>
                    <p>
                        Prosesnya cepat, syaratnya mudah, dan bunga tetap. Mobil impian terwujud dengan Buana Finance terpercaya.
                        <a href="#simulasi" class="btn btn-primary fw-bold">Hitung Simulasi</a>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/car4.jpg" class="d-block w-100" alt="Mobil Sport">
                <div class="carousel-caption">
                    <h1 class="fw-bold">Tenor cuman sampai 5 tahun aja</h1>
                    <p>Pilih cicilan sesuai kemampuanmu. kalau masih ga mampu?? gausah beli.
                        Wujudkan mobil impianmu di Buana Finance Sekarang!
                    </p>
                    <a href="#simulasi" class="btn btn-primary fw-bold">Cek Angsuran</a>
                </div>
            </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section id="tentang" class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Tentang Buana Finance</h2>
                    <p>
                        PT Buana Finance adalah perusahaan terpercaya yang ada di Indonesia yang menjual mobil impianmu. Kami juga tidak hanya menjual mobil baru, kami menyediakan mobil bekas juga dengan angsuran yang jelas dan mudah dihitung.
                    </p>
                    <p>
                        Dengan Buanan Finance Wujudkan Mobil Impianmu.
                    </p>
                </div>

                    <div class="col-md-6">
                        <img src="img/car14.jpg" class="img-fluid rounded shadow"  alt="Showcase mobil">
                    </div>
                
            </div>
        </div>
    </section>

<section id="simulasi" class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center mb-4">Simulasi Kredit Mobil</h2>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php echo $pesan ?>
                <form action="proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Pelanggan</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $nilai_nama?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $nilai_email?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga Mobil</label>
                        <input type="number" name="hargamobil" class="form-control" value="<?php echo $nilai_hargamobil?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tenor</label>
                        <div value="<?php echo $nilai_tenor?>">
                            <input type="radio" name="tenor" value="1" <?php if($nilai_tenor == 1){ echo "checked";}?>>
                            <label>1 Tahun</label>
                            <input type="radio" name="tenor" value="2" class="ms-3" <?php if($nilai_tenor == 2){ echo "checked";}?>>
                            <label>2 Tahun</label>
                            <input type="radio" name="tenor" value="3" class="ms-3" <?php if($nilai_tenor == 3){ echo "checked";}?>>
                            <label>3 Tahun</label>
                            <input type="radio" name="tenor" value="4" class="ms-3" <?php if($nilai_tenor == 4){ echo "checked";}?>>
                            <label>4 Tahun</label>
                            <input type="radio" name="tenor" value="5" class="ms-3" <?php if($nilai_tenor == 5){ echo "checked";}?>>
                            <label>5 Tahun</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">DP</label>
                        <select name="dp" class="form-select" value="<?php echo $nilai_dp?>">
                            <option value="">Pilih DP</option>
                            <option value="10" <?php if($nilai_dp == 10){echo "selected";} ?>>10%</option>
                            <option value="20" <?php if($nilai_dp == 20){echo "selected";} ?>>20%</option>
                            <option value="30" <?php if($nilai_dp == 30){echo "selected";} ?>>30%</option>
                            <option value="40" <?php if($nilai_dp == 40){echo "selected";} ?>>40%</option>
                            <option value="50" <?php if($nilai_dp == 50){echo "selected";} ?>>50%</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="Hitung" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <div class="text-center">
        <?php 
        if(isset($_POST['submit'])){
            $hargamobil = $_POST['hargamobil'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $tenor = $_POST['tenor'];
            $dp = $_POST['dp'];
            $hargadpmobil = 0;

            if($dp == 10){
                $hargadpmobil = ($dp/100)*$hargamobil;
            }elseif($dp == 20){
                $hargadpmobil = ($dp/100)*$hargamobil;
            }elseif($dp == 30){
                $hargadpmobil = ($dp/100)*$hargamobil;
            }elseif($dp == 40){
                $hargadpmobil = ($dp/100)*$hargamobil;
            }elseif($dp == 50){
                $hargadpmobil = ($dp/100)*$hargamobil;
            }

            $lamaangsurans = 0;
            if($tenor == 1){
                $lamaangsurans = $tenor*12;
            }elseif($tenor == 2){
                $lamaangsurans = $tenor*12;
            }elseif($tenor == 3){
                $lamaangsurans = $tenor*12;
            }elseif($tenor == 4){
                $lamaangsurans = $tenor*12;
            }elseif($tenor == 5){
                $lamaangsurans = $tenor*12;
            }

            $bunga = 20/100*$hargamobil;
            $jumlahangsurans = (($hargamobil + $bunga)-$hargadpmobil)/$lamaangsurans;

            echo "Nama = " . $nama . "<br>";
            echo "Email = " . $email . "<br>";
            echo "Harga mobil = " . $hargamobil . "<br>";
            echo "Tenor = " . $tenor . " Tahun <br>";
            echo "Lama angsuran = " . $lamaangsurans . " bulan <br>";
            echo "DP = " . $dp . "%<br>";
            echo "Harga DP mobil = " . $hargadpmobil . "<br>";
            echo "Bunga = Rp. " . $bunga . "<br>";
            echo "Angsuran = Rp. " . $jumlahangsurans . "<br>";
        }else{
            echo "Isi dulu datanya yahhh!";
        }
        ?>
    </div>
</section>


    <footer id="kontak" class="bg-info text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Buana Finance</h5>
                    <p class="small mb-0">Mitra pembiyaan mobil Anda.</p>
                </div>
                <div class="col-md-6">
                    <h5>kontak</h5>
                    <p >Jl. Cabean Kulon No.24, London Selatan</p>
                    <p >085855647721</p>
                    <p >@buanadarat-finance.co.id</p>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">copyright; 2029 PT BUANA FINANCE</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>