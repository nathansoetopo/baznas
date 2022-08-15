@extends('layouts/master')
@section('content')
<!--Form-->
<section class="page-section pb-0 p-0" id="about">
    <div class="container-fluid" style="background-image:url('assets/img/kraton-2.png'); padding-top:5%;">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $error }}
            </div>
        </div>
        @endforeach
        @endif
        @if (session('status'))
        <div class="alert alert-info alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('status') }}
            </div>
        </div>
        @endif
        <div class="row row-zakat">
            <div class="col-md-5" id='hide-content'>
                <div class="right-content mt-5"
                    style="padding-left: 10%; padding-right: 10%; width: 100%; height: auto; position: relative; transform: translateY(8%);">
                    <div class="latin text-white" style="text-align: left; font-size: clamp(14px, 3vw, 18px);">
                        Selamat datang di platform ZIS online BAZNAS
                        <br>
                        Kota Surakarta
                    </div>
                    <div class="latin text-white mt-5"
                        style="text-align: left; font-size: clamp(20px, 3vw, 36px); font-weight: 700;">
                        SIAP BAYAR ZAKAT <br>
                        SEKARANG?
                    </div>
                    <div class="latin text-white" style="text-align: left; font-size: clamp(14px, 3vw, 18px);">
                        Bersihkan diri dengan membayar zakat <br>
                        bersama BAZNAS Surakarta melalui media <br>
                        online
                    </div>
                    <div class="latin text-white"
                        style="text-align: left; font-size: clamp(10px, 3vw, 15px); margin-top: 100px;">
                        Periode
                    </div>
                    <h3 class="text-warning mt-3"><strong>2021/2022</strong></h3>
                    <h5 class="text-white mt-4">Jumlah Donatur : *</h5>
                    <h5 class="text-white mt-4">Jumlah Penerima : *</h5>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-zakat bg-white">
                    <div class="heading-form">
                        <p class="text-form">
                            Mulai Bayar Zakat
                        </p>
                        <hr id="hr-form">
                    </div>
                    <form action="{{ url('bayar-zakat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label for="select-zakat" class="form-label">Jenis Zakat</label>
                            <select class="form-select form-control text-muted" aria-label="Default select example"
                                id="select-zakat" name="jenis">
                                <option value="Fitrah">Fitrah</option>
                                <option value="Maal">Maal</option>
                                <option value="Fidyah">Fidyah</option>
                                <option value="Qurban">Qurban</option>
                                <option value="Infaq">Infaq</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nominal-zakat" class="form-label">Nominal Zakat</label>
                            <input type="number" min="1" placeholder="Masukan nominal min Rp 10.000"
                                class="form-control text-muted" id="nominal-zakat" name="nominal">
                        </div>
                        <div class="form-group mt-4">
                            <label for="nominal-zakat" class="form-label">Bukti Pembayaran</label>
                            <input type="file" name="image" id="">
                        </div>
                        <div class="heading-form mt-5">
                            <p class="text-form">
                                Lengkapi Data Diri
                            </p>
                        </div>
                        <div class="form-group mt-4">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama lengkap" class="form-control text-muted"
                                id="nama" name="name">
                        </div>
                        <div class="form-group mt-4">
                            <label for="telp" class="form-label">Nomor Telepon</label>
                            <input type="number" placeholder="Masukkan nomor WA" class="form-control text-muted"
                                id="telp" name="phone">
                        </div>
                        <div class="form-group mt-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" placeholder="Masukkan alamat email" class="form-control text-muted"
                                id="email" name="email">
                        </div>
                        {{-- <div class="form-check mt-3">
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                <strong>Jadikan Anonim (Hamba Allah)</strong>
                            </label>
                            <input class="form-check-input bg-secondary border-0" type="checkbox" value="anonim" name="status" id="flexCheckChecked">
                        </div> --}}
                        <div class="footer-form" style="margin-top: 10%;">
                            <p class="text-form">
                                Niat Melakukan Zakat
                            </p>
                            <br>
                            <center>
                                <div class="arab">
                                    نَوَيْتُ أَنْ أُخْرِجَ زَكَاةَ مَالِى فَرْضًا لِلَّهِ تَعَالَى
                                </div>
                                <div class="latin">
                                    Nawaitu an Ukhrija Zakaata Maali Fardhon Lillaahi Ta’aala
                                    <br><br>
                                    “Saya berniat sengaja mengeluarkan zakat fardhu karena Allah Ta’ala”
                                </div>
                                {{-- <div class="btn mt-5 p-3 text-white" style="border-radius: 10px; background-color: #FF9900;" data-bs-toggle="modal" data-bs-target="#exampleModal">LANJUTKAN PEMBAYARAN</div> --}}
                                <button type="submit" class="btn btn-success">Bayar Zakat</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid image-bottom p-0">
        <img src="assets/img/backgroundbawah.png" style="width: 100%; height: auto;" alt="">
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center"
                style="background-color: #D9D9D9; border: 1px; border-color: black; border-style: solid;">
                <h5 class="modal-title" id="exampleModalLabel">SCAN QRIS</h5>
            </div>
            <div class="modal-body" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                style="background-color: #fff; border: 1px; border-color: black; border-style: solid;">
                QRIS Doku
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <img src="assets/img/portfolio/logo/iconqris.png" style="width: 25%;">
            </div>
            <div class="modal-header justify-content-center"
                style="background-color: #D9D9D9; border: 1px; border-color: black; border-style: solid;">
                <h5 class="modal-title" id="exampleModalLabel">Transfer Bank</h5>
            </div>
            <div class="modal-body justify-content-center"
                style="border: 1px; border-color: black; border-style: solid;">
                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2">Bank Jateng</a>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <img src="assets/img/portfolio/logo/iconbankjateng.png" style="width: 25%;">
            </div>
            <div class="modal-body justify-content-center"
                style="border: 1px; border-color: black; border-style: solid;">
                Bank BSI
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                <img src="assets/img/portfolio/logo/iconbankbsi.png" style="width: 25%;">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #01502D; height: 150px;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white; margin-bottom: 20%;">BAZNAS
                    BAZIS Kota Surakarta</h5>
            </div>
            <div class="modal-body">
                <div class="card col-sm-10"
                    style="border-radius: 15px; position: absolute; transform: translate(7%, -65%);">
                    <div class="card-header" style="color: #fff;">
                        <div class="row">
                            <div class="col-3">
                                <div style="color: black; font-size: small;">Total Bayar</div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-3">
                                <h6 style="color: black; font-size: small;">Bayar dalam <b
                                        style="color: #1400FF;">23.45.50</b></h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><b>Rp 500.000</b></h2>
                        <p style="color: #656565;">ORDER ID #8723468723487623</p>
                    </div>

                </div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div style="color: black; font-size: large;"><b>QRIS Doku</b></div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5"><img src="assets/img/portfolio/logo/iconqris.png"
                                style="width: 80%; transform: translate(30%, -40%);"></b></h6>
                        </div>
                    </div>
                    <div class="col-12">
                        <div style="color: black;"><img src="assets/img/qris.png"
                                style="width: 50%; transform: translate(50%, 0%);"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                    style="background-color: #FF9900; border-color: #FF9900; transform: translate(-55%);"
                    data-bs-toggle="modal" data-bs-target="#exampleModal4">SAYA SUDAH MEMBAYAR</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #01502D; height: 150px;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white; margin-bottom: 20%;">BAZNAS
                    BAZIS Kota Surakarta</h5>
            </div>
            <div class="modal-body">
                <div class="card col-sm-10"
                    style="border-radius: 15px; position: absolute; transform: translate(7%, -65%);">
                    <div class="card-header" style="color: #fff;">
                        <div class="row">
                            <div class="col-3">
                                <div style="color: black; font-size: small;">Total Bayar</div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-3">
                                <h6 style="color: black; font-size: small;">Bayar dalam <b
                                        style="color: #1400FF;">23.45.50</b></h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2><b>Rp 500.000</b></h2>
                        <p style="color: #656565;">ORDER ID #8723468723487623</p>
                    </div>

                </div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div>&emsp;</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div style="color: black; font-size: large;"><b>Bank Jateng</b></div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5"><img src="assets/img/portfolio/logo/iconbankjateng.png"
                                style="width: 80%; transform: translate(30%, -40%);"></b></h6>
                        </div>
                    </div>
                    <div class="col-12">
                        <div style="color: black; font-size: small;">Selesaikan pembayaram dari Bank Jateng ke nomor
                            rekening
                            di bawah ini.</div>
                    </div>
                    <div>&emsp;</div>
                    <div>&nbsp;</div>
                    <div class="row">
                        <div class="col-5">
                            <div style="color: black; font-size: medium;">Nomor Rekening</div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div style="color: black; font-size: medium; width: 80%; transform: translate(70%, -60%);">
                                <p><b>5023038899</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                    style="background-color: #FF9900; border-color: #FF9900; transform: translate(-55%);"
                    data-bs-toggle="modal" data-bs-target="#exampleModal4">SAYA SUDAH MEMBAYAR</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #F0F0F0;">
            <div class="modal-body">
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(10%, -3%);">Mohon tunggu, Pembayaran anda sedang
                    tertunda</h5>
                <hr class="justify-content-center" id="hr-form1" style="transform: translate(10%, -65%);">
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(40%, -3%);">Nama Lengkap</h5>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(40%, -3%);">Nomor Telefon</h5>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(47%, -3%);">Email</h5>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(47%, -3%);">Total</h5>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <h5 style="font-size: medium; transform: translate(35%, -3%);">Metode Pembayaran</h5>



            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center"
                style="background-color: #D9D9D9; border: 1px; border-color: black; border-style: solid;">
                <h5 class="modal-title" id="exampleModalLabel">SCAN QRIS</h5>
            </div>
            <div class="modal-body"
                style="background-color: #fff; border: 1px; border-color: black; border-style: solid;">
                QRIS Doku
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                <img src="assets/img/portfolio/logo/iconqris.png" style="width: 25%;">
            </div>
            <div class="modal-header justify-content-center"
                style="background-color: #D9D9D9; border: 1px; border-color: black; border-style: solid;">
                <h5 class="modal-title" id="exampleModalLabel">Transfer Bank</h5>
            </div>
            <div class="modal-body justify-content-center text-dark"
                style="border: 1px; border-color: black; border-style: solid;">
                Bank Jateng
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <img src="assets/img/portfolio/logo/iconbankjateng.png" style="width: 25%;">
            </div>
            <div class="modal-body justify-content-center"
                style="border: 1px; border-color: black; border-style: solid;">
                Bank BSI
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                <img src="assets/img/portfolio/logo/iconbankbsi.png" style="width: 25%;">
            </div>
        </div>
    </div>
</div>
