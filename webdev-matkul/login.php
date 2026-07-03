<?php

require 'fungsi.php';

$error = false;

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

            echo "<script>
                    alert('Login berhasil!');
                    window.location.href='mahasiswa.php';
                    </script>";
            exit;
        }
    }

    // baru tampilkan tulisan merah
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | INFORMATIKA 2026</title>
</head>

<body>
    <div align="center">

        <h2>Login</h2>

        <?php
        if ($error) {
            ?>
        <p style="color:red; font-style:italic;">
            Username / Password salah!
        </p>
        <?php
        }
        ?>

        <form action="" method="post">

            <table>

                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" name="login">
                            Login
                        </button>
                    </td>
                </tr>

            </table>

        </form>

        <br>

        <p>Belum punya akun?</p>

        <a href="register.php">
            <button>
                Register
            </button>
        </a>

    </div>
</body>

</html>