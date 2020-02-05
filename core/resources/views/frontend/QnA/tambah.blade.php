@extends('frontend.layouts.master')
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
                        <form action="{{ route('QA.simpan') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="judul" type="text" class="form-control" placeholder="Judul topik"  value="{{ old('judul') }}">
                                @if ($errors->has('judul'))
                                    <span class="text-danger" role="alert">
                                        {{ $errors->first('judul') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <select name="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategori'))
                                    <span class="text-danger" role="alert">
                                        {{ $errors->first('kategori') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea name="pertanyaan" class="form-control" placeholder="Pertanyaan"></textarea>
                                @if ($errors->has('pertanyaan'))
                                    <span class="text-danger" role="alert">
                                        {{ $errors->first('pertanyaan') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn__secondary btn__bordered-white btn__block">
                                    <i class="fa fa-paper-plane mr-1"></i>
                                    Kirim Pertanyaan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="pb-70 pt-10">
                    @foreach($pertanyaan as $p)
                    <div class="blog-widget blog-author">
                        <div class="blog__author-avatar">
                          <img src="{{ Avatar::create($p->user->name)->toBase64() }}" alt="avatar">
                        </div>
                        <div class="blog__author-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a  href="{{ route('QA.detail', $p->slug) }}" class="blog__author-name mb-0">{{ $p->judul }}</a><br>
                                    <span>Oleh: {{ $p->user->name }}</span>
                                </div>
                                <div class="col-lg-6">

                                </div>
                            </div>
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
