@extends('layouts.app')
@section('style')
<style>
ul.timeline {
    list-style-type: none;
    position: relative;
}

ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}

ul.timeline>li {
    margin: 20px 0;
    padding-left: 20px;
}

ul.timeline>li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
</style>
@endsection
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/dewan-pimpinan-daerah.jpg')}}');height:30px;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h2 class="caption mb-2">Tentang APSI</h2>
                    <h1 class="">Sejarah APSI</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm">
    <div class="container-fluid mt-3 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sejarah APSI</li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Link
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{url('/tentang/sejarah')}}">Sejarah APSI</a></li>
                        <li class="list-group-item"><a href="{{url('/tentang/visi-misi')}}">Visi Misi</a></li>
                        <li class="list-group-item" aria-current="page"><a href="{{url('/tentang/struktur-organisasi')}}">Struktur Organisasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Perkembangan Satpam di Indonesia dan Peraturannya</h3>
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="">1980</a>
                        <a href="#" class="float-right">30 Desember, 1980</a>
                        <p>Kelahiran SATPAM SKEP/126/XII/1980 Tertanggal 30 Desember 1980 oleh :</p>
                        <p>Jendaral Polisi (Purn.) Prof.Dr.Awaloedin Djamin, M.P.A</p>
                    </li>
                    <li>
                        <a href="#">2003</a>
                        <a href="#" class="float-right">2 Mei, 2003</a>
                        <p>Revisi buku pedoman tugas pengamanan Swakarsa berdasarkan skep KAPOLRI NO POL:
                            SKEP/1017/XII/2002 Tertanggal 17 Desember 2002:</p>
                        <p>Pelatihan terdiri sari 3 tingkat :</p>
                        <ol>
                            <li>Tingkat Dasar</li>
                            <li>Tingkat Lanjutan 1 (Danru/Danton)</li>
                            <li>Tingkat Lanjutan 2 (Manager)</li>
                        </ol>
                        <p>Masing-masing dengan pola 232 jam pelajran. </p>
                    </li>
                    <li>
                        <a href="#">2007</a>
                        <a href="#" class="float-right">10 Desember 2007</a>
                        <p>Peraturan KAPOLRI no 24 tahun 2007 tentang sistem manajemen pengamatan organisasi, perusahaan
                            dan /atau instansi/lembaga pemerintah </p>
                        <p>Pelatihan :</p>
                        <ol>
                            <li>Gada Pratama 232 jam Pelajaran</li>
                            <li>Gada Madya 160 Jam Pelajaran</li>
                            <li>Gada Utama 160 Jam Pelajaran</li>
                        </ol>
                    </li>
                    <li>
                        <a target="_blank" href="">2019</a>
                        <a href="#" class="float-right">2019</a>
                        <ol>
                            <li>Peraturan Kepolisian Republik Indonesia (Perpol) tentang sistem pengamanan swakarsa</li>
                            <li>Peraturan Keala Badan Pemeliharaan Keamanan (PERKABA) tentang SATPAM, BUJP, Pengguna
                                jasa Satpam dan Asosiasi</l>
                        </ol>
                        <p>Pelatihan :</p>
                        <ol>
                            <li>Gada Pratama = 172 JP untuk Pelaksana Satpam</li>
                            <li>Gada Madya 132 JP untuk Supervisor Satpam</l>
                            <li>Gada Utama = 78 JP untuk Manager Satpam</li>
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Sejarah APSI</h3>
                <ul class="timeline">
                    <li>
                        <a target="_blank" href="">2001</a>
                        <a href="#" class="float-right">9 Juli, 2001</a>
                        <p><b>ASOSIASI MANAGER SECURITY INDONESIA (AMSI)</b></p>
                        <p>Jakarta, Kartika Hotel</p>
                    </li>
                    <li>
                        <a href="#">2014</a>
                        <a href="#" class="float-right">21 November 2014</a>
                        <p><b>ASOSIASI PEOFESI SECURITI INDONESIA (APSI)</b></p>
                        <p>Jakarta, Park Hotel</p>
                    </li>
                    <li>
                        <a href="#">2018</a>
                        <a href="#" class="float-right">1 November 2018</a>
                        <p><b>ASOSIASI PEOFESI SATPAM INDONESIA (APSI)</b></p>
                        <p>Denpasar, Bali Dynasty Hotel</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection