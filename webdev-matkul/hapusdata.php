<?php

require 'fungsi.php';

// ambil id dari URL
$id = $_GET['id'];

// query hapus
$query = "DELETE FROM mahasiswa WHERE id = $id";

mysqli_query($conn, $query);

// cek hasil
if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
        alert('Data berhasil dihapus!');
        window.location='mahasiswa.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus!');
        window.location='mahasiswa.php';
    </script>";
}

?>