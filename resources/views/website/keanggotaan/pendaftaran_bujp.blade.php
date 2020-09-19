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
                    <h2 class="caption mb-2">Keanggotaan</h2>
                    <h1 class="">Pendaftaran Calon Anggota BUJP</h1>
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
            <li class="breadcrumb-item active" aria-current="page">Anggota BUJP</li>
        </ol>
    </nav>
    <div class="row shadow p-4 mb-4 bg-white border rounded mt-lg-3 mb-lg-5">
        <div class="col-md-12">
            <form method="POST" action="{{url('/keanggotaan/daftar-bujp')}}" enctype="multipart/form-data">
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Penanggung Jawab</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="penanggung_jawab">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jabatan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jumlah Satpam :</label>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Gada Pratama</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gada_pratama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Gada Madya</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gada_madya">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Gada Utama</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="gada_utama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label"><b>Kelengkapan Document (file) max 1048 kb:</b></label>
                    <div class="col-sm-7">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Akta Pendirian Perusahaan</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="akta_pendirian_perusahaan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">SIUP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="siup">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">NIB</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="nib">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Ijin Operasional MABES POLRI</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" name="ijin_mabes_polri">
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
$('#file-ktp').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);

});

$('#file-verifikasi').on('change', function() {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);

})
</script>
@endsection