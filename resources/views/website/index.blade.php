@extends('layouts.app')
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/dewan-pimpinan-daerah.jpg')}}');" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 class="">Asosiasi Profesi Satpam Indonesia Jawa Barat</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="site-blocks-cover overlay" style="background-image: url('{{asset('landingpage/images/satpam2.jpg')}}');"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h1 class="">Bergabung Dengan APSI</h1>
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
        <p class="mb-5">Asosiasi Profesi Sekuriti Indonesia awalnya bernama Asosiasi Manager Security Indonesia (AMSI)
            yang berdiri pada 9 Juli 2001 di Hotel Kartika Chandra, Jakarta Pusat. AMSI dikukuhkan dengan SK Kapolri No.
            500/VI/2002 tertanggal 28 Juni 2002.</p>
        <p><a href="#" class="btn btn-primary pill px-4 py-3 text-white">Lihat lebih lanjut</a></p>
    </div>
</div>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Berita Terakhir </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Embrace Your Edge</a></h3>
                        <p><a href="#">Healthy Yoga</a> with <a href="#">Vicky Johnson</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Beginner</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Yoga to Build Resilience</a></h3>
                        <p><a href="#">Healthy Yoga</a> with <a href="#">Kit Rich</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Advanced</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Rise &amp; Shine</a></h3>
                        <p><a href="#">Power Yoga</a> with <a href="#">Sara Clark</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Bend &amp; Stretch</a></h3>
                        <p><a href="#">Meditation Yoga</a> with <a href="#">David Scott</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Beginner</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Vinyasa Yoga</a></h3>
                        <p><a href="#">Meditation Yoga</a> with <a href="#">David Scott</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Advanced</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="program">
                    <a href="#" class="d-block mb-0 thumbnail"><img src="{{asset('landingpage/images/seragam.jpeg')}}"
                            alt="Image" style="width:800px;height:240px;" class="img-fluid"></a>
                    <div class="program-body">
                        <h3 class="heading mb-2"><a href="#">Barre Workout</a></h3>
                        <p><a href="#">Meditation Yoga</a> with <a href="#">David Scott</a></p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span> 20 min</span>
                            <span> <span class="icon-signal icon"></span> Beginner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mb-3 mb-md-0">
                <img src="{{asset('landingpage/images/demografi-apsi.png')}}" class="img" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Keanggotaan</h2>
            </div>
        </div>
        <div class="row align-items-stretched">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center bg-image no-border"
                    style="background-image: url('images/img_1.jpg');">
                    <div class="pricing-content">
                        <div class="text-center mb-4">
                            <h3 class="h4 mb-4">GADA PRATAMA</h3>
                            <strong class="font-weight-normal h1 text-white"></strong>
                        </div>
                        <p>Untuk satpam pelaksana, yang telah memiliki ijazah Gada Pratama</p>
                        <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                                class="btn pill btn-outline-white">Daftar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA MADYA</h3>
                        <strong class="font-weight-normal h1"></strong>
                    </div>
                    <p>Untuk supervisor satpam, yang telah memiliki ijazah Gada Madya</p>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                            class="btn pill btn-primary">Daftar</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA UTAMA</h3>
                        <strong class="font-weight-normal h1"></strong>
                    </div>
                    <p>Untuk manager satpam / Chief Security, yang telah memiliki ijazah Gada Utama</p>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-satpam')}}"
                            class="btn pill btn-primary">Daftar</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="pricing p-5 h-100 text-center">
                    <div class="text-center mb-4">
                        <h3 class="h4 mb-4">GADA UTAMA BUJP</h3>
                        <strong class="font-weight-normal h1"></strong>
                    </div>
                    <ul class="list-unstyled mb-5">
                        <li>30 days classes</li>
                        <li>Flexible schedule</li>
                        <li>4-week series</li>
                        <li>10% off </li>
                    </ul>
                    <p class="mb-0"><a href="{{url('/keanggotaan/pendaftaran-bujp')}}"
                            class="btn pill btn-primary">Daftar</a></p>
                </div>
            </div>
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
            <div class="col-md-6 col-lg-3">
                <a href="images/img_1.jpg" class="image-popup img-opacity"><img src="" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_2.jpg" class="image-popup img-opacity"><img src="{{asset('landingpage/images/jalan-sehat-apsi.jpeg')}}" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_3.jpg" class="image-popup img-opacity"><img src="images/img_3.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_4.jpg" class="image-popup img-opacity"><img src="images/img_4.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_4.jpg" class="image-popup img-opacity"><img src="images/img_4.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_5.jpg" class="image-popup img-opacity"><img src="images/img_5.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_6.jpg" class="image-popup img-opacity"><img src="images/img_6.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_7.jpg" class="image-popup img-opacity"><img src="images/img_7.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_1.jpg" class="image-popup img-opacity"><img src="images/img_1.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_2.jpg" class="image-popup img-opacity"><img src="images/img_2.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_3.jpg" class="image-popup img-opacity"><img src="images/img_3.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="images/img_4.jpg" class="image-popup img-opacity"><img src="images/img_4.jpg" alt="Image"
                        class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
<div class="site-section block-15">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2>Upcoming Events</h2>
            </div>
        </div>
        <div class="nonloop-block-15 owl-carousel">
            <div class="media-with-text p-md-5">
                <div class="img-border-sm mb-4">
                    <a href="#" class="popup-vimeo image-play">
                        <img src="images/img_1.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_2.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_3.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_1.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_2.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_3.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_1.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_2.jpg" alt="" class="img-fluid">
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
                        <img src="images/img_3.jpg" alt="" class="img-fluid">
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
<div class="site-section block-14 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2>Testimoni</h2>
            </div>
        </div>
        <div class="nonloop-block-14 owl-carousel">
            <div class="p-4">
                <div class="d-flex block-testimony">
                    <div class="person mr-3">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div>
                        <h2 class="h5">Katie Johnson</h2>
                        <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora
                            ipsam!&rdquo;</blockquote>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="d-flex block-testimony">
                    <div class="person mr-3">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div>
                        <h2 class="h5">Jane Mars</h2>
                        <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora
                            ipsam!&rdquo;</blockquote>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="d-flex block-testimony">
                    <div class="person mr-3">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div>
                        <h2 class="h5">Shane Holmes</h2>
                        <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora
                            ipsam!&rdquo;</blockquote>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="d-flex block-testimony">
                    <div class="person mr-3">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded">
                    </div>
                    <div>
                        <h2 class="h5">Mark Johnson</h2>
                        <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias
                            accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora
                            ipsam!&rdquo;</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection