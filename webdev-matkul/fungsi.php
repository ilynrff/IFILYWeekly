<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "iliyin15",
    "ifilyweekly"
);

function upload()
{
    $namaFile = $_FILES["foto"]["name"];
    $tmpName = $_FILES["foto"]["tmp_name"];

    // pindahkan file ke folder img
    move_uploaded_file($tmpName, "img/" . $namaFile);

    return $namaFile;
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

    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $prodi  = htmlspecialchars($data["prodi"]);
    $email  = htmlspecialchars($data["email"]);
    $no_hp  = htmlspecialchars($data["no_hp"]);
    $foto = upload();

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

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


/* ===========================
    EDIT DATA
=========================== */
function editData($data)
{
    global $conn;

    $id     = $data["id"];
    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $prodi  = htmlspecialchars($data["prodi"]);
    $email  = htmlspecialchars($data["email"]);
    $no_hp  = htmlspecialchars($data["no_hp"]);
    $foto   = htmlspecialchars($data["foto"]);

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