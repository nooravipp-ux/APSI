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
                        <a href="{{url('/admin/posts/create')}}" class="btn btn-primary">Post Berita</a>
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
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">tittle</th>
                                            <th scope="col">create at</th>
                                            <th scope="col">publish</th>
                                            <th scope="col">headline</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                        <tr>
                                            <th>{{$post->title}}</th>
                                            <td>{{$post->create_at}}</td>
                                            <td>{{$post->publish}}</td>
                                            <td>{{$post->headline}}</td>
                                            <td><a href="{{url('/admin/posts/delete/'.$post->post_id)}}"
                                                    onclick="return confirm('yakin?');">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a> |
                                                <a href="#">
                                                    <span class="glyphicon glyphicon-edit"></span>
                                                </a> |
                                                <a href="{{url('/admin/posts/publish/'.$post->post_id)}}">
                                                    <span class="glyphicon glyphicon-upload"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row shadow p-4 mb-4 bg-white border rounded mt-lg-3 mb-lg-2">
                            <div class="container text-center">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection