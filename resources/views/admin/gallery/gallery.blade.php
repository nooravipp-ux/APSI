@extends('layouts.master')
@section('style')
<style>
.gallery {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    -moz-column-width: 33%;
    column-width: 33%;
}

.gallery .pics {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
}

.gallery .animation {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

@media (max-width: 450px) {
    .gallery {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
        -webkit-column-width: 100%;
        -moz-column-width: 100%;
        column-width: 100%;
    }
}

@media (max-width: 400px) {
    .btn.filter {
        padding-left: 1.1rem;
        padding-right: 1.1rem;
    }
}
</style>
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Gallery</h2>
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
                    <div class="x_content">
                        <!-- Grid row -->
                        <div class="row shadow p-4 mb-4 bg-white border rounded mt-lg-3 mb-lg-5">
                            <div class="col-md-6">
                                <form action="{{url('/admin/gallery/simpan')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Judul Gambar</label>
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-2 col-form-label">Gambar</label>  
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="img">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button type="submit" class="btn btn-primary">Upload</button>  
                                        <div class="col-sm-10">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 d-flex justify-content-center mb-5">

                                <button type="button" class="btn btn-outline-black waves-effect filter"
                                    data-rel="all">All</button>
                                <button type="button" class="btn btn-outline-black waves-effect filter"
                                    data-rel="1">Mountains</button>
                                <button type="button" class="btn btn-outline-black waves-effect filter"
                                    data-rel="2">Sea</button>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="gallery" id="gallery">
                            @foreach($data_img as $data)
                            <!-- Grid column -->
                            <div class="mb-3 pics animation all 2">
                                <a href="{{url('/admin/gallery/hapus/'.$data->id)}}"><img class="img-fluid" style="width:800px;height:240px;"
                                    src="{{url('uploads/'.$data->gambar)}}"
                                    alt="Card image cap"></a>
                            </div>
                            <!-- Grid column -->
                            @endforeach
                        </div>
                        <!-- Grid row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    var selectedClass = "";
    $(".filter").click(function() {
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
            $("." + selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});
</script>
@endsection