<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "formulir_kerja";

$conn = mysqli_connect($host, $user, $pass, $db);

function submit($data)
{
    global $conn;
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $telepon = $_POST["telepon"];
    $ttd = $_POST["ttd"];
    $alamat = $_POST["alamat"];
    $pendidikan = $_POST["pendidikan"];
    $link = $_POST['link'];
    $posisi = $_POST["posisi"];

    $query = ("INSERT INTO formulir_kerja VALUES('', '$nama', '$email', '$gender', '$telepon', '$ttd', '$alamat', '$pendidikan', '$link', '$posisi') ");
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM formulir_kerja WHERE id=$id") or die(mysqli_error($conn));
    header("Location:admin.php");


    return mysqli_affected_rows($conn);
}