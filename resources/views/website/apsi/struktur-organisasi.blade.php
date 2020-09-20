@extends('layouts.app')
@section('title','Strukutur Organisasi - DPD APSI JABAR')
@section('style')
<style>

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
                    <h1 class="">Struktur Organisasi</h1>
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
                <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
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
                        <li class="list-group-item"><a href="{{url('/tentang/struktur-organisasi')}}">Struktur Organisasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Struktur Organisasi Tahun Periode 2018 - 2023</h3>
                <img src="{{asset('landingpage/images/org.png')}}" class="img-fluid" alt="Responsive image">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{asset('')}}" class="img-fluid" alt="Ketua Umum"></td>
                            <td>Ketua Umum</td>
                            <td>H.A.Aziz Said, SE</td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('')}}" class="img-fluid" alt="Ketua Umum"></td>
                            <td>Sekertariat Jendral</td>
                            <td>H.Djarot Soeprianto, SE</td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('')}}" class="img-fluid" alt="Ketua Umum"></td>
                            <td>Bendahara Umum</td>
                            <td>Jantje Kaunang</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')

@endsection