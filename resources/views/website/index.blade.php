@extends('layouts.app')
@section('title', 'Dewan Pimpinan Daerah APSI Jawa Barat - DPD APSI JABAR')
@section('description', 'DPD APSI JABAR adalah Dewan Pimpinan Daerah APSI Untuk Daerah Jawa barat DPD ini berkantor
pusat di jl. Terusan Buah Batu no.38 - 42, Batununggal, Bandung')
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/dewan-pimpinan-daerah.jpg')}}');" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 class="">DPD APSI JABAR</h1>
                    <h2 class="caption mb-2">Asosiasi Profesi Satpam Indonesia (APSI) adalah organisasi satpam yang
                        telah terdaftar di Mabes Polri.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/apsi-jabar.jpeg')}}');" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 class="">BERGABUNG DENGAN APSI JABAR</h1>
                    <h2 class="caption mb-2">Menguatkan Simpul Korsa Dengan Menjadi Anggota APSI Jadilah Bagian Dari
                        Keluarga Besar Satpam Indonesia</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-block-half d-flex">
    <div class="image bg-image" style="background-image: url('{{asset('landingpage/images/direktur-gada88.jpg')}}');">
    </div>
    <div class="text">
        <h2 class="font-family-serif">Selamat Datang di Portal APSI JABAR</h2>
        <p class="mb-5"> Asosiasi Profesi Satpam Indonesia (APSI) adalah organisasi satpam yang telah terdaftar di Mabes
            Polri. Karena itu, satpam memiliki organisasi yang bisa dijadikan naungan dalam pengembangan wawasan dalam
            dunia kesatpaman.</p>
        <p><a href="{{url('/tentang/sejarah')}}" class="btn btn-warning pill px-4 py-3 text-white">Lihat lebih
                lanjut</a></p>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Apa Yang Sudah di Lakukan APSI ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-2 mb-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        Memberikan masukan terhadap perubahan peraturan di bidang security
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        AMSI Asosiasi Manager Security Indonesia sebagai satu-satunya penyelenggara
                                        pelatihan
                                        Gada Utama mulai tahun 2004 hingga dimulainya BUJP bidang pelatihan menggantikan
                                        sebagai
                                        penyelenggara.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        Mengadakan seminar sekuriti secara periodik, setahun dua kali
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        Mengadakan pelatihan singkat untuk profesional security

                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3 mb-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        Sejak tahun 2002, mengadakan lomba gerak jalan dan turnamen volly
                                        "Awaloedin Djamin Cup" khusus untuk satpam di jabotabek, dalam memeriahkan
                                        HUT satpam.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <div class="timeline-icon">
                                        <i class="fa fa-rocket"></i>
                                    </div>
                                    <h3 class="title"></h3>
                                    <p class="description">
                                        Bersama Asosiasi bidang sekuriti lain, berperan dalam pembuatan
                                        SKKNI dan perubahan perkap no 24 tahun 2007 menjadi perpol tentang
                                        pamswakarsa, satpam, BUJP, pengguna jasa satpam san asosiasi.

                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Anggota Terdaftar</h2>
            </div>
        </div>
        <div class="row align-items-stretched">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA PRATAMA</h3>
                        <strong class="font-weight-normal h1">200</strong>
                    </div>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                            class="btn pill btn-warning">Bergabung</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA MADYA</h3>
                        <strong class="font-weight-normal h1">150</strong>
                    </div>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                            class="btn pill btn-warning">Bergabung</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA UTAMA</h3>
                        <strong class="font-weight-normal h1">1200</strong>
                    </div>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                            class="btn pill btn-warning">Bergabung</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">BUJP</h3>
                        <strong class="font-weight-normal h1">500</strong>
                    </div>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-bujp')}}"
                            class="btn pill btn-warning">Bergabung</a></p>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Berita Terkini </h2>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="{{url('/berita/'.$post->slug)}}" class="d-block mb-0 thumbnail"><img
                            src="{{url('uploads/'.$post->banner_name)}}" alt="{{$post->original_banner_name}}"
                            style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="{{url('/berita/'.$post->slug)}}">{{$post->title}}</a></h3>
                        <p><a href="{{url('/')}}">APSI JABAR</a> with {{$post->username}}</p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span>
                                {{date('l, F Y h:i', strtotime($post->published_at))}}</span>
                            <span> <span class="icon-signal icon"></span> {{$post->kategori}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="site-section">
    <div class="">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Our Gallery</h2>
            </div>
        </div>
        <div class="row no-gutters">
            @foreach($gallery as $img)
            <div class="col-md-6 col-lg-3">
                <a href="" class="image-popup img-opacity"><img src="{{url('uploads/'. $img->gambar)}}"
                        alt="{{$img->original_file_name}}" style="width:450px; height:300px;" class="img-fluid"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="site-section block-15">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2>Diklat & Pelatihan</h2>
            </div>
        </div>
        <div class="nonloop-block-15 owl-carousel">
            <div class="media-with-text p-md-5">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            <div class="media-with-text p-md-4">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="" alt="" class="img-fluid">
                    </a>
                </div>
                <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
                <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat
                    nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
        </div>
    </div>
</div>
@endsection