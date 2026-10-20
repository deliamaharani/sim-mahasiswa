
<?php
/**
 * Koneksi database SIM Mahasiswa.
 * Sesuaikan konfigurasi dengan server masing-masing.
 */

$host     = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';
$database = getenv('DB_NAME') ?: 'sim_mahasiswa';
$port     = (int) (getenv('DB_PORT') ?: 3306);

$koneksi = mysqli_connect(
    $host,
    $username,
    $password,
    $database,
    $port
);

if (!$koneksi) {
    error_log('Koneksi database gagal: ' . mysqli_connect_error());
    die('Koneksi database gagal. Periksa konfigurasi server.');
}

mysqli_set_charset($koneksi, 'utf8mb4');
?>
