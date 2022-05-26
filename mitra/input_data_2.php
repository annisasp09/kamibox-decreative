<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description Web -->
    <meta name="keywords" content="kamibox">
    <meta name="description" content="">
    <meta name="author" content="Agung Dwi Sahputra">
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

    <title>Input Data | Mitra Kamibox</title>

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="navigation-top">
        <ul>
            <li class="nav-left"><b>Hai,</b> De Creative Agency</li>
            <li class="nav-dropdown">
                <a href="#" id="nav-ListDropdown">
                    <img src="../assets/Icon/user.png" alt="Account" class="user">
                </a>
                <div class="nav-ListDropdown" id="user">
                    <div class="head">
                        <h4 style="margin: 0;">Profile</h4>
                    </div>
                    <div class="body">
                        <a href="#"><img src="../assets/Icon/arrow-point-to-right.png" alt="Panah"> Data Diri</a>
                    </div>
                    <div class="footer">
                        <a href="../logout.php" style="text-align:center;" class="btn">Logout</a>
                    </div>
                </div>
            </li>
            <li class="nav-dropdown">
                <a href="#" id="nav-ListDropdown">
                    <img src="../assets/Icon/bell.png" alt="Notifikasi" class="bell">
                </a>
                <div class="nav-ListDropdown" id="bell">
                    <div class="head">
                        <h4 style="margin: 0;">Notifikasi</h4>
                    </div>
                    <div class="body">
                        <a href="#">
                            <div class="row">
                                <div class="col">
                                    <img src="../assets/Icon/hvs.png" alt="Riwayat" id="riwayat">
                                </div>
                                <div class="col">
                                    <span class="tanggal">Sabtu, 26-2-2022</span>
                                    <span class="keterangan"><b>Transaksi Berhasil</b></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="navigation">
        <ul>
            <div class="toggle">
                <img src="../assets/Logo Kamibox Putih.png" alt="Logo Kamibox" class="open">
                <img src="../assets/logo.png" alt="Logo Kamibox" class="close">
            </div>
            <li class="list">
                <b></b>
                <b></b>
                <a href="index.php">
                    <span class="icon">
                        <img src="../assets/Icon/home_p.png" alt="Beranda" class="putih">
                        <img src="../assets/Icon/home_h.png" alt="Beranda" class="hijau">
                    </span>
                    <span class="title">Beranda</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="jadwal_penjemputan.php">
                    <span class="icon">
                        <img src="../assets/Icon/calendar_p.png" alt="Jadwal Kurir" class="putih">
                        <img src="../assets/Icon/calendar_h.png" alt="Jadwal Kurir" class="hijau">
                    </span>
                    <span class="title">Jadwal Penjemputan</span>
                </a>
            </li>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="input_data.php">
                    <span class="icon">
                        <img src="../assets/Icon/input_p.png" alt="Input Data" class="putih">
                        <img src="../assets/Icon/input_h.png" alt="Input Data" class="hijau">
                    </span>
                    <span class="title">Input Data</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="riwayat_transaksi.php">
                    <span class="icon">
                        <img src="../assets/Icon/transaction_p.png" alt="Riwayat Transaksi" class="putih">
                        <img src="../assets/Icon/transaction_h.png" alt="Riwayat Transaksi" class="hijau">
                    </span>
                    <span class="title">Riwayat Transaksi</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- ====================================== -->
    <!-- ISI CONTENT -->
    <!-- ====================================== -->
    <div class="container">
        <div class="row header">
            <h2>Input Data</h2>
            <h5>
                <a href="">Beranda</a>
                <span class="panah">></span>
                <a href="">Input Data</a>
            </h5>
        </div>

        <!-- PHASE 3 -->
        <div id="phase-3">
            <div class="row">
                <h5>Jenis Daur Ulang</h5>
                <ul>
                    <li class="dropdown">
                        <a href="#">
                            <img src="../assets/Icon/delete-button.png" alt="Hapus" id="hapus">
                        </a>
                        <div class="list">
                            <span class="jenis"> Arsip Kantor</span>
                            <img src="../assets/Icon/arrow-point-to-right.png" alt="panah" id="panah">
                            <img src="../assets/Icon/add-button.png" alt="Add" id="add"><input type="number" class="total" placeholder="100" min="0">kg
                        </div>
                        <ul class="isi-dropdown">
                            <li>
                                <span class="daur_ulang">Penimbangan 1&emsp;: 70kg</span>
                            </li>
                            <li>
                                <span class="daur_ulang">Penimbangan 2&emsp;: 90kg</span>
                            </li>
                            <li class="daur_ulang_total">
                                <span>Total Berat&emsp;: 160kg</span>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Button -->
                <a href="input_data.php"><button type="submit" class="btn default">Tambah</button></a>
            </div>
            <div class="row">
                <h5>Perkiraan Pendapatan</h5>
                <div class="kotak">
                    <ul class="atas">
                        <li>
                            <span class="title">Total Harga</span>
                            <span class="keterangan">55.555</span>
                        </li>
                        <li>
                            <span class="title">Total Berat</span>
                            <span class="keterangan">300kg</span>
                        </li>
                        <li>
                            <span class="title">Biaya Admin (10%)</span>
                            <span class="keterangan">5.555</span>
                        </li>
                    </ul>
                    <h4 class="bawah">
                        <span class="title">Estimasi Pendapatan</span>
                        <span class="keterangan">50.555</span>
                    </h4>
                </div>
                <!-- Button -->
                <a href="input_data.php"><button type="submit" class="btn default mt-4">Input</button></a>
            </div>
        </div>
    </div>

    <!-- ====================================== -->
    <!-- JAVA SCRIPT -->
    <!-- ====================================== -->
    <!-- Navigation Interactive -->
    <script>
        let list = document.querySelectorAll('.navigation .list'); //NAVIGATION
        let nav_dropdown = document.querySelectorAll('.nav-dropdown #nav-ListDropdown');
        let nav_ListDropdown = document.querySelectorAll('.navigation-top ul li .nav-ListDropdown');
        let dropdown2 = document.querySelectorAll('#phase-2 ul li.dropdown .list');
        let isi_dropdown2 = document.querySelectorAll('#phase-2 ul li.dropdown ul.isi-dropdown');
        let dropdown3 = document.querySelectorAll('#phase-3 ul li.dropdown #panah');
        let isi_dropdown3 = document.querySelectorAll('#phase-3 ul li.dropdown ul.isi-dropdown');

        //Navbar Sebelah Kiri
        // for (let i = 0; i < list.length; i++) {
        //     list[i].onclick = function() {
        //         let j = 0;
        //         while (j < list.length) {
        //             list[j++].className = "list";
        //         }
        //         list[i].className = "list active";
        //     }
        // }

        //Dropdown Jenis Daur Ulangmu(Phase 3)
        {
            let active = 0;
            for (let i = 0; i < dropdown3.length; i++) {
                dropdown3[i].onclick = function() {
                    let j = 0;
                    if (active == 0) {
                        while (j < isi_dropdown3.length) {
                            isi_dropdown3[j++].className = "isi-dropdown";
                        }
                        isi_dropdown3[i].className = "isi-dropdown active";
                        active = 1;
                    } else {
                        while (j < isi_dropdown3.length) {
                            isi_dropdown3[j++].className = "isi-dropdown";
                        }
                        isi_dropdown3[i].className = "isi-dropdown";
                        active = 0;
                    }
                }
            }
        }
    </script>

    <!-- Toggle Button untuk Navigation -->
    <script>
        let menuToggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>

</body>

</html>