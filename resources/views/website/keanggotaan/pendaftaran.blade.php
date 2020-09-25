@extends('layouts.app')
@section('title','Keanggotaan Satpam - DPD APSI JABAR')
@section('description', 'Satuan Pengamanan (Satpam) yang lahir pada 30 Desember 1980 telah menjadi aset negara di bidang pengamanan. Keberadaan satpam di lingkungan kerja dan obyek vital telah memberikan andil terhadap keamanan nasional.')
@section('style')
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/satpam1.jpg')}}');height:30px;" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h2 class="caption mb-2">Keanggotaan</h2>
                    <h1 class="">Pendaftaran Calon Anggota</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <nav aria-label="breadcrumb" class="mt-lg-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/keanggotaan')}}">Keanggotaan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Anggota Satpam</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <h2>SATPAM</h2>
            <p>Satuan Pengamanan (Satpam) yang lahir pada 30 Desember 1980 telah menjadi aset negara di bidang pengamanan. Keberadaan satpam di lingkungan kerja dan obyek vital telah memberikan andil terhadap keamanan nasional.</p>
            <p>Satpam yang bertugas 24 jam ini terus meberikan layanan pengamanan tiada henti. pembagian tugas selama 24 jam menjadikan kondisi lingkungan sekitar menjadi aman. Kondisi yang aman inilah yang menjadi faktor para investor mau menanamkan modalnya ke negara ini.</p>
            <p>Tak heran jika almarhum Bapak Satpam Indonesia Prof Dr Awaloeddin Djamin, MPA mengatakan bahwa ‘Negara harus berterima kasih kepada satpam’ sangat tidak berlebihan, karena jasa para satpam ini pihak kepolisian sangat terbantu.</p>
            <p>Kini, satpam diusianya yang lebih dari tiga dasawarsa mulai menunjukkan eksistensinya dengan menjadikan pekerjaan ini menjadi sebuah profesi. Karena itu, setiap satpam ke depan harus sudah pernah mengikuti pendidikan dan latihan sebagaimana yang telah diatur dalam Perkap No.27.</p>
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
        </div>
    </div>
    <div class="row shadow p-4 mb-4 bg-white border rounded mt-lg-3 mb-lg-5">
        <div class="col-md-12">
            <form method="POST" action="{{url('/keanggotaan/daftar')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_perusahaan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat Kantor</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="alamat_kantor"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select name="calon_anggota" class="form-control">
                            <option value="GADA PRATAMA">GADA PRATAMA</option>
                            <option value="GADA UTAMA">GADA UTAMA</option>
                            <option value="GADA MADYA">GADA MADYA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">No Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_telepon">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label"><b>Kelengkapan Document (file) max 1048
                            kb:</b></label>
                    <div class="col-sm-7">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="file_ktp" id="fileToUpload">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Ijazah Diklat</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="file_ijazah">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Foto (2x3)</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="file_foto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>

</script>
@endsection