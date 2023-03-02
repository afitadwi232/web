<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_kartu = $_POST['no_kartu'];
    $jenis_kartu = $_POST['jenis_kartu'];

    $sql = "INSERT INTO tb_kartu (no_kartu, jenis_kartu) VALUES ('$no_kartu','$jenis_kartu')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "SELECT max(id_kartu) AS id_kartu FROM tb_kartu LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_array($query);
    $id_kartu = $data['id_kartu'];

    $sql = "INSERT INTO tb_siswa (id_kartu, nama_siswa, alamat, jk) VALUES ('$id_kartu','$nama_siswa','$alamat','$jk')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>