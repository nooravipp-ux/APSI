@extends('layouts.app')
@section('title','PENDAFTARAN APSI JABAR - DPD APSI JABAR')
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
            <ol class="breadcrumb custom-bg">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keanggotaan</li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header custom-bg">
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
                                <li>Dapat mengakses informasi khusus untuk anggota melalui media sosial yang di kelola
                                    oleh sekertariat pusat APSI</li>
                                <li>Dapat mengikuti pelatihan, seminar, studi banding yang diadakan APSI dengan harga
                                    khusus</li>
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
                                <li>Terubung dalam komunitas satpam resmi di indonesia karena APSI terdaftar di mabes
                                    polri</li>
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
                                <li>Tercatat sebagaianggota profesi satpam nasional dengan memperoleh kartu tanda
                                    anggota APSI.</li>
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
                <h2>SATPAM</h2>
                <p>Satuan Pengamanan (Satpam) yang lahir pada 30 Desember 1980 telah menjadi aset negara di bidang
                    pengamanan. Keberadaan satpam di lingkungan kerja dan obyek vital telah memberikan andil terhadap
                    keamanan nasional.</p>
                <p>Satpam yang bertugas 24 jam ini terus meberikan layanan pengamanan tiada henti. pembagian tugas
                    selama 24 jam menjadikan kondisi lingkungan sekitar menjadi aman. Kondisi yang aman inilah yang
                    menjadi faktor para investor mau menanamkan modalnya ke negara ini.</p>
                <p>Tak heran jika almarhum Bapak Satpam Indonesia Prof Dr Awaloeddin Djamin, MPA mengatakan bahwa
                    ‘Negara harus berterima kasih kepada satpam’ sangat tidak berlebihan, karena jasa para satpam ini
                    pihak kepolisian sangat terbantu.</p>
                <p>Kini, satpam diusianya yang lebih dari tiga dasawarsa mulai menunjukkan eksistensinya dengan
                    menjadikan pekerjaan ini menjadi sebuah profesi. Karena itu, setiap satpam ke depan harus sudah
                    pernah mengikuti pendidikan dan latihan sebagaimana yang telah diatur dalam Perkap No.27.</p>
                <h2>Persyaratan Anggota SATPAM APSI </h2>
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
                            <li>Bukti pembayaran uang pendaftaran dan iuran 1 tahun</li>
                        </ul>

                        <p><b>Anggota Madya :</b></p>
                        <ul>
                            <li>Photocopy Ijazah Diklat Gada Madya</li>
                            <li>Photocopy KTP</li>
                            <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PSH / PDL SATPAM dengan background kuning
                            </li>
                            <li>Bukti pembayaran uang pendaftaran dan iuran 1 tahun</li>
                        </ul>

                        <p><b>Anggota Utama :</b></p>
                        <ul>
                            <li>Photocopy Ijazah Diklat Gada Utama</li>
                            <li>Photocopy KTP</li>
                            <li>Pas photo 2×3 sebanyak 2 lbr, memakai baju PDH / PDL SATPAM dengan background merah</li>
                            <li>Bukti pembayaran uang pendaftaran dan iuran 1 tahun</li>
                        </ul>
                    </li>
                </ul>
                
                <h2>BUJP (Badan Usaha Jasa Pengamanan)</h2>
                <p>Badan Usaha Jasa Pengamanan atau yang akrab disingkat BUJP ini ternyata tidak hanya melulu perusahaan
                    yang bergerak di bidang pengadaan satpam saja. Dalam Peraturan Kepolisian No. 17 Tahun 2006 tentang
                    Pedoman Pembinaan Badan Usaha Jasa Pengamanan yang tertuang dalam Pasal 3 dan Pasal 4, tersebut ada
                    6 jenis usaha BUJP. Berikut keenam BUJP tersebut:</p>
                <p>Inilah 6 Penggolongan BUJP sebagaimana diatur dalam Perkap No. 17 Tahun 2006:</p>
                <ol>
                    <li>Usaha Jasa Konsultasi Keamanan (Security Consultancy)
                        <p>Usaha Jasa Konsultasi Keamanan (Security Consultancy) memberikan jasa kepada pengguna jasa
                            berupa saran, pertimbangan atau pendapat dan membantu dalam pengelolaan tentang cara dan
                            prosedur pengamanan suatu objek.</p>
                    </li>
                    <li>Usaha Jasa Penerapan Peralatan Keamanan (Security Devices)
                        <p>Usaha Jasa Penerapan Peralatan Keamanan (Security Devices) Memberikan jasa kepada pengguna
                            jasa berupa penerapan teknologi peralatan pengamanan dalam kaitannya dengan cara dan
                            prosedur pengamanan suatu objek.</p>
                    </li>
                    <li>Usaha Jasa Pendidikan dan Latihan Keamanan (Security Training and Education)
                        <p>Usaha Jasa Pendidikan dan Latihan Keamanan (Security Training and Education) memberikan jasa
                            berupa penyediaan sarana dan prasarana untuk melaksanakan pendidikan dan latihan di bidang
                            keamanan guna menyiapkan, meningkatkan, dan memelihara kemampuan tenaga Satuan Pengamanan.
                        </p>
                    </li>
                    <li>Usaha Jasa Kawal Angkut Uang dan Barang Berharga (Valuables Security Transport)
                        <p>Usaha Jasa Kawal Angkut Uang dan Barang Berharga (Valuables Security Transport) memberikan
                            jasa pengamanan berupa pengawalan pengangkutan uang dan barang berharga.</p>
                    </li>
                    <li>Usaha Jasa Penyediaan Tenaga Pengamanan (Guard Services)
                        <p>Usaha Jasa Penyediaan Tenaga Pengamanan (Guard Services) memberikan jasa berupa penyediaan
                            tenaga Satuan Pengamanan untuk melakukan pengamanan yang berkaitan dengan keamanan dan
                            ketertiban di lingkungan kerja pengguna jasa.</p>
                    </li>
                    <li>Usaha Jasa Penyediaan Satwa (K9 Services).
                        <p>Usaha Jasa Penyediaan Satwa (K9 Services) memberikan jasa berupa penyediaan satwa untuk
                            melakukan pengamanan yang berkaitan dengan keamanan dan ketertiban di lingkungan kerja
                            pengguna jasa.</p>
                    </li>
                </ol>
                <h2>Syarat Administrasi Pengurusan Izin BUJP</h2>
                <ol>
                    <li>Surat Permohonan Kepada KAPOLDA METRO JAYA up KARO BINAMITRA POLDA JABAR</li>
                    <li>AkTA Pendirian Badan Usaha dalam bentuk PT yang mencantumkan JASA PENGAMANAN sebagai bidang
                        usahanya.</li>
                    <li>Struktur Organisasi</li>
                    <li>Daftar Personil dan daftar Riwayat Hidup (Pimpinan, staf dan Tenaga Ahli)</li>
                    <li>Domisli Usaha</li>
                    <li>NPWP Perusahaan</li>
                    <li>SIUP/ Surat ijin Usaha Tetap dari BKPM untuk PMA</li>
                    <li>TDP</li>
                    <li>Surat Pernyataan di atas materai tidak menggunakan Tenaga Kerja Asing</li>
                    <li>Surat Pernyatan diatas materai akan menggunakan seragam satpam sesuai ketentuan POLRI.</li>
                    <li>Foto Copy KTP Pimpinan Badan Usaha</li>
                    <li>Surat Izin Kerja sebagai Tenaga Ahli Asing dari Depnakertrans, Dephukum dan Ham, Baintelkam
                        Polri apabila menggunakan tenaga kerja Asing.</li>
                    <li>Surat Keterangan Sebagai anggota AMSI/ABUJAPI.</li>
                    <li>SOP (Standart Operational Prosedure)</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <span><a class="btn btn-lg btn-warning" href="{{url('/keanggotaan/pendaftaran-satpam')}}">DAFTAR SATPAM</a> <a class="btn btn-lg btn-warning" href="{{url('/keanggotaan/pendaftaran-bujp')}}">DAFTAR BUJP</a></span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection