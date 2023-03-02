<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <h3>Formulir Tambah Data Siswa</h3>
    <h4>SMK N 1 SAYUNG</h4>
    <Table>
        <form action="proses-tambah.php" method="post">
            <tr>
                <td><label for="nama_siswa">Nama Siswa</label></td>
                <td><input type="text" name="nama_siswa"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin</label></td>
                <td><select name="jk">
                    <option value="laki">Laki - Laki</option>
                    <option value="pr">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="no_kartu">Nomor Kartu</label></td>
                <td><input type="text" name="no_kartu" ></td>
            </tr>
            <tr>
                <td><label for="jenis_kartu">Jenis Kartu</label></td>
                <td><input type="text" name="jenis_kartu" ></td>
            </tr>
            <br>
            <button type="submit" name="simpan">Tambah Data</button>
        </form>
    </Table>
</body>
</html>