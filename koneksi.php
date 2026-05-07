<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = getenv('MYSQLHOST') ?: "mysql.railway.internal";
$user = getenv('MYSQLUSER') ?: "root";
$pass = getenv('MYSQLPASSWORD') ?: "FpRyRxbKkolFOfuLgOhEDrgrCdsDupvl";
$db   = getenv('MYSQLDATABASE') ?: "railway";
$port = getenv('MYSQLPORT') ?: 3306;

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// 5. Pesan Sukses (Opsional - hapus jika sudah berhasil konek)
// echo "Koneksi Berhasil Terhubung!";
?>
