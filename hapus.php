<?php
include("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE FROM tb_siswa WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);

$sql = "DELETE FROM tb_kartu WHERE id_kartu='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    header('location:tampil.php?status=gagal');
}
?>