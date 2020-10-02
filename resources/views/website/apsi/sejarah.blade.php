@extends('layouts.app')
@section('title','SEJARAH APSI JABAR - DPD APSI JABAR')
@section('description', 'APSI adalah Asosiasi Profesi Sekuriti Indonesia, yang lahir pada tanggal 1 November 2014.')
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
                    <h1 class="">Sejarah APSI</h1>
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
                            <li>Peraturan Kepala Badan Pemeliharaan Keamanan (PERKABA) tentang SATPAM, BUJP, Pengguna
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
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Sejarah Dari AMSI ke APSI</h4>
                <p>Asosiasi Profesi Sekuriti Indonesia awalnya bernama Asosiasi Manager Security Indonesia (AMSI) yang berdiri pada 9 Juli 2001 di Hotel Kartika Chandra, Jakarta Pusat. AMSI dikukuhkan dengan SK Kapolri No. 500/VI/2002 tertanggal 28 Juni 2002.</p>
                <p>Asosiasi Manager Securty Indonesia telah berhasil mendirikan cabang kepengurusan di 20 kewilayahan Polda dan menyelenggarakan serangkaian kegiatan pelatihan dan seminar dalam rangka peningkatan kompetensi security manager di Indonesia.</p>
                <p>Seiring perkembangan industrial security di Indonesia, dirasakan kebutuhan organisasi yang dapat menjadi payung bagi seluruh profesi sekuriti di Indonesia. Pada tanggal 1 November 2014, seluruh pengurus pusat dan daerah AMSI secara bulat memutuskan untuk merubah AMSI menjadi Asosiasi Profesi Sekuriti Indonesia (APSI).</p>
                <p>Seluruh kegiatan AMSI yang awalnya hanya terfokus pada pengembangan security manager kini melingkupi seluruh tingkatan di Satuan Pengamanan (pelaksana-penyelia-pimpinan) sehingga kualifikasi dan kompetensi personil dapat meningkat guna menghadapi tantangan dan ancaman di lokasi kerja.</p>
                <h4>Munaslub APSI Sahkan Asosiasi Profesi Satpam Indonesia</h4>
                <p>APSI adalah Asosiasi Profesi Sekuriti Indonesia, yang lahir pada tanggal 1 November 2014 sebagai penjelmaan dari Asosiasi Manager Security Indonesia (AMSI), yang lahir pada tanggal 1 Juli 2001. Sesuai dengan rencanan program APSI 2018, APSI menyelenggarakan Rapat Kerja Nasional (Rakernas) pada tanggal 31 Oktober sampai 2 November 2018.</p>
                <p>Rakernas APSI diselenggarakan di Bali Dynasty Resort Denpasar Bali yang dihadiri oleh beberapa pengurus dari 15 Dewan Pimpinan Daerah (DPD), dari 22 DPD yang ada. DPD APSI yang hadir yaitu DPD DKI Jaya, Banten, Kepulauan Riau, Jatim, Jateng, Jabar, Sumbar, Sumsel, Sumut, Jambi, Kaltim, Sulbar, Sulsel, NTB dan Bali.Acara rakernas APSI ini dirangkaikan dengan acara Pelantikan dan Pengukuhan pengurus DPD APSI Bali periode 2018-2023 serta kegiatan seminar tentang perkembangan sekuriti di Indonesia.</p>
                <p>Seminar sekuriti dibuka oleh Kakorbinmas Polri Irjen Pol Drs. Arkian Lubis sekaligus bertindak sebagai keynote speaker. Sedangkan narasumber seminar adalah Ketua Umum APSI Azis Said, Komisioner BNSP, Dr Sugiyanto dan Kasubdit Komsatpam, Kombes Pol. Liliek Darmanto dari Baharkam Polri.</p>
                <p>Dalam rakernas APSI ini, Ketua Umum APSI Azis Said memberikan presentasi tentang perkembangan Industrial Security Indonesia termasuk rancangan perubahan Perkap no 24 tahun 2007. Setelah Azis selesai presentasi, rakernas sidang dipimpin oleh Sekjen APSI, Djarot Soeprianto.</p>
                <p>Dalam sidang pleno pertama beberapa DPD mengusulkan perubahan nama asosiasi dari Asosiasi Profesi Sekuriti Indonesia (APSI) menjadi Asosiasi Profesi Satpam Indonesia (APSI) dengan pertimbangan sebagai berikut:</p>
                    <ol>
                        <li>APSI agar bisa lebih fokus untuk memajukan satpam sebagai sebuah profesi yang lebih diakui, dihargai dan dibanggakan.</li>
                        <li>Menjadikan wadah nyata dalam menampung aspirasi satpam. </li>
                        <li>Dapat memperjuangkan hak-hak satpam sesuai ketentuan ketenagakerjaan dan ketentuan polri.</li>
                        <li>Dapat memberikan pendampingan dan advokasi hukum kepada satpam yang menjadi anggota APSI dan lain sebagainya.</li>
                    </ol>
                <p>Akhirnya acara rakernas APSI saat itu berubah menjadi musyawarah nasional luar biasa (Munaslub). Sebagaimana diatur dalam AD/AR APSI, bahwa peserta pengurus yang hadir telah memenuhi kuorum untuk menyelenggarakan munaslub.</p>
                <p>Sekjen Djarot kemudian menanyakan kepada peserta sidang tentang perubahan nama asosiasi tersebut, ternyata peserta sidang menyetujui perubahan Asosiasi Profesi Sekuriti Indonesia (APSI) menjadi Asosiasi Profesi Satpam Indonesia (APSI).</p>
                <p>Ketua sidang Djarot Suprianto kemudian menginventarisir pengurus DPP yg telah mengikuti pelatihan Satpam. Ternyata sebagian besar Pengurus DPP dan DPD periode 2014-2019 adalah anggota satpam yang telah mengikuti pelatihan Gada Utama.</p>
                <p>Akhirnya, pada Jumat 2 November 2018 jam 09.00 WITA, bertempat di Bali Dynasty Resort Denpasar Bali digelar Deklarasi yang diikuti oleh pengurus DPP, dan DPD yang jumlahnya 15 DPD dari 22 DPD yang ada diseantero nusantara.</p>
            </div>
        </div>
    </div>
</div>
@endsection