<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | INFORMATIKA 2026</title>
    <link rel="stylesheet" href="assets/style-mahasiswa.css">
</head>

<style>
table,
td {
    border: 1px solid black;
    border-collapse: collapse;
}

td {
    padding: 15px;
}
</style>

<body>

    <div style="text-align: center;">
        <h1>DATA MAHASISWA</h1>

        <a href="tambahdata.php">
            <button style="border-radius: 10px;">Tambah Data</button>
        </a>

    </div>

    <br>
    <!-- Menu Navigasi -->
    <table align="center" border="1" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profil.php">Profile</a></td>
            <td><a href="contact.php">Kontak</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <table border="1" align="center" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Maulana Jackson Widodo</td>
            <td>1312343454308</td>
            <td>Informatika</td>
            <td>maul@unimus.com</td>
            <td>081234567890</td>
            <td><img src="assets/images/fufufafa.jpg" width="80px"></td>
            <td>
                <a href="editdata.php">
                    <button style="border-radius: 5px;">Edit</button>
                </a>
                <a href="deletedata.php">
                    <button style="border-radius: 5px;">Delete</button>
                </a>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Budi Santoso</td>
            <td>23110001</td>
            <td>Informatika</td>
            <td>budi@unimus.com</td>
            <td>081234567891</td>
            <td><img src="assets/images/luhut.jpg" width="80px"></td>
            <td>
                <a href="editdata.php">
                    <button style="border-radius: 5px;">Edit</button>
                </a>
                <a href="deletedata.php">
                    <button style="border-radius: 5px;">Delete</button>
                </a>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Siti Nurhaliza</td>
            <td>23110002</td>
            <td>Sistem Informasi</td>
            <td>siti@unimus.com</td>
            <td>081234567892</td>
            <td><img src="assets/images/wowo.jpg" width="80px"></td>
            <td>
                <a href="editdata.php">
                    <button style="border-radius: 5px;">Edit</button>
                </a>
                <a href="deletedata.php">
                    <button style="border-radius: 5px;">Delete</button>
                </a>
            </td>
        </tr>

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
            <td colspan="2" rowspan="2" style="font-size: 40px;" align="center" padding="20px">?</td>
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