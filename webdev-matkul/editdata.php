<?php

    require 'fungsi.php';

    // Cek apakah ada id
    if (!isset($_GET['id'])) {
        header("Location: mahasiswa.php");
        exit;
    }

    // Ambil id dari URL
    $id = $_GET['id'];

    // Ambil data mahasiswa berdasarkan id
    $mahasiswa = tampilData("SELECT * FROM mahasiswa WHERE id = $id")[0];

    if (isset($_POST["submit"])) {

    if (editData($_POST) > 0) {

        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href='mahasiswa.php';
                </script>";

    } else {

        echo "<script>
                alert('Data gagal diubah!');
                document.location.href='mahasiswa.php';
                </script>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data | INFORMATIKA 2026</title>
    <link rel="stylesheet" href="assets/style-tambahdata.css">
</head>

<body>

    <div align="center">

        <h2>Edit Data Mahasiswa</h2>

        <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            <input type="hidden" name="foto_lama" value="<?= $mahasiswa['foto']; ?>">

            <table>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="prodi" value="<?= $mahasiswa['prodi']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" value="<?= $mahasiswa['email']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" required>
                    </td>
                </tr>

                <tr>
                    <td>Foto Lama</td>
                    <td>:</td>
                    <td>
                        <img src="assets/images/<?= $mahasiswa['foto']; ?>" width="100">
                    </td>
                </tr>

                <tr>
                    <td>Foto Baru</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="foto">
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" name="submit" style="border-radius:5px;">
                            Confirm
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