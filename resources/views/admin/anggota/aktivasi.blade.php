@extends('layouts.master')

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Detail Pendaftar</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content row">
                        <div class="col-md-3 col-sm-3 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" style="width:200px;"
                                        src="data:image/png;base64, {{$data_pendaftar->foto}}" alt="Avatar"
                                        title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{$data_pendaftar->nama}}</h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>
                                    {{$data_pendaftar->alamat_kantor}}
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> {{$data_pendaftar->telepon}}
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.gmail.com/login/" target="_blank">{{$data_pendaftar->email}}</a>
                                </li>
                            </ul>


                            <br />
                            <br>

                            <!-- start skills -->
                            <!-- end of skills -->
                            <a class="btn btn-success">Approve</a>
                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="item form-group" id="d_gambar">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Bukti
                                            Pembayaran</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <img class="img-fluid" id="myImg" alt="Bukti Pembayaran" 
                                                src="data:image/png;base64, {{$data_pendaftar->ktp}}">
                                        </div>
                                        <!-- The Modal -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item form-group" id="d_gambar">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Bukti
                                            Pembayaran</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <img class="img-fluid" id="k" alt="Bukti Pembayaran"
                                                src="data:image/png;base64, {{$data_pendaftar->ijazah_pelatihan}}">
                                        </div>
                                        <!-- The Modal -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item form-group" id="d_gambar">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Bukti
                                            Pembayaran</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <img class="img-fluid" id="j" alt="Bukti Pembayaran"
                                                src="data:image/png;base64,{{$data_pendaftar->verifikasi_dcp}} ">
                                        </div>
                                        <!-- The Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
@endsection