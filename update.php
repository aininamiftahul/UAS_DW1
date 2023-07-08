<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$telepon = $_POST['telepon'];
$ttd = $_POST['ttd'];
$alamat = $_POST['alamat'];
$pendidikan = $_POST['pendidikan'];
$link = $_POST['link'];
$posisi = $_POST['posisi'];

$query = "UPDATE formulir_kerja SET 
 nama = '$nama',
    email = '$email',
    gender = '$gender',
    telepon = '$telepon',
    ttd = '$ttd',
    alamat = '$alamat',
    pendidikan = '$pendidikan',
    link = '$link',
    posisi = '$posisi'
 WHERE id = $id";
mysqli_query($conn, $query);

header("Location:admin.php");