@extends('layouts.app')
@section('title','VISI-MISI APSI JABAR - DPD APSI JABAR')
@section('description', 'Menjadikan Profesi Satpam Sebagai Bidang Pekerjaan yang Lebih Diakui, Dihargai dan Dibanggakan')
@section('style')
<style>
p {
    text-align: justify;
}

.custom-bg {
    background-color: #0f263a;
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
                    <h1 class="">visi & Misi</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-block-half d-flex">
    <div class="container-fluid mt-3 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb custom-bg">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header custom-bg">
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
                <h3>DEKLARASI APSI 2018</h3>
                <p>Pada hari ini, JUM’AT, tanggal DUA bulan NOVEMBER tahun DUA RIBU DELAPAN BELAS, Pengurus Asosiasi Profesi Sekuriti Indonesia (APSI) yang beranggotakan Satpam di wilayah Nusantara, bersepakat untuk merubah Asosiasi Profesi Sekuriti Indonesia (APSI), menjadi ASOSIASI PROFESI SATPAM INDONESIA (APSI) dengan pertimbangan, agar lebih fokus pada pengembangan Kompetensi Profesi Satpam.
                    Denpasar – Bali, 02 November 2018</p>
                <h3>Visi & Misi APSI 2018 - 2023</h3>
                <h4>Visi</h4>
                <p>Menjadikan Profesi Satpam Sebagai Bidang Pekerjaan yang Lebih Diakui, Dihargai dan Dibanggakan</p>
                <h4>Misi</h4>
                <ul>
                    <li>Menjadi Mitra Polri dalam Mengembangkan Regulasi Bidang Industrial Security di Indonesia</li>
                    <li>Meningkatkan Profesionalisme Personil Satpam Melalui Pendidikan, Pelatihan dan Sertifikasi</li>
                    <li>Membantu Polri dalam Menegakkan Peraturan Satpam di Indonesia</li>
                    <li>Memberikan Pendampingan dan Advokasi Hukum Anggota Asosiasi Terkait Ketenaga Kerjaan, dengan Pemberi Kerja</li>
                    <li>Memperjuangkan Hak-Hak Satpam Sesuai Ketentuan Ketenaga Kerjaan dan Ketentuan Polri</li>
                    <li>Menggalang Kerja Sama dengan Asosiasi Bidang Sekuriti lain, baik Nasional , Regional dan International</li>
                    <li>Mewujudkan Pekerjaan Satpam menjadi Profesi Satpam</li>
                </ul>
                <h3>Obsesi APSI</h3>
                <ol>
                    <li>Yang dapat disebut anggota Satapam bila memenuhi 3 kriteria :</li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection