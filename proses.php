<?php

if (isset($_POST['hitung'])) {
    header("Location: form.php");
    exit;
}
if(isset($_POST['submit'])){
    $hargamobil = $_POST['hargamobil'];
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $tenor = trim($_POST['tenor']);
    $dp = trim($_POST['dp']);
    $hargadpmobil = 0;

    $query_nama = "nama=" . urlencode($nama);
    $query_email = "email=" . urlencode($email);
    $query_hargamobil = "hargamobil=" . urlencode($hargamobil);
    $query_tenor = "tenor=" . urlencode($tenor);
    $query_dp = "dp=" . urlencode($dp);

    $isi_form = "&$query_nama&$query_email&$query_hargamobil&$query_tenor&$query_dp";

    if (empty($nama)) {
        $pesan = urlencode("NAMA WAJIB DIISI");
        header("Location: form.php?pesan={$pesan}{$isi_form}");
        die();
    }

    if (empty($email)) {
        $pesan = urlencode("EMAIL WAJIB DIISI");
        header("Location: form.php?pesan={$pesan}{$isi_form}");
        die();
    }

    if (empty($hargamobil)) {
        $pesan = urlencode("HARGA WAJIB DIISI");
        header("Location: form.php?pesan={$pesan}{$isi_form}");
        die();
    }

    if (empty($tenor)) {
        $pesan = urlencode("TENOR WAJIB DIISI");
        header("Location: form.php?pesan={$pesan}{$isi_form}");
        die();
    }

    if (empty($dp)) {
        $pesan = urlencode("DP WAJIB DIISI");
        header("Location: form.php?pesan={$pesan}{$isi_form}");
        die();
    }

    if ($dp == 10) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
    } elseif ($dp == 20) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
    } elseif ($dp == 30) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
    } elseif ($dp == 40) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
    } elseif ($dp == 50) {
        $hargadpmobil = ($dp / 100) * $hargamobil;
    }

    $lamaangsuran = 0;

    if ($tenor == 1) {
        $lamaangsuran = $tenor * 12;
    } elseif ($tenor == 2) {
        $lamaangsuran = $tenor * 12;
    } elseif ($tenor == 3) {
        $lamaangsuran = $tenor * 12;
    } elseif ($tenor == 4) {
        $lamaangsuran = $tenor * 12;
    } elseif ($tenor == 5) {
        $lamaangsuran = $tenor * 12;
    }

    $bunga = 20 / 100 * $hargamobil;

    $jumlahangsuran =
    (($hargamobil + $bunga) - $hargadpmobil) / $lamaangsuran;

    echo "<br>";
    echo "Nama = " . $nama . "<br>";
    echo "Email = " . $email . "<br>";
    echo "Harga mobil = " . $hargamobil . "<br>";
    echo "Tenor = " . $tenor . " Tahun<br>";
    echo "Lama angsuran = " . $lamaangsuran . " bulan<br>";
    echo "DP = " . $dp . "%<br>";
    echo "Harga DP mobil = " . $hargadpmobil . "<br>";
    echo "Bunga = Rp" . $bunga . "<br><br>";
    echo "Angsuran = Rp" . $jumlahangsuran . "<br>";

} else {
    echo "Silahkan isi datanya";
}

?>