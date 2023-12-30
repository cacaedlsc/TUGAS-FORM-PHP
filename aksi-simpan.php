<?php
include "koneksi.php";

// Ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];

// Query untuk memeriksa apakah NIM sudah ada
$checkSql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$checkResult = mysqli_query($link, $checkSql);

// Penolakan jika nim sudah ada
if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('NIM sudah ada dalam data, penyimpanan gagal dilakukan!'); window.location.href='buat_akun.html';</script>";
    exit; 
}

// Jika NIM belum ada maka proses berlanjut
$sql = "INSERT INTO mahasiswa (nama, nim, alamat, email, no_hp, jenis_kelamin, jurusan)
        VALUES ('$nama', '$nim', '$alamat', '$email', '$no_hp', '$jenis_kelamin', '$jurusan')";

if(mysqli_query($link, $sql)){
    echo "<script>alert('Data Berhasil Disimpan!'); window.location.href='home.html';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='buat-akun.html';</script>";
}

?>
