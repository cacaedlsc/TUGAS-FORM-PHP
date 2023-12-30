<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];

$sql = " UPDATE mahasiswa SET nim='$nim', nama='$nama' , no_hp='$no_hp' , jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat' , email='$email' WHERE nim='$nim'";

if(mysqli_query($link, $sql)){
    header("location:tampil-data.php");
}
?>