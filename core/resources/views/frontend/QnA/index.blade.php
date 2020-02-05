@extends('frontend.layouts.master')
@section('styles')
<style>

</style>
@endsection
@section('title', $title)
@section('content')
<!-- ========================
    page title
=========================== -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-2 text-center" style="padding:60px 11px; background: #00652d;">
    <div class="bg-img"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">Tanya Jawab</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tanya Jawab</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->


<section id="blogSingleRightSidebar" class="blog blog-single pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        @if(Auth::guard('web')->check())
                        <a href="{{ route('QA.tambah') }}" class="btn btn__secondary btn__bordered-white btn__block">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <span class="text">Buat Pertanyaan</span>
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn__secondary btn__bordered-white btn__block">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                            <span class="text">Buat Pertanyaan</span>
                        </a>
                        @endif
                    </div>
                </div>
                <div class="pb-70 pt-10">
                    @foreach($pertanyaan as $p)
                    <div class="blog-widget blog-author">
                        <div class="blog__author-avatar">
                          <img src="{{ Avatar::create($p->user->name)->toBase64() }}" alt="avatar">
                        </div>
                        <div class="blog__author-content" style="width:100%">
                            <a  href="{{ route('QA.detail', $p->slug) }}" class="blog__author-name mb-0">{{ $p->judul }}</a><br>
                            <span>Oleh: {{ $p->user->name }}</span><span style="float:right;">{{ $p->created_at }}</span>
                            <p class="blog__author-bio"><?= str_limit($p->deskripsi, 200) ?></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!-- /.col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
                @include('frontend.QnA.sidebar')
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop
