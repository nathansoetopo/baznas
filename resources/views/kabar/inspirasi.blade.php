@extends('layouts/master')
@section('content')
<!--Hero Section-->
<header class="masthead">
    <div class="container-fluid hero-section" style="width: 100%;height: 350px;">
        <div class="heading">
            INSPIRASI
            <hr id="hr-hero">
        </div>
    </div>
</header>
<!--Content-->
<section style="padding-top: 10%; padding-bottom:5%;">
    <div class="container">
        <div class="row">
            @foreach ($inspirasi as $b)
            @if ($b->status == 'ACTIVE')
            <div class="mb-4 col-sm-12 col-lg-4 col-md-4">
                <div class="card" style="max-height: 400px; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <img src="{{ asset($b->gambar) }}" class="card-img-top" alt="" style="background-color: #FF9900; min-height: 250px; max-height: 300px;  border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body" style="background-color: #FF9900;  border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                        <h5 class="card-title">{{ $b->judul }}</h5>
                        <p class="card-text" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                        {{ substr(strip_tags($b->deskripsi), 0, 100) }}
                        {{ strlen(strip_tags($b->deskripsi)) > 50 ? "..." : "" }}
                        </p>
                        <a href="#" class="btn btn-primary2 text-secondary" style="float:right; border-radius: 30px; font-size:clamp(10px, 1vw, 18px);">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <nav aria-label="..." style="margin-top: 15%;">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link text-white" href="#" tabindex="-1" aria-disabled="true" style="background-color: #01502D;">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled" aria-current="page">
                    <a class="page-link" href="#" style="color:#01502D">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
