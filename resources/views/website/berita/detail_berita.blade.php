@extends('layouts.app')

@section('title', $title_post.' - DPD APSI JABAR')
@section('description', $article)
@section('style')


@endsection
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay"
        style="background-image: url('{{asset('uploads/'.$post_detail->banner_name)}}');height:30px;" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 text-center" data-aos="fade">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center" data-aos="fade">
                                <h1 class="">{{$post_detail->title}}</h1>
                        </div>
                    </div>
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

            </div>
            <div class="col-md-6">
                <div class="program">
                    <div class="program-body">
                        <p><a href="{{url('/')}}">APSI JABAR</a> with {{$post_detail->username}} <span
                                class="mr-4 mb-5"><span
                                    class="icon-schedule icon"></span>{{date('d M Y',strtotime($post_detail->published_at))}}</span>
                            <span> <span class="icon-signal icon"></span> {{$post_detail->kategori}}</span>
                        </p>
                        <p style="text-align: justify;">{!! $post_detail->article !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row mt-4 mx-auto text-center section-heading">
                    <h2>Popular Posts</h2>
                </div>
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