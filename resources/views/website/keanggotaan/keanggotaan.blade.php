@extends('layouts.app')
@section('title','PENDAFTARAN SATPAM APSI JABAR - DPD APSI JABAR')
@section('style')
<style>
.timeline {
    padding: 50px 0;
    position: relative;
}

.timeline-nodes {
    padding-bottom: 25px;
    position: relative;
}

.timeline-nodes:nth-child(even) {
    flex-direction: row-reverse;
}

.timeline h3,
.timeline p {
    padding: 5px 15px;
}

.timeline h3 {
    font-weight: lighter;
    background: #0f263a;
}

.timeline p,
.timeline time {
    color: var(--blue)
}

.timeline::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 50%;
    width: 0;
    border-left: 2px dashed var(--blue);
    height: 100%;
    z-index: 1;
    transform: translateX(-50%);
}

.timeline-content {
    border: 1px solid var(--blue);
    position: relative;
    border-radius: 0 0 10px 10px;
    box-shadow: 0px 3px 25px 0px rgba(10, 55, 90, 0.2)
}

.timeline-nodes:nth-child(odd) h3,
.timeline-nodes:nth-child(odd) p {
    text-align: right;
}

.timeline-nodes:nth-child(odd) .timeline-date {
    text-align: left;
}

.timeline-nodes:nth-child(even) .timeline-date {
    text-align: right;
}

.timeline-nodes:nth-child(odd) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    left: 100%;
    width: 0;
    border-left: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}

.timeline-nodes:nth-child(even) .timeline-content::after {
    content: "";
    position: absolute;
    top: 5%;
    right: 100%;
    width: 0;
    border-right: 10px solid var(--blue);
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
}

.timeline-image {
    position: relative;
    z-index: 100;
}

.timeline-image::before {
    content: "";
    width: 80px;
    height: 80px;
    border: 2px dashed var(--blue);
    border-radius: 50%;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    z-index: 1;


}

.timeline-image img {
    position: relative;
    z-index: 100;
}

/*small device style*/

@media (max-width: 767px) {

    .timeline-nodes:nth-child(odd) h3,
    .timeline-nodes:nth-child(odd) p {
        text-align: left
    }

    .timeline-nodes:nth-child(even) {
        flex-direction: row;
    }

    .timeline::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 4%;
        width: 0;
        border-left: 2px dashed var(--blue);
        height: 100%;
        z-index: 1;
        transform: translateX(-50%);
    }

    .timeline h3 {
        font-size: 1.7rem;
    }

    .timeline p {
        font-size: 14px;
    }

    .timeline-image {
        position: absolute;
        left: 0%;
        top: 60px;
        /*transform: translateX(-50%;);*/
    }

    .timeline-nodes:nth-child(odd) .timeline-content::after {
        content: "";
        position: absolute;
        top: 5%;
        left: auto;
        right: 100%;
        width: 0;
        border-left: 0;
        border-right: 10px solid var(--blue);
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
    }

    .timeline-nodes:nth-child(even) .timeline-content::after {
        content: "";
        position: absolute;
        top: 5%;
        right: 100%;
        width: 0;
        border-right: 10px solid var(--blue);
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
    }

    .timeline-nodes:nth-child(even) .timeline-date {
        text-align: left;
    }

    .timeline-image::before {
        width: 65px;
        height: 65px;
    }
}

/*extra small device style */
@media (max-width: 575px) {
    .timeline::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 3%;
    }

    .timeline-image {
        position: absolute;
        left: -5%;
    }

    .timeline-image::before {
        width: 60px;
        height: 60px;
    }
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
                    <h2 class="caption mb-2">APSI</h2>
                    <h1 class="">KEANGGOTAAN</h1>
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
                <li class="breadcrumb-item active" aria-current="page">Keanggotaan</li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Daftar Anggota
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}">Satpam</a></li>
                        <li class="list-group-item"><a href="{{url('/keanggotaan/pendaftaran-bujp')}}">BUJP</a></li>
                        <li class="list-group-item"><a href="">Download Formulir Pendaftaran</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Benefit Keanggotaan</h2>
                <div class="timeline">
                    <div
                        class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class="text-light">Meningkatkan Pengetahuan & keterampilan</h3>
                            <ol>
                                <li>Dapat mengakses informasi khusus untuk anggota melalui media sosial yang di kelola oleh sekertariat pusat APSI</li>
                                <li>Dapat mengikuti pelatihan, seminar, studi banding yang diadakan APSI dengan harga khusus</li>
                            </ol>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time></time>
                        </div>
                    </div>
                    <div
                        class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Komunitas Satpam</h3>
                            <ol>
                                <li>Terubung dalam komunitas satpam resmi di indonesia karena APSI terdaftar di mabes polri</li>
                                <li>Dapat berinteraksi aktif dengan komunitas satpam seluruh indonesia</li>
                                <li>Dapat berpartisipasi aktif dlam kegiatan yang diselenggarakan APSI dan POLRI</li>
                            </ol>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time></time>
                        </div>
                    </div>
                    <div
                        class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Konsultasi & Advokasi</h3>
                            <ol>
                                <li>Dapat berkonsultasi tentang perkembangan profesi satpam</li>
                                <li>Dapat meminta advokasi, terkait profesi satpam</li>
                                <li>Mendapat pendampingan untuk berkomunikasi dengan pemberi kerja</li>
                            </ol>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time></time>
                        </div>
                    </div>
                    <div
                        class="row no-gutters justify-content-end justify-content-md-around align-items-start  timeline-nodes">
                        <div class="col-10 col-md-5 order-3 order-md-1 timeline-content">
                            <h3 class=" text-light">Keanggotaan Profesi Satpam Nasional</h3>
                            <ol>
                                <li>Tercatat sebagaianggota profesi satpam nasional dengan memperoleh kartu tanda anggota APSI.</li>
                                <li>Dapat menyalurkan aspirasinya lewat APSI terkait profesi Satpam.</li>
                            </ol>
                        </div>
                        <div class="col-2 col-sm-1 px-md-3 order-2 timeline-image text-md-center">
                            
                        </div>
                        <div class="col-10 col-md-5 order-1 order-md-3 py-3 timeline-date">
                            <time>2018-02-23</time>
                        </div>
                    </div>
                </div>
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
                            <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PSH / PDL SATPAM dengan background kuning
                            </li>
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
</div>
@endsection

@section('script')

@endsection