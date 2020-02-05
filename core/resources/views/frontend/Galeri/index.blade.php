@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
@endsection

@section('content')
<!-- ========================
    page title
=========================== -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-2 text-center" style="padding:60px 11px; background: #00652d;">
    <div class="bg-img"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">Galeri Foto</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Foto</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->
<!-- ======================
Blog Grid
========================= -->
<section id="blogGrid" class="blog blog-grid pb-90">
    <div class="container">
        <div class="row">
            @foreach($galeri as $g)
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog__img">
                        <a href="#">
                            <img src="{{ asset('uploads/'.$g->foto) }}" alt="{{ $g->nama }}">
                        </a>
                    </div><!-- /.entry-img -->
                    <div class="blog__content">
                        <div class="blog__meta">
                            <div class="blog__meta-cat">
                                <span>30 Foto</a>
                            </div><!-- /.blog-meta-cat -->
                            <span class="blog__meta-date">Jan 20, 2019</span>
                        </div><!-- /.blog-meta -->
                        <h4 class="blog__title"><a href="{{ route('galeri.detail', $g->slug) }}">{{ $g->nama }}</a>
                        </h4>
                        <a href="{{ route('galeri.detail', $g->slug) }}" class="btn btn__primary btn__hover-white btn__block">Lihat Album Foto</a>
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                    <ul class="pagination justify-content-center mt-30">
                        <li><a class="current" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav><!-- .pagination-area -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@stop

@push('scripts')

@endpush
