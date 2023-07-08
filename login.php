<?php
include 'koneksi.php';


session_start();
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}
if (isset($_POST['login'])) {
    // code...
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        // code...
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
    } else {
        // code...
        echo "<script>alert('Email atau password yang anda masukkan salah');</script>";
    }
}

?>
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form-wrapper">
        <h2>Login Untuk Mengisi Formulir</h2>
        <form action="" method="post">
            <div class="form-control">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input name="password" type="password" required>
                <label>Password</label>
            </div>
            <button type="submit" value="login" name="login">Login</button>
        </form>
    </div>
</body>

</html>