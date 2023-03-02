<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Siswa</title>
</head>
<body>
    <h3>Tabel Data Penerima KIP</h3>
    <a href ="tambah.php"><input type="button" value="tambah"></a>
        <table border = "1" >
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Nomor Kartu</td>
            <td>Jenis Kartu</td>
            <td>Aksi</td>
        </tr>

        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_kartu ON tb_siswa.id_kartu=tb_kartu.id_kartu");
        $no = 1;
        while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama_siswa']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['jk']; ?></td>
            <td><?= $row['no_kartu']; ?></td>
            <td><?= $row['jenis_kartu']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>;">Edit</a>||
                <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>