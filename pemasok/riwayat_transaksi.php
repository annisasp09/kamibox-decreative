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

    <title>Riwayat Transaksi | Pemasok Kamibox</title>

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
            <li class="list active">
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
            <li class="list">
                <b></b>
                <b></b>
                <a href="daftar_harga.php">
                    <span class="icon">
                        <img src="../assets/Icon/input_p.png" alt="Input Data" class="putih">
                        <img src="../assets/Icon/input_h.png" alt="Input Data" class="hijau">
                    </span>
                    <span class="title">Harga Barang</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- ====================================== -->
    <!-- ISI CONTENT -->
    <!-- ====================================== -->
    <div class="container">
        <div class="row header">
            <h2>Riwayat Transaksi</h2>
            <h5>
                <a href="">Beranda</a>
                <span class="panah">></span>
                <a href="">Riwayat Transaksi</a>
            </h5>
        </div>
        <div class="row">
            <ul class="list_riwayat">
                <li>
                    <div class="row2">
                        <div class="col">
                            <span class="tanggal">Sabtu, 26-2-2022</span>
                            <span class="nomor">#0001</span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="keterangan"><b>Sarah Rahmadanty | (90kg)</b></span>
                            <span class="harga"><b>Rp. 205.000</b></span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="alamat"><b>Alamat : </b>Jl. Tangguban Perahu, Kec. Padangsambian, Kab. Denpasar Barat Provonsi Bali</span>
                            <span class="status success">Berhasil</span>
                        </div>
                    </div>
                </li>
                <hr width="80%" size="2" align="left" style="margin-left: 80px;color:rgba(0, 0, 0, 0.2);">
                <li>
                    <div class="row2">
                        <div class="col">
                            <span class="tanggal">Sabtu, 26-2-2022</span>
                            <span class="nomor">#0001</span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="keterangan"><b>Sarah Rahmadanty | (90kg)</b></span>
                            <span class="harga"><b>Rp. 205.000</b></span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="alamat"><b>Alamat : </b>Jl. Tangguban Perahu, Kec. Padangsambian, Kab. Denpasar Barat Provonsi Bali</span>
                            <span class="status success">Berhasil</span>
                        </div>
                    </div>
                </li>
                <hr width="80%" size="2" align="left" style="margin-left: 80px;color:rgba(0, 0, 0, 0.2);">
                <li>
                    <div class="row2">
                        <div class="col">
                            <span class="tanggal">Sabtu, 26-2-2022</span>
                            <span class="nomor">#0001</span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="keterangan"><b>Sarah Rahmadanty | (90kg)</b></span>
                            <span class="harga"><b>Rp. 205.000</b></span>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="col">
                            <span class="alamat"><b>Alamat : </b>Jl. Tangguban Perahu, Kec. Padangsambian, Kab. Denpasar Barat Provonsi Bali</span>
                            <span class="status success">Berhasil</span>
                        </div>
                    </div>
                </li>
                <hr width="80%" size="2" align="left" style="margin-left: 80px;color:rgba(0, 0, 0, 0.2);">
            </ul>
        </div>
    </div>

    <!-- ====================================== -->
    <!-- JAVA SCRIPT -->
    <!-- ====================================== -->
    <!-- Navigation Interactive -->
    <script>
        let list = document.querySelectorAll('.navigation .list');
        let nav_dropdown = document.querySelectorAll('.nav-dropdown #nav-ListDropdown');
        let nav_ListDropdown = document.querySelectorAll('.navigation-top ul li .nav-ListDropdown');
        //Dropdown Navigasi
        {
            let active = 0;
            for (let i = 0; i < nav_dropdown.length; i++) {
                nav_dropdown[i].onclick = function() {
                    let j = 0;
                    if (active == 0) {
                        while (j < nav_ListDropdown.length) {
                            nav_ListDropdown[j++].className = "nav-ListDropdown";
                        }
                        nav_ListDropdown[i].className = "nav-ListDropdown active";
                        active = 1;
                    } else {
                        while (j < nav_ListDropdown.length) {
                            nav_ListDropdown[j++].className = "nav-ListDropdown";
                        }
                        nav_ListDropdown[i].className = "nav-ListDropdown";
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