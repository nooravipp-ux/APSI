@extends('layouts.app')
@section('style')
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/satpam1.jpg')}}');height:30px;" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 class="">Keanggotaan</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li class="shadow p-4 mb-4 bg-white border rounded mt-lg-2 mb-lg-2"><a href="{{url('/keanggotaan/pendaftaran')}}">Daftar Gada Pratama</a></li>
                        <li class="shadow p-4 mb-4 bg-white border rounded mt-lg-1 mb-lg-2"><a href="{{url('/keanggotaan/pendaftaran')}}">Daftar Gada Madya</a></li>
                        <li class="shadow p-4 mb-4 bg-white border rounded mt-lg-1 mb-lg-2"><a href="{{url('/keanggotaan/pendaftaran')}}">Daftar Gada Utama</a></li>
                        <li class="shadow p-4 mb-4 bg-white border rounded mt-lg-1 mb-lg-2"><a href="{{url('/keanggotaan/pendaftaran-bujp')}}">Daftar Gada Utama BUJP</a></li>
                        <li class="shadow p-4 mb-4 bg-white border rounded mt-lg-1 mb-lg-2">Download Formulir Pendaftaran</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8 shadow p-4 mb-4 bg-white border rounded mt-lg-2 mb-lg-2">
            <h2>Persyaratan Anggota APSI </h2>
            <ul>
                <li>Keanggotan APSI terdiri dari 3 jenis :
                    <ol>
                        <li>Satpam pelaksana Sebagai Anggota Pratama memiliki Ijazah Gada Pratama</li>
                        <li>Supervisor Satpam Sebagai Anggota Madya memiliki Ijazah Gada Madya</li>
                        <li>Manajer Satpam Sebagai Anggota Utama memiliki Ijazah Gada Utama</li>
                    </ol>
                </li>
                
                <li>Anggota APSI akan menerima:
                    <ol>
                        <li>KTA APSI</li>
                        <li>Sertifikat keanggotaan APSIYang berlaku selama 3 (tiga) tahun</li>
                    </ol>
                </li>
                
                <li>KTA dan Sertifikat Keanggotaan APSI dikeluarkan oleh Dewan Pimpinan Pusat (DPP) APSI.</li>
                <li>Persyaratan administrasi keanggotaan : 
                    
                    <p><b>Anggota Pratama :</b></p>
                    <ul>
                        <li>Photocopy Ijazah Diklat Gada Pratama</li>
                        <li>Photocopy KTP</li>
                        <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PDH / PDL SATPAM dengan background biru</li>
                        <li>Bukti pembayaran uang pendaftaran dan iuran 3 tahun</li>
                    </ul>

                    <p><b>Anggota Madya :</b></p>
                    <ul>
                        <li>Photocopy Ijazah Diklat Gada Madya</li>
                        <li>Photocopy KTP</li>
                        <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PSH / PDL SATPAM dengan background kuning</li>
                        <li>Bukti pembayaran uang pendaftaran dan iuran 3 tahun</li>
                    </ul>

                    <p><b>Anggota Utama :</b></p>
                    <ul>
                        <li>Photocopy Ijazah Diklat Gada Utama</li>
                        <li>Photocopy KTP</li>
                        <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PDH / PDL SATPAM dengan background merah</li>
                        <li>Bukti pembayaran uang pendaftaran dan iuran 3 tahun</li>
                    </ul>
                </li>
                <li>Pendaftaran, dengan cara mengisi formulir pendaftaran :</li>
                <li>Pendaftaran, dengan cara mengisi formulir online :</li>
                    
            </ul>
        </div>
    </div>
</div>

@endsection