<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = $_ENV['MYSQLHOST'] ?? getenv('mysql.railway.internal');
$user = $_ENV['MYSQLUSER'] ?? getenv('root');
$pass = $_ENV['MYSQLPASSWORD'] ?? getenv('FpRyRxbKkolFOfuLgOhEDrgrCdsDupvl');
$db   = $_ENV['MYSQLDATABASE'] ?? getenv('railway');
$port = $_ENV['MYSQLPORT'] ?? getenv('3306');

if (!$host || !$user || !$db) {
    die("Environment variable database belum terbaca!");
}

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi database berhasil!";
?>
