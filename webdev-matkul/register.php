<?php

require 'fungsi.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {

        echo "<script>
                alert('Akun berhasil didaftarkan!');
                window.location.href='login.php';
                </script>";

    } else {

        echo "<script>
                alert('Akun gagal didaftarkan!');
                window.location.href='register.php';
                </script>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | INFORMATIKA 2026</title>
</head>

<body>

    <div align="center">

        <h2>Register Akun</h2>

        <form action="" method="post">

            <table>

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" placeholder="Masukkan Username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" placeholder="Masukkan Password" required>
                    </td>
                </tr>

                <tr>
                    <td>Konfirmasi Password</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password2" placeholder="Konfirmasi Password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" name="register" style="border-radius:5px;">
                            Register
                        </button>
                    </td>
                </tr>

            </table>

        </form>

        <br>

        <a href="login.php">
            <button style="border-radius:5px;">
                Kembali ke Login
            </button>
        </a>

    </div>

</body>

</html>