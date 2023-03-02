<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_kartu = $_POST['no_kartu'];
    $jenis_kartu = $_POST['jenis_kartu'];

    $sql = "UPDATE tb_siswa SET nama_siswa='$nama_siswa', alamat='$alamat', jk='$jk' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_kartu SET no_kartu='$no_kartu', jenis_kartu='$jenis_kartu' WHERE id_kartu='$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>