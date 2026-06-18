<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "iliyin15",
    "ifilyweekly"
);

function tampilData($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    // siapkan wadah
    $rows = [];

    // ambil data dari database
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function tambahData($data)
{
    global $conn;

    $nama   = htmlspecialchars($data['nama']);
    $nim    = htmlspecialchars($data['nim']);
    $prodi  = htmlspecialchars($data['prodi']);
    $email  = htmlspecialchars($data['email']);
    $no_hp  = htmlspecialchars($data['no_hp']);
    $foto   = htmlspecialchars($data['foto']);

    $query = "INSERT INTO mahasiswa 
    (nama, nim, prodi, email, no_hp, foto)
    VALUES 
    ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>