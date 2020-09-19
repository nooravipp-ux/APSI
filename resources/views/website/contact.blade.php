@extends('layouts.app')
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/dewan-pimpinan-daerah.jpg')}}');height:30px;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <h2 class="caption mb-2">Contact</h2>
                    <h1 class="">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">



                <form action="#" class="p-5 bg-white">

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control" placeholder="Phone #">
                        </div>
                    </div>

                    <div class="row form-group mb-4">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                placeholder="Say hello to us"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary pill text-white px-5 py-2">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="footer-heading mb-4 text-white">Hubungi Kami</h3>
                    <p class="mb-0 font-weight-bold">Alamat</p>
                    <p class="mb-4">Jl. Zamrud II, Cilandak Barat, Cilandak, Jakarta Selatan, DKI Jakarta 12430</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection