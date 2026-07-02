<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "iliyin15",
    "ifilyweekly"
);

function upload()
{
    // untuk mengecek apakah user memilih gambar
    if ($_FILES["foto"]["error"] == 4) {
        echo "<script>
                alert('Silakan pilih foto terlebih dahulu!');
                </script>";
        return false;
    }

    $namaFile = $_FILES["foto"]["name"];
    $tmpName = $_FILES["foto"]["tmp_name"];
    $ukuranFile = $_FILES["foto"]["size"];

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    // Ambil ekstensi file
    $ekstensiFile = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    // Daftar ekstensi yang diizinkan
    $ekstensiValid = ['jpg', 'jpeg', 'png'];

    // Cek apakah ekstensi valid
    if (!in_array($ekstensiFile, $ekstensiValid)) {

        echo "<script>
            alert('File harus berupa JPG, JPEG, atau PNG!');
            </script>";

        return false;
    }

    // Maksimal ukuran file 2 MB
    if ($ukuranFile > 2000000) {

        echo "<script>
            alert('Ukuran foto maksimal 2 MB!');
            </script>";

        return false;
    }

    move_uploaded_file($tmpName, "assets/images/" . $namaFileBaru);

    return $namaFileBaru;
}

/* ===========================
    MENAMPILKAN DATA
=========================== */
function tampilData($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


/* ===========================
    TAMBAH DATA
=========================== */
function tambahData($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $foto = upload();

    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO mahasiswa
                (nama, nim, prodi, email, no_hp, foto)
                VALUES
                ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


/* ===========================
    HAPUS DATA
=========================== */
function hapusData($id)
{
    global $conn;

    $id = intval($id);

    // Ambil nama foto
    $result = mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id = $id");
    $data = mysqli_fetch_assoc($result);

    // Hapus file foto jika ada
    if (!empty($data['foto'])) {
        unlink("assets/images/" . $data['foto']);
    }

    // Hapus data dari database
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


/* ===========================
    EDIT DATA
=========================== */
function editData($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    // Cek apakah user mengupload foto baru
    if ($_FILES['foto']['error'] === 4) {

        // Tidak upload foto baru
        $foto = $data['foto_lama'];

    } else {

        $foto = upload();

        if (!$foto) {
            return false;
        }

        // Hapus foto lama
        if (!empty($data['foto_lama'])) {
            unlink("assets/images/" . $data['foto_lama']);
        }

    }

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                prodi = '$prodi',
                email = '$email',
                no_hp = '$no_hp',
                foto = '$foto'
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>