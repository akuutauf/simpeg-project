@extends('layouts.base-user')

@section('title')
    <title>SIMPEG | Beranda</title>
@endsection

@section('content')
    <div class="container py-5 mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 mb-3">
                <img src="{{ asset('img/ilustrator/welcome.svg') }}" class=" img-fluid " alt="">
            </div>
            <div class="col-lg-6 mb-3 text-right my-auto">
                <h1>Halo kamu,</h1>
                <h3>Selamat datang di aplikasi Simpeg.</h3>
                <p class="text-secondary">Masuk ke admin untuk memulai manajemen data Pegawai, mari manajemen data pegawai
                    Anda bersama kami.</p>
                <a href="login" type="button" class="btn bg-btn-theme text-white">Login Sekarang</a>
            </div>
        </div>
        <div class="row py-4 justify-content-around mb-4 mt-3">
            <div class="col-lg-4">
                <h3><span class="text-color-theme fw-semi-bold">100</span> Pegawai</h3>
                <p class="text-justify text-secondary">Kemi telah berpartners bersama puluhan lebih pegawai, dan kami juga
                    merekrut banyak sekali pegawai hal berkualitas dan ahli dibidangnya.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset('img/ilustrator/data-home.svg') }}" alt="">
            </div>
        </div>
    </div>
@endsection
