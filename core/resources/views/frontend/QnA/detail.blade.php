@extends('frontend.layouts.master')
@section('styles')
<style>
.kategori-tanya{
    display: inline-block;
    background-color: #e6ae48;
    padding: 0 7px;
    margin-right: 6px;
    margin-bottom: 7px;
    float:right;
}
.kategori-tanya a {
    position: relative;
    color: #ffffff;
    line-height: 19px;
    padding-right: 5px;
}
.tanya{
    border-bottom: 2px solid #f5f5f5;
    padding-top: 20px;
}
.jawab{
    border-bottom: 2px solid #f5f5f5;
    padding-top: 20px;
}
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
                        <li class="breadcrumb-item"><a href="{{ route('QA') }}">Tanya Jawab</a></li>
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
                        <div class="blog-author tanya">
                            <div class="blog__author-avatar">
                                @if($tanya->user->avatar <> null)
                                <img class="img-avatar" src="{{ asset($q->user->avatar) }}" alt="">
                                @else
                                    <img src="{{ Avatar::create($tanya->user->name)->toBase64() }}" alt="alt">
                                @endif
                            </div>
                            <div class="blog__author-content" style="width:100%">
                                <h4 class="blog__author-name mb-1 blog__title">
                                    <a href="{{ route('QA.detail', $tanya->slug) }}">{{ $tanya->judul }}</a>
                                </h4>
                                <span>Oleh: <strong>{{ $tanya->user->name }}</strong></span>
                                <span class="float-right">{{ $tanya->created_at }}</span>
                                <p class="blog__author-bio"><?= str_limit($tanya->deskripsi, 200) ?></p>
                                <div class="kategori-tanya">
                                    <a href="#">{{ $tanya->qkategori->nama }}</a>
                                </div>
                            </div>
                        </div>
                        @if($jawab <> null)
                        <div class="blog-author jawab">
                            <div class="blog__author-avatar">
                                <img src="{{ asset('uploads/'. $jawab->admin->avatar) }}" alt="alt">
                            </div>
                            <div class="blog__author-content" style="width:100%">
                                <span><strong>{{ ucwords($jawab->admin->name) }}</strong></span>
                                <span class="float-right">{{ $jawab->created_at }}</span>
                                <p class="blog__author-bio"><?= $jawab->deskripsi ?></p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div><!-- /.col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
                @include('frontend.QnA.sidebar')
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop
