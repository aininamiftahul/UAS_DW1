<?php
require "koneksi.php";

$id = $_GET["id"];

$data = mysqli_query($conn, "SELECT * FROM formulir_kerja WHERE id = $id");
while ($isi = mysqli_fetch_array($data)) {
    $id = $isi['id'];
    $nama = $isi['nama'];
    $email = $isi['email'];
    $gender = $isi['gender'];
    $telepon = $isi['telepon'];
    $ttd = $isi['ttd'];
    $alamat = $isi['alamat'];
    $pendidikan = $isi['pendidikan'];
    $link = $isi['link'];
    $posisi = $isi['posisi'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container">
        <header>Form Pelamar Kerja</header>
        <form action="update.php" class="form" method="post">
            <div class="input-box">
                <input class="form-label" type="hidden" name="id" value="<?= $id; ?>">
            </div>
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required value="<?= $nama; ?>">
            </div>
            <div class="input-box">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Alamat Email Anda" required
                    value="<?= $email; ?>">
            </div>
            <div class="gender-box">
                <h3>Jenis Kelamin</h3>
                <div class="gender-option" name="gender" required value="<?= $gender; ?>">
                    <div class="gender">
                        <input value="pria" type="radio" id="pria" name="gender" checked>
                        <label for="pria">Pria</label>
                    </div>
                    <div class="gender">
                        <input value="wanita" type="radio" id="wanita" name="gender">
                        <label for="wanita">Wanita</label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>No Telepon</label>
                    <input name="telepon" type="text" placeholder="Masukkan No Telepon" required
                        value="<?= $telepon; ?>">
                </div>
                <div class="input-box">
                    <label>Tanggal Lahir</label>
                    <input name="ttd" type="date" required value="<?= $ttd; ?>">
                </div>
            </div>
            <div class="input-box alamat">
                <label>Alamat Domisili</label>
                <input name="alamat" type="text" placeholder="Masukkan Alamat Domisili Anda" required
                    value="<?= $alamat; ?>">
                <div class="column">
                    <label>Pendidikan Terakhir</label>
                    <div class="select-box">
                        <select name="pendidikan" required value="<?= $pendidikan; ?>">
                            <option value="terakhir" hidden>Pendidikan Terakhir</option>
                            <option value="d3">Akademi/Diploma III/S.Muda</option>
                            <option value="d4">Diploma IV/Strata I</option>
                            <option value="s2">Strata II</option>
                            <option value="s3">Strata III</option>
                        </select>
                    </div>
                    <input name="link" type="text" placeholder="Link Akun Linkedln" required value="<?= $link; ?>">
                </div>
                <div class="input-box">
                    <label>Posisi yang Dilamar</label>
                    <div class="select-box">
                        <select name="posisi" required value="<?= $posisi; ?>">
                            <option value="pilih" hidden>Pilih Posisi yang Dilamar</option>
                            <option value="ml">Machine Learning Engineer</option>
                            <option value="de">Data Engineer</option>
                            <option value="da">Data Analyst</option>
                            <option value="ad">Android Developer</option>
                            <option value="tl">Technical Lead(Frontend)</option>
                            <option value="tm">Technical Lead(Mobile)</option>
                            <option value="i">Intern / Magang</option>
                        </select>
                    </div>
                </div>
            </div>
            <button name="submit" type="submit">Submit</button>
        </form>
    </section>
</body>

</html>