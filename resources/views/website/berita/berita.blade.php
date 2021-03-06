@extends('layouts.app')
@section('title','Berita, Event dan Seminar tentang Security dan APSI - DPD APSI JABAR')
@section('description', 'Mengulas tentang semua Berita, Event dan kegiatan yang berhubungan tentang Security dan APSI')
@section('style')


@endsection
@section('content')
<div class="slide-one-item home-slider owl-carousel">
    @foreach($head_lines as $head)
    <div class="site-blocks-cover overlay" style="background-image: url('{{asset('uploads/'.$head->banner_name)}}');height:30px;"
        data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade">
                    <a href="{{url('/berita/'.$head->slug)}}"><h1 class="">{{$head->title}}</h1></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="site-block-half d-flex">
    <div class="container-fluid mt-3 mb-3">
        <hr>
        <div class="row">
            <div class="col-md-2">
               
            </div>
            <div class="col-md-6">
                @foreach($posts as $post)
                <div class="program">
                    <a href="{{url('/berita/'.$post->slug)}}" class="d-block mb-0 thumbnail"><img
                        src="{{url('uploads/'.$post->banner_name)}}" alt="{{$post->original_banner_name}}"
                            class="img-fluid"></a>
                    <div class="program-body">
                        <h2 class="heading mb-2"><a href="{{url('/berita/'.$post->slug)}}">{{$post->title}}</a></h2>
                        <p><a href="{{url('/')}}">APSI JABAR</a> with {{$post->username}}</p>
                        <div class="span"><span class="mr-4"><span class="icon-schedule icon"></span>
                            {{date('l, F Y h:i', strtotime($post->published_at))}}</span>
                            <span> <span class="icon-signal icon"></span> {{$post->kategori}}</span>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
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
                            {{date('l, F Y h:i', strtotime($post->published_at))}}</span>
                                <span> <span class="icon-signal icon"></span> {{$post->kategori}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
        <div class="row">
                <div class="col-md-2">
               
               </div>
               <div class="col-md-6">
                {{ $posts->links() }}
               </div>
        </div>
        
    </div>
</div>
@endsection