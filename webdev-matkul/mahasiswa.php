<?php

require 'fungsi.php';

$mahasiswas = tampilData("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style-mahasiswa.css">
</head>

<body>

    <div align="center">

        <h2>Data Mahasiswa</h2>

        <a href="tambahdata.php">
            <button style="border-radius:5px;">
                Tambah Data
            </button>
        </a>

    </div>

    <br>

    <table border="1" cellspacing="0" cellpadding="10" align="center">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profil.php">Profile</a></td>
            <td><a href="contact.php">Kontak</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <br>

    <table border="1" align="center" cellpadding="10" cellspacing="0">

        <tr align="center">
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($mahasiswas as $mhs) : ?>


        <tr align="center">

            <td><?= $mhs['id']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><?= $mhs['prodi']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['no_hp']; ?></td>

            <td>
                <img src="assets/images/<?= $mhs['foto']; ?>" width="80" style="border-radius:5px;">
            </td>

            <td>

                <a href="editdata.php?id=<?= $mhs['id']; ?>">
                    <button style="border-radius:5px;">
                        Edit
                    </button>
                </a>

                <a href="hapusdata.php?id=<?= $mhs['id']; ?>"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                    <button style="border-radius:5px;">
                        Delete
                    </button>
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

    <br>

    <h3 align="center">LATIHAN</h3>

    <table border="1" align="center">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" style="font-size: 40px;" align="center">?</td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</body>

</html>