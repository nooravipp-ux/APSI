@extends('layouts.app')
@section('title','PENDAFTARAN APSI JABAR - DPD APSI JABAR')
@section('description', 'Satuan Pengamanan (Satpam) yang lahir pada 30 Desember 1980 telah menjadi aset negara di bidang pengamanan. Keberadaan satpam di lingkungan kerja dan obyek vital telah memberikan andil terhadap keamanan nasional.')
@section('style')
<style>
.custom-bg {
    background-color: #0f263a;
}
</style>
@endsection
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
        <ol class="breadcrumb custom-bg">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/keanggotaan')}}">Keanggotaan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
        </ol>
    </nav>
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
                        <button type="submit" class="btn btn-warning">Daftar</button>
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