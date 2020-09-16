@extends('layouts.master')
@section('style')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Pendaftaran Calon Anggota</h2>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-primary btn-sm" href="{{url('/admin/pendaftaran/export')}}">Export to Excel</a>
                                <div class="card-box table-responsive">

                                    <table id="data_pendaftar" class="table table-striped jambo_table bulk_action"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No Pendaftaran</th>
                                                <th>Tgl Pendaftaran</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Nama</th>
                                                <th>Alamat Kantor</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Calon Anggota</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data_pendaftar as $data)
                                            <tr>
                                                <td>{{$data->no_pendaftaran}}</td>
                                                <td>{{$data->tgl_pendaftaran}}</td>
                                                <td>{{$data->nama_perusahaan}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->alamat_kantor}}</td>
                                                <td>{{$data->telepon}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->jabatan}}</td>
                                                <td>{{$data->status}}</td>
                                                <td><a href="{{route('detail.pendaftar', $data->no_pendaftaran)}}">Lihat</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#data_pendaftar').DataTable();
});
</script>
@endsection