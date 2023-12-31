<?php

include 'koneksi.php';

if (isset($_POST["submit"])) {

    if (submit($_POST) > 0) {
        echo "
        <script>
        alert('Submit Berhasil');
        document.location.href='indeks.php';
        </script>
        ";
    } else {
        "Gagal";
    }
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
        <form action="" class="form" method="post">
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
            </div>
            <div class="input-box">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan Alamat Email Anda" required>
            </div>
            <div class="gender-box">
                <h3>Jenis Kelamin</h3>
                <div class="gender-option" name="gender">
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
                    <input name="telepon" type="text" placeholder="Masukkan No Telepon" required>
                </div>
                <div class="input-box">
                    <label>Tanggal Lahir</label>
                    <input name="ttd" type="date" placeholder="Masukkan Tanggal Lahir" required>
                </div>
            </div>
            <div class="input-box alamat">
                <label>Alamat Domisili</label>
                <input name="alamat" type="text" placeholder="Masukkan Alamat Domisili Anda" required>
                <div class="column">
                    <label>Pendidikan Terakhir</label>
                    <div class="select-box">
                        <select name="pendidikan">
                            <option value="terakhir" hidden>Pendidikan Terakhir</option>
                            <option value="d3">Akademi/Diploma III/S.Muda</option>
                            <option value="d4">Diploma IV/Strata I</option>
                            <option value="s2">Strata II</option>
                            <option value="s3">Strata III</option>
                        </select>
                    </div>
                    <input name="link" type="text" placeholder="Link Akun Linkedln" required>
                </div>
                <div class="input-box">
                    <label>Posisi yang Dilamar</label>
                    <div class="select-box">
                        <select name="posisi">
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