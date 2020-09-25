@extends('layouts.app')

@section('title', $title_post.' - DPD APSI JABAR')
@section('style')


@endsection
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('landingpage/images/dewan-pimpinan-daerah.jpg')}}');height:30px;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 text-center" data-aos="fade">
                    <h1 class="">{{$post_detail->title}} </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-block-half d-flex">
    <div class="container-fluid mt-3 mb-3">
        <hr>
        <div class="row">
            <div class="col-md-2">
                <h4>Kategori Berita</h4>
                <ul>
                    <li>Event</li>
                    <li>Seminar</li>
                    <li>Diklat</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="program">
                    <div class="program-body">
                        <div class="d-block mb-5 thumbnail"><img src="data:image/png;base64, {{$post_detail->banner}}"
                                alt="Image" style="width:800px;height:400px;" class="img-fluid">
                        </div>
                        <p><a href="{{url('/')}}">APSI JABAR</a> with {{$post_detail->username}}</a></p>
                        <div class="span"><span class="mr-4 mb-5"><span class="icon-schedule icon"></span>
                                {{$post_detail->published_at}}</span>
                            <span> <span class="icon-signal icon"></span> {{$post_detail->kategori}}</span>
                        </div>
                        <p style="text-align: justify;">{!! $post_detail->article !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                @foreach($side_posts as $post)
                <div class="row">
                    <div class="program">
                        <div class="program-body">
                            <h3 class="heading"><a href="{{url('/berita/'.$post->slug)}}"><b>{{$post->title}}</b></a>
                            </h3>
                            <p><a href="{{url('/')}}">APSI JABAR</a> with <a
                                    href="{{url('/berita/'.$post->slug)}}">{{$post->username}}</a></p>
                            <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span>
                                    {{$post->published_at}}</span>
                                <span> <span class="icon-signal icon"></span> {{$post->kategori}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection