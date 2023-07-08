<?php


// session_start();
// if (isset($_SESSION['username'])) {
//     header('Location:login.php');
//     exit();
// }

require 'koneksi.php';



$q = mysqli_query($conn, "SELECT * FROM formulir_kerja");
$data = [];
while ($r = mysqli_fetch_assoc($q)) {
    $data[] = $r;
}

$mas = $data;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">Admin Dashboard</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a>
                </li>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Cari Data">
            </div>
        </div>
        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Data Pendaftar</span>
                </div>
                <!-- 
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data gender">
                        <span class="data-title">Gender</span>
                        <span class="data-list"></span></span>
                    </div>
                    <div class="data telp">
                        <span class="data-title">Telp</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data ttd">
                        <span class="data-title">TTD</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data alamat">
                        <span class="data-title">Alamat</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data pendidikan">
                        <span class="data-title">Pendidikan</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data linkedln">
                        <span class="data-title">Linkedln</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data posisi">
                        <span class="data-title">Posisi</span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data Aksi">
                        <span class="data-title">Aksi</span>
                        <span class="data-list"></span>
                    </div>
                </div>
                -->

                <table style="margin-top: 20px;" class="table" border="1" cellpadding="10" cellspacing="0">
                    <thead class="table-light">
                        <!-- <tr> -->
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Telepon</th>
                        <th>TTL</th>
                        <th>Alamat</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Linkedin</th>
                        <th>Posisi</th>
                        <th>Aksi</th>
                        <!-- </tr> -->
                    </thead>

                    <?php foreach ($mas as $row) : ?>
                    <tbody class="table-dark">
                        <!-- <tr> -->
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["gender"] ?></td>
                        <td><?php echo $row["telepon"]; ?></td>
                        <td><?php echo $row["ttd"] ?></td>
                        <td><?php echo $row["alamat"] ?>
                        </td>

                        <td><?php echo $row["pendidikan"] ?></td>

                        <td><?php echo $row["link"] ?></td>

                        <td><?php echo $row["posisi"] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>"
                                onclick="return confirm('yakin?');">Delete</a>
                        </td>
                        <!-- </tr> -->
                    </tbody>

                    <?php endforeach ?>
                </table>
            </div>
    </section>
</body>

</html>