<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Baznas Surakarta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!--Pihak Ke 3-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <!--Chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <!--Style-->
    <style>
        /*Bagian tentang kami*/
        .text-content {
            text-align: justify;
            font-size: clamp(11px, 1vw, 24px);
        }

        /*Hero Section*/
        .hero-section {
            background-image: url('./assets/img/kraton.png');
        }

        .nav-link {
            font-size: clamp(5px, 2vw, 22px);
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        @media (min-width: 1200px) {
            .nav-item {
                margin-right: auto;
                margin-left: auto;
            }

            /*Hero*/
            .heading {
                font-size: clamp(22px, 5vw, 48px);
                color: white;
                font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif;
                font-weight: bold;
                vertical-align: middle;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                padding-left: 10%;
            }

            #hr-hero {
                width: 500px;
                transform: translateX(11%);
                color: #FF9900;
                height: 5px;
                opacity: 1;
            }

            .image-footer {
                width: 153px;
                height: 143px;
            }

            .heading-center {
                margin-top: 50px;
            }

            #youtube {
                width: 560px;
                height: 315px;
            }

            .imagefooter {
                width: 100%;
                height: auto;
            }

            .form-zakat {
                padding: 10%;
                width: 100%;
                height: auto;
                position: relative;
                transform: translateY(8%);
            }

            .row-zakat {
                width: 100%;
                padding-left: 35px;
                padding-right: 35px;
            }
        }

        @media (max-width: 1200px) {
            .row-zakat {
                padding: 0;
            }

            .carousel-control-prev {
                display: none;
            }

            .carousel-control-next {
                display: none;
            }

            .imagefooter {
                width: 100%;
                height: auto;
            }

            #navbarResponsive {
                margin-top: 20px;
            }

            .carousel-item img {
                height: 500px;
            }

            .form-zakat {
                padding: 3%;
                width: 100%;
                height: auto;
                margin-top: 25%;
                margin-bottom: 5%;
            }

            .heading {
                font-size: clamp(20px, 5vw, 48px);
                color: white;
                font-family: Montserrat, "Open Sans", Helvetica, Arial, sans-serif;
                font-weight: bold;
                vertical-align: middle;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                padding-left: 10%;
            }

            #hr-hero {
                width: 60px;
                color: #FF9900;
                height: 5px;
                opacity: 1;
            }

            .image-footer {
                width: 100px;
                height: auto;
            }

            .heading-center {
                margin-top: 20px;
            }

            #youtube {
                width: 100%;
                height: auto;
            }

            #myChart {
                display: none;
            }

            .image-infaq {
                display: none;
            }

            #bayar-zakat {
                display: none;
            }
        }

        /*Footer*/
        .footer-clean {
            background-color: #01502D;
            color: white;
        }

        .footer-clean h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 18px;
        }

        .footer-clean ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 18px;
            margin-bottom: 0;
        }

        .footer-clean ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.8;
        }

        .footer-clean ul a:hover {
            opacity: 1;
        }

        .footer-clean .item.social {
            text-align: center;
        }

        .item-menu {
            text-align: left;
            font-size: 20px;
            ;
        }

        @media (max-width: 767px) {
            .footer-clean .item {
                text-align: left;
                padding-bottom: 20px;
            }

            #hide-content {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .footer-clean .item.social {
                text-align: center;
            }
        }

        .footer-clean .item.social>a {
            font-size: 24px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            border: 1px solid black;
            margin-left: 10px;
            margin-top: 22px;
            color: inherit;
            opacity: 0.75;
        }

        .footer-clean .item.social>a:hover {
            opacity: 0.9;
        }

        @media (max-width: 991px) {
            .footer-clean .item.social>a {
                margin-top: 40px;
            }
        }

        @media (max-width: 767px) {
            .footer-clean .item.social>a {
                margin-top: 10px;
            }
        }

        .end-copyright .copyright {
            font-size: clamp(10px, 2vw, 17px);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            opacity: 1;
            font-weight: normal;
            color: white;
        }

        .end-copyright {
            background-color: #053922;
            padding-top: 18px;
            padding-bottom: 5px;
        }

        .heading-left {
            color: #FF9900;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
            font-size: clamp(13px, 3vw, 18px);
        }

        .content-left {
            color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: normal;
            font-size: clamp(10px, 1vw, 15px);
        }

        .form-check-label {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: clamp(12px, 3vw, 14px);
            font-weight: normal;
            color: white;
        }

        .heading-center {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: clamp(10px, 2vw, 24px);
            font-weight: 600;
            color: #FF9900;
        }

        .card-title {
            font-size: clamp(10px, 2vw, 24px);
            font-weight: 600;
        }

        .card-text {
            font-size: clamp(10px, 2vw, 14px);
            font-weight: normal;
        }

        /*Form*/
        /*Content*/
        .image-bottom {
            margin-top: 12%;
        }

        .form-check-label {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: clamp(12px, 3vw, 14px);
            font-weight: normal;
            color: white;
        }


        /*This Page*/
        .heading-form {
            width: fit-content;
        }

        #hr-form {
            color: #FF9900;
            height: 4px;
            opacity: 1;
        }

        .text-form {
            font-size: clamp(15px, 2vw, 24px);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
        }

        .form-control {
            background-color: #E2E2E2;
            border: none;
            height: 58px;
            font-size: clamp(10px, 2vw, 16px);
        }

        .arab {
            font-size: clamp(15px, 2vw, 36px);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 400;
        }

        .latin {
            font-size: clamp(12px, 1vw, 18px);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: normal;
            text-align: center;
            margin-top: 30px;
        }

        .form-zakat {
            border: solid;
            border-color: black;
            border-radius: 30px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav" style="color: white; border-bottom: #01502D; border-style: solid;">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 60%;" src="assets/img/logo2.png" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav my-2 col-lg-12">
                    <li class="nav-item"><a class="nav-link text-dark" href="/">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarOrganisasi" data-bs-toggle="dropdown" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarOrganisas" style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="/legalitas">Legalitas</a></li>
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/organisasi">Organisasi</a></li>
                            <li><a class="dropdown-item" href="/sejarah-organisasi">Sejarah Organisasi</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Program</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="program-kkn.html">Program KKN</a></li>
                            <li><a class="dropdown-item" href="program-santunan.html">Program Santunan</a></li>
                            <li><a class="dropdown-item" href="program-ekonomi.html">Program Pemberdayaan Ekonomi</a>
                            </li>
                            <li><a class="dropdown-item" href="program-beasiswa.html">Program Beasiswa</a></li>
                            <li><a class="dropdown-item" href="program-subsidi.html">Program Bantuan Subsidi</a></li>
                            <li><a class="dropdown-item" href="program-distribusi.html">Program Pendistribusian
                                    Zakat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarLayanan" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLayanan" style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="/rekening-zakat">Rekening Zakat</a></li>
                            <li><a class="dropdown-item" href="/layanan-pembayaran">Layanan Pembayaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar" data-bs-toggle="dropdown" aria-expanded="false">Kabar</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarKabar" style="border-top: #01502D; border-style: solid;">
                            {{-- <li><a class="dropdown-item" href="/berita">Berita</a></li>
                            <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
                            <li><a class="dropdown-item" href="/pendistribusian">Pendistribusian</a></li>
                            <li><a class="dropdown-item" href="/video-kegiatan">Video Kegiatan</a></li> --}}
                            <li><a class="dropdown-item" href="{{ url('kabar-zakat') }}">Kabar Zakat</a></li>
                            <li><a class="dropdown-item" href="{{ url('artikel') }}">Artikel</a></li>
                            <li><a class="dropdown-item" href="{{ url('inspirasi') }}">Inspirasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/hubungi-kami">Hubungi</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/zakat"><button class=" btn btn-primary" style="border-radius: 10px;">
                                <i class="fas fa-wallet"></i> Bayar Zakat</button>
                        </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar" data-bs-toggle="dropdown" aria-expanded="false">Pilih Bahasa</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarKabar" style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="#"><img src="./assets/img/ina.png" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">ID</a></li>
                            <li><a class="dropdown-item" href="#"><img src="./assets/img/arab.png" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">Arab</a></li>
                            <li><a class="dropdown-item" href="#"><img src="./assets/img/en.png" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">EN</a></li>
                            <li><a class="dropdown-item" href="#"><img src="./assets/img/chin.png" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">CHI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!--Content-->
</body>
<!-- Footer-->
<footer class="footer-clean main-footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 col-sm-6 col-md-5 item mt-2" style="padding-left: 5%; padding-right: 5%;">
                    <ul>
                        <li class="mt-3">
                            <p class="heading-left">Alamat Kantor :</p>
                            <p class="content-left">
                                Sumber, Banjarsari, Kota Surakarta,
                                <br>
                                Jawa Tengah 57138
                            </p>
                        </li>
                        <li class="mt-3">
                            <p class="heading-left">Telepon :</p>
                            <p class="content-left">
                                081393055550
                            </p>
                        </li>
                        <li class="mt-3">
                            <p class="heading-left">Email :</p>
                            <p class="content-left">
                                baznaskota.surakarta@baznas.go.id
                            </p>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./assets/img/baznas.png" class="image-footer" alt="" style="width: 80px; height: auto; max-height: 150px;">
                        </div>
                        <div class="col-md-3">
                            <img src="./assets/img/uns.png" class="image-footer" alt="" style="width: 80px; height: auto; max-height: 150px;">
                        </div>
                        <div class="col-md-3">
                            <img src="./assets/img/logo-sv.png" class="image-footer" alt="" style="width: 80px; height: auto; max-height: 150px;">
                        </div>
                        <div class="col-md-3">
                            <img src="./assets/img/solo2.png" class="image-footer" alt="" style="width: 60px; height: auto; max-height: 120px;">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 item-menu mt-2">
                    <ul>
                        <li class="mt-2">
                            <div class="form-check form-check-inline">
                                <input style="background-color: white;" checked="" class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Kebijakan Privasi</label>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="form-check form-check-inline">
                                <input style="background-color: white;" checked="" class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Syarat &amp; Ketentuan</label>
                            </div>
                        </li>
                        <li class="mt-2">
                            <div class="form-check form-check-inline">
                                <input style="background-color: white;" checked="" class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">FAQ</label>
                            </div>
                        </li>
                    </ul>
                    <p class="heading-center">IKUTI KAMI DI :</p>
                    <ul>
                        <li class="mt-2">
                            <p class="content-left">
                              <a href="https://www.facebook.com/baznaskotasurakarta">
                                <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>&nbsp; baznaskotasurakarta
                              </a>
                            </p>
                        </li>
                        <li class="mt-2">
                            <p class="content-left">
                              <a href="https://www.instagram.com/baznaskota.surakarta/">
                                <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>&nbsp; baznaskota.surakarta
                              </a>
                            </p>
                        </li>
                        <li class="mt-2">
                            <p class="content-left">
                              <a href="https://twitter.com/BaznaskotaS">
                                <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>&nbsp; @BaznaskotaS
                              </a>
                            </p>
                        </li>
                        <li class="mt-2">
                            <p class="content-left">
                              <a href="https://www.youtube.com/channel/UChgLCY6zG-hdIWVupT9apVg">
                                <ion-icon name="logo-youtube" role="img" class="md hydrated" aria-label="logo youtube"></ion-icon>&nbsp; BAZNAS Kota Surakarta
                              </a>
                            </p>
                        </li>
                        <li class="mt-2">
                            <p class="content-left">
                              <a href="http://wa.me/081393055550">
                                <ion-icon name="logo-whatsapp" role="img" class="md hydrated" aria-label="logo whatsapp"></ion-icon>&nbsp; 081393055550
                              </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mt-2 pb-2">
                    <img src="assets/img/map.png" style="width: 110%; height: 70%;">
                </div>
            </div>
        </div>
        <div class="end-copyright container-fluid">
            <center>
                <p class="copyright text-white">
                    Copyright © 2022 Baznas Surakarta. All Rights Reserved
                </p>
            </center>
        </div>
    </footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="../js/js/chart.js/dist/Chart.min.js"></script>

<!-- Template JS File -->
<script src="../js/js/scripts.js"></script>
<script src="../js/custom.js"></script>

<!-- Page Specific JS File -->

<script>
    var xValues = ["Zakat Fitrah", "Infaq", "Sedekah", "Fidyah"];
    var yValues = [4000000, 6500000, 5000000, 3000000, 100000, 10000000];
    var barColors = ["#01502D", "#FF9900", "#C4C4C4", "#2E3192", "#2E3192"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: false,
                text: "World Wine Production 2018"
            }
        }
    });

</script>

</html>
