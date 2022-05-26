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

    <title>Dashboard Pemasok| Pemasok Kamibox</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        /* ================================= */
        /* CONTENT LEFT RIGHT GRAFIK*/
        /* ================================= */

        .dashboard-wrapper {
            margin: auto;
            display: flex;

        }

        .row2 {
            margin-left: 150px;
            margin-top: 30px;
        }

        .row3 {
            margin-right: 150px;
            margin-top: 10px;
        }

        .row4 {
            margin-right: 250px;
            margin-top: 30px;
        }

        .card-grafik {
            width: 500px;
            box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            border-radius: 30px;
            background-color: #FFF;
        }

        .card-artikel {
            display: flex;
            gap: 20px;
        }

        .swiper {
            width: 350px;
            height: 320px;
        }

        .swiper-slide {

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }




        .segmen-artikel {
            width: 200px;
            height: 250px;
            box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            border-radius: 30px;
            background-color: #FFF;
        }

        .img-artikel {
            position: absolute;
            width: 200px;
            height: 250px;
            border-radius: 30px;
        }

        .segmen-content-blogs {
            position: absolute;
            width: 200px;
            height: 180px;
            border-radius: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            margin-top: 70px;
        }

        .segmen-isi-blog {
            padding: 0 30px;
            font-size: 0.7rem;
        }

        .segmen-content-blogs .segmen-button-blog {
            margin-top: 5px;
            text-align: center;
        }

        .segmen-isi-blog .judul-blog {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .segmen-button-blog .btn-blog {
            font-weight: 500;
            color: #069B45;
            background-color: #FFF;
            margin: 40px 0;
            padding: 8px 20px;
            border-radius: 50px;
            font-family: var(--main-font);
            border: 1px solid green;
            font-size: 0.7rem;
        }

        .card-transaksi,
        .card-harga {
            width: 400px;
            box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            border-radius: 30px;
            background-color: #FFF;

        }

        .heading-grafik,
        .heading-transaksi,
        .heading-harga {
            padding-top: 5px;
            padding-left: 30px;

        }

        .content-grafik {
            margin: 0 30px;
        }

        .content-transaksi,
        .content-harga {
            display: flex;
            gap: 80px;
            margin: 0 30px;
            font-size: 0.8rem;
        }

        .tanggal {
            font-weight: 99;
        }

        .total,
        .harga,
        .produk {
            font-weight: 700;
        }

        .harga,
        .produk {
            font-weight: 600;
        }

        .produk,
        .harga {
            line-height: 65%;
        }

        .tanggal,
        .total {
            line-height: 85%;
        }

        .btn-transaksi,
        .btn-harga {
            text-align: center;
            padding: 15px;
        }

        .btn-selengkapnya {
            font-weight: 500;
            color: #069B45;
            background-color: #FFF;
            margin: 40px 0;
            padding: 8px 20px;
            border-radius: 50px;
            font-family: var(--main-font);
            border: 1px solid var(--main-color);
            outline: none;
            font-size: 0.85rem;
        }
    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Jenis sampah', 'Total Penjualan'],
                ['Kertas', 11],
                ['Plastik', 2],
                ['Logam', 2],
                ['Kaca', 2]
            ]);

            var options = {
                title: ' ',
                pieHole: 0.8,
                pieSliceTextStyle: {
                    color: 'none',
                },

            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>

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
            <li class="list active">
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
        <div class="dashboard-wrapper">

            <div class="cards">
                <div class="row2 card-grafik">
                    <div class="heading-grafik">
                        <h4>Grafik Terkini</h4>
                    </div>
                    <div class="content-grafik">
                        <div id="donutchart" style="width: 400px; height: 200px;"></div>
                    </div>
                    <p style="margin-left:30px;padding-bottom: 10px;font-size: 0.85rem;">Total Penjualan : <span style="font-weight: 700;margin-left: 30px;">RP 12.520.000,00</span></p>

                </div>

            </div>
            <div class="cards">
                <!-- Swiper -->
                <div class="row3 swiper mySwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="segmen-artikel">
                                <div class="post-img">
                                    <img class="img-artikel" src="../assets/images/artikel/s1.jpg">
                                </div>
                                <div class="segmen-content-blogs">
                                    <img class="img-bg-content-blog" src="">
                                    <div class="segmen-isi-blog">
                                        <p class="judul-blog">Buang atau Beruang?</p>
                                        <p class="isi-blog">Botol plastik yang sudah tidak ada isinya bisa jadi uang loh! Ingin tahu caranya?</p>
                                    </div>
                                    <div class="segmen-button-blog">
                                        <a href='#' class='btn-blog'>selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="segmen-artikel">
                                <div class="post-img">
                                    <img class="img-artikel" src="../assets/images/artikel/s2.jpg">
                                </div>
                                <div class="segmen-content-blogs">
                                    <img class="img-bg-content-blog" src="">
                                    <div class="segmen-isi-blog">
                                        <p class="judul-blog">Buang atau Beruang?</p>
                                        <p class="isi-blog">Botol plastik yang sudah tidak ada isinya bisa jadi uang loh! Ingin tahu caranya?</p>
                                    </div>
                                    <div class="segmen-button-blog">
                                        <a href='#' class='btn-blog'>selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="segmen-artikel">
                                <div class="post-img">
                                    <img class="img-artikel" src="../assets/images/artikel/s3.jpg">
                                </div>
                                <div class="segmen-content-blogs">
                                    <img class="img-bg-content-blog" src="">
                                    <div class="segmen-isi-blog">
                                        <p class="judul-blog">Buang atau Beruang?</p>
                                        <p class="isi-blog">Botol plastik yang sudah tidak ada isinya bisa jadi uang loh! Ingin tahu caranya?</p>
                                    </div>
                                    <div class="segmen-button-blog">
                                        <a href='#' class='btn-blog'>selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>




            </div>


        </div>

    </div>

    <div class="container">
        <div class="dashboard-wrapper">

            <div class="cards">
                <div class="row2 card-transaksi">
                    <div class="heading-transaksi">
                        <h4>Riwayat Transaksi</h4>
                    </div>
                    <div class="content-transaksi">
                        <div class="ct tanggal">
                            <p>Sabtu, 19 Januari 2022</p>
                            <p>Senin, 20 Januari 2022</p>
                            <p>Selasa, 21 Januari 2022</p>
                            <p>Rabu, 22 Januari 2022</p>
                            <p>Rabu, 22 Januari 2022</p>
                            <p>Sabtu, 26 Januari 2022</p>
                        </div>
                        <div class="ct total">
                            <p>Rp 205.000,00</p>
                            <p>Rp 225.000,00</p>
                            <p>Rp 215.000,00</p>
                            <p>Rp 200.000,00</p>
                            <p>Rp 235.000,00</p>
                            <p>Rp 205.000,00</p>
                        </div>
                    </div>
                    <div class="btn-transaksi">
                        <a href='#' class='btn-selengkapnya'>selengkapnya</a>
                    </div>
                </div>

            </div>
            <div class="cards">
                <div class="row4 card-harga">
                    <div class="heading-harga">
                        <h4>Daftar Harga</h4>
                    </div>
                    <div class="content-harga">
                        <div class="ct produk">
                            <p>Arsip Kantor</p>
                            <p>Kardus</p>
                            <p>HVS Berkas</p>
                            <p>Buku/Majalah</p>
                            <p>Botol Kaca</p>
                            <p>Botol Plastik</p>
                            <p>Kaleng</p>
                        </div>
                        <div class="ct harga">
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                            <p>Rp 5000/kg</p>
                        </div>
                    </div>
                    <div class="btn-harga">
                        <a href='#' class='btn-selengkapnya'>selengkapnya</a>
                    </div>
                </div>
            </div>

        </div><br /><br />


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

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            slidesPreview: "auto",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?73829';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "Chat Kamibox",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "Kamibox",
                "brandSubTitle": "Ada pertanyaan untuk kami?",
                "brandImg": "",
                "welcomeText": "Hai, Selamat Datang di Kamibox!\nAda yang bisa kami bantu?",
                "messageText": "Hai juga, Saya ada pertanyaan tentang {{page_link}}",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "6285735020915"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>



</body>

</html>