<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('location:tampil.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM tb_siswa INNER JOIN tb_kartu ON tb_siswa.id_kartu=tb_kartu.id_kartu WHERE tb_siswa.id='$id'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
<h3>Formulir Edit Data Siswa</h3>
    <h4>SMK N 1 SAYUNG</h4>
    <Table>
        <form action="proses-edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
            <tr>
                <td><label for="nama_siswa">Nama Siswa</label></td>
                <td><input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin</label></td>
                <td><select name="jk" value="<?php echo $row['jk']; ?>">
                    <option value="laki">Laki - Laki</option>
                    <option value="pr">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="no_kartu">Nomor Kartu</label></td>
                <td><input type="text" name="no_kartu" value="<?php echo $row['no_kartu']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="jenis_kartu">Jenis Kartu</label></td>
                <td><input type="text" name="jenis_kartu" value="<?php echo $row['jenis_kartu']; ?>" /></td>
            </tr>
            <br>
            <input type="submit" name="edit" value="SIMPAN">
        </form>
    </Table>
</body>
</html>