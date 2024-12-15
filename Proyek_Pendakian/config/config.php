<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root'; // Ganti sesuai dengan username database Anda
$password = ''; // Ganti sesuai dengan password database Anda
$dbname = 'db_pendakian';

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses pendaftaran jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_pendakian = $_POST['tanggal_pendakian'];
    $no_hp = $_POST['no_hp'];

    // Query untuk menyimpan data
    $sql = "INSERT INTO pendaki (no_ktp, nama, alamat, tanggal_pendakian, no_hp)
            VALUES ('$no_ktp', '$nama', '$alamat', '$tanggal_pendakian', '$no_hp')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location.href = '../index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Query untuk mengambil data pendaki
$result = $conn->query("SELECT * FROM pendaki");
?>
