<?php
include "koneksi.php";

$id = $_GET['id'];

$sql="DELETE FROM mahasiswa where id='$id'";

if(mysqli_query($link, $sql)){
    header("location: tampil-data.php");
}
?>