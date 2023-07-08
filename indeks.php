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
            <form action="#" class="form">
                <div class="input-box">
                    <label>Nama Lengkap</label>
                    <input type="text" placeholder="Masukkan Nama Lengkap Anda" required>
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" placeholder="Masukkan Alamat Email Anda" required>
                </div>
                <div class="gender-box">
                    <h3>Jenis Kelamin</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input
                                type="radio"
                                id="pria"
                                name="gender"
                                checked
                            >
                            <label for="wanita">Pria</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="wanita" name="gender">
                            <label for="wanita">Wanita</label>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>No Telepon</label>
                        <input type="text" placeholder="Masukkan No Telepon" required>
                    </div>
                    <div class="input-box">
                        <label>Tanggal Lahir</label>
                        <input type="date" placeholder="Masukkan Tanggal Lahir" required>
                    </div>
                </div>
                <div class="input-box alamat">
                    <label>Alamat Domisili</label>
                    <input type="text" placeholder="Masukkan Alamat Domisili Anda" required>
                    <div class="column">
                        <label>Pendidikan Terakhir</label>
                        <div class="select-box">
                            <select>
                                <option hidden>Pendidikan Terakhir</option>
                                <option>Akademi/Diploma III/S.Muda</option>
                                <option>Diploma IV/Strata I</option>
                                <option>Strata II</option>
                                <option>Strata III</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Link Akun Linkedln" required>
                    </div>
                    <div class="input-box">
                        <label>Posisi yang Dilamar</label>
                        <div class="select-box">
                            <select>
                                <option hidden>Pilih Posisi yang Dilamar</option>
                                <option>Machine Learning Engineer</option>
                                <option>Data Engineer</option>
                                <option>Data Analyst</option>
                                <option>Android Developer</option>
                                <option>Technical Lead(Frontend)</option>
                                <option>Technical Lead(Mobile)</option>
                                <option>Intern / Magang</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button>Submit</button>
            </form>
        </section>
    </body>
</html>
