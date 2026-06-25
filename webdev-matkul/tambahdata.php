<?php

require 'fungsi.php';


if (isset($_POST['submit'])) {

    $result = tambahData($_POST);

    if ($result > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            window.location='mahasiswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            window.location='mahasiswa.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | INFORMATIKA 2026</title>
    <link rel="stylesheet" href="assets/style-tambahdata.css">
</head>

<body>

    <div align="center">

        <h2>Tambah Data Mahasiswa</h2>

        <form action="tambahdata.php" method="post" enctype="multipart/form-data">
            <table>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" placeholder="Masukkan Nama" required>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" placeholder="Masukkan NIM" required>
                    </td>
                </tr>

                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="prodi" placeholder="Masukkan Prodi" required>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" placeholder="Masukkan Email" required>
                    </td>
                </tr>

                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_hp" placeholder="Masukkan Nomor HP" required>
                    </td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="foto" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" name="submit" style="border-radius:5px;">
                            Tambah
                        </button>
                    </td>
                </tr>

            </table>
        </form>

        <br>

        <a href="mahasiswa.php">
            <button style="border-radius:5px;">
                Kembali
            </button>
        </a>

    </div>

</body>

</html>