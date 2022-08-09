<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baznas Surakarta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!--Pihak Ke 3-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    {{-- Style --}}
    <link href="{{ asset('css/basnaz.css') }}" rel="stylesheet">
    <!--Chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav"
        style="color: white; border-bottom: #01502D; border-style: solid;">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 60%;"
                    src="{{ asset('assets/img/portfolio/logo/logo2.png') }}" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav my-2 col-lg-12">
                    <li class="nav-item"><a class="nav-link text-dark" href="/">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarOrganisasi"
                            data-bs-toggle="dropdown" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarOrganisas"
                            style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="/legalitas">Legalitas</a></li>
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/organisasi">Organisasi</a></li>
                            <li><a class="dropdown-item" href="/sejarah-organisasi">Sejarah Organisasi</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">Program</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="{{ url('program-kkn') }}">Program KKN</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-santunan') }}">Program Santunan</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-pemberdayaan') }}">Program Pemberdayaan
                                    Ekonomi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('program-beasiswa') }}">Program Beasiswa</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-subsidi') }}">Program Bantuan Subsidi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('program-distribusi') }}">Program Pendistribusian
                                    Zakat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarLayanan"
                            data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLayanan"
                            style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="/rekening-zakat">Rekening Zakat</a></li>
                            <li><a class="dropdown-item" href="/layanan-pembayaran">Layanan Pembayaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar"
                            data-bs-toggle="dropdown" aria-expanded="false">Kabar</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarKabar"
                            style="border-top: #01502D; border-style: solid;">
                            @foreach ($category as $c)
                                <li><a class="dropdown-item"
                                        href="{{ url('kabar-list/' . $c->id) }}">{{ $c->display }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/hubungi-kami">Hubungi</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/zakat"><button
                                class=" btn btn-primary" style="border-radius: 10px;">
                                <i class="fas fa-wallet"></i> Bayar Zakat</button>
                        </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar"
                            data-bs-toggle="dropdown" aria-expanded="false">Pilih Bahasa</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarKabar"
                            style="border-top: #01502D; border-style: solid;">
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/ina.png') }}"
                                        class="border-0 border-circle"
                                        style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;"
                                        alt="">ID</a></li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/en.png') }}"
                                        class="border-0 border-circle"
                                        style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;"
                                        alt="">Arab</a></li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/en.png') }}"
                                        class="border-0 border-circle"
                                        style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;"
                                        alt="">EN</a></li>
                            <li><a class="dropdown-item" href="#"><img
                                        src="{{ asset('assets/img/chin.png') }}" class="border-0 border-circle"
                                        style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;"
                                        alt="">CHI</a></li>
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
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{ asset('assets/img/baznas.png') }}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{ asset('assets/img/uns.png') }}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{ asset('assets/img/logo-sv.png') }}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{ asset('assets/img/solo2.png') }}" class="imagefooter" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 item-menu mt-2">
                <ul>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked
                                class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1"
                                value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">Kebijakan Privasi</label>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked
                                class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1"
                                value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">Syarat & Ketentuan</label>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked
                                class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1"
                                value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">FAQ</label>
                        </div>
                    </li>
                </ul>
                <p class="heading-center">IKUTI KAMI DI :</p>
                <ul>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.facebook.com/baznaskotasurakarta">
                                <ion-icon name="logo-facebook"></ion-icon>&nbsp baznaskotasurakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.instagram.com/baznaskota.surakarta/">
                                <ion-icon name="logo-instagram"></ion-icon>&nbsp baznaskota.surakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://twitter.com/BaznaskotaS">
                                <ion-icon name="logo-twitter"></ion-icon>&nbsp @BaznaskotaS
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.youtube.com/channel/UChgLCY6zG-hdIWVupT9apVg">
                                <ion-icon name="logo-youtube"></ion-icon>&nbsp BAZNAS Kota Surakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="http://wa.me/081393055550">
                                <ion-icon name="logo-whatsapp"></ion-icon>&nbsp 081393055550
                            </a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mt-2 pb-2">
                <img src="{{ asset('assets/img/map.png') }}" style="width: 100%; height: auto;">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/zakat.js') }}"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script>
    var alert = '';

    function resetErrors() {
        $('#showErrors').empty();
        alert = '';
    }
    // Zakat Fitrah
    $(document).ready(function() {
        $(document).on('click', '#hitungFitrah', function() {
            var price = $('#priceFitrah').val();
            var weight = 2.5;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-fitrah') }}",
                method: 'POST',
                data: {
                    price: price,
                    weight: weight,
                },
                success: function(response) {
                    $('#resultFitrah').val(response);
                }
            })
        });
    });

    // Zakat Maal
    $(document).ready(function() {
        $(document).on('click', '#hitungMaal', function() {
            var gajiPokok = $('#gajiPokok').val();
            var tunjangan = $('#tunjangan').val();
            var hutang = $('#hutang').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-maal') }}",
                method: 'POST',
                data: {
                    gajiPokok: gajiPokok,
                    tunjangan: tunjangan,
                    hutang: hutang,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                        // alert(response.errors);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Zakat Fidyah
    $(document).ready(function() {
        $(document).on('click', '#hitungFidyah', function() {
            var day = $('#day').val();
            var soul = $('#soul').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-fidyah') }}",
                method: 'POST',
                data: {
                    hari: day,
                    jiwa: soul,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Qurban
    $(document).ready(function() {
        $(document).on('click', '#hitungQurban', function() {
            var qurban = $('#qurban').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-qurban') }}",
                method: 'POST',
                data: {
                    jenisQurban: qurban,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Infaq
    $(document).ready(function() {
        $(document).on('click', '#hitungInfaq', function() {
            var gaji = $('#gaji').val();
            var tunjangan = $('#tunjangan').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-infaq') }}",
                method: 'POST',
                data: {
                    gaji: gaji,
                    tunjangan: tunjangan,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });
</script>
@if (Request::is('/'))
    <script>
        $(document).on('click', '#next', function() {
            var data = $('#next').data("id");
            var move = 'next';
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/next-carrousel') }}",
                method: 'POST',
                data: {
                    data: data,
                    array: {!! json_encode($test) !!},
                    move: move,
                },
                success: function(response) {
                    console.log(response)
                    $('#result-carrousel').fadeOut(1000, function() {
                        $('#result-carrousel').html(response);
                        $("#result-carrousel").fadeIn(1000);
                    });
                }
            })
        });

        $(document).on('click', '#prev', function() {
            var data = $('#next').data("id");
            var move = 'prev';
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/next-carrousel') }}",
                method: 'POST',
                data: {
                    data: data,
                    array: {!! json_encode($test) !!},
                    move: move,
                },
                success: function(response) {
                    console.log(response)
                    $('#result-carrousel').fadeOut(1000, function() {
                        $('#result-carrousel').html(response);
                        $("#result-carrousel").fadeIn(1000);
                    });
                }
            })
        });
    </script>
@endif
@if (!empty($fitrah) && !empty($infaq) && !empty($sedekah) && !empty($fidyah))
    <script>
        var xValues = ["Zakat Fitrah", "Infaq", "Sedekah", "Fidyah"];
        var yValues = [{!! $fitrah !!}, {!! $infaq !!}, {!! $sedekah !!}, {!! $fidyah !!}];
        var barColors = ["#01502D", "#FF9900", "#C4C4C4", "#2E3192", "#2E3192"];
        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Laporan Data"
                }
            }
        })
    </script>
@endif

</html>
