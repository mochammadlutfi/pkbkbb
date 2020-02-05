@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/lists.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/components/blog.css ') }}">
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
                <h1 class="pagetitle__heading">AD ART PKB 2014</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">AD ART PKB 2014</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
Blog Single
========================= -->
<section id="blogSingleRightSidebar" class="blog blog-single pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="blog-item blog-single-item">
                    <div class="blog__content">
                        <div class="blog__desc">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/frontend/img/dpw-pkb-ad-art-cover.jpg') }}">
                                </div>
                                <div class="col-md-6">
                                    <h2 class="blog__title"><a href="{{ route('tentang.visi_misi') }}">AD/ART Partai Kebangkitan Bangsa</a></h2>
                                    <p>
                                        Dewan Pimpinan Wilayah <br>
                                        Partai Kebangkitan Bangsa<br>
                                        Provinsi Jawa Barat<br>
                                        <br>
                                        Berdasarkan hasil Ketetapan Muktamar Partai Kebangkitan Bangsa Nomor: III/Muktamar/PKB/VIII/2014, ditetapkan di Surabaya pada tanggal 31 Agustus 2014.
                                    </p>
                                </div>
                            </div>
                            <embed src="{{ asset('assets/frontend/pdf/5111100012-Undergraduate_theses.pdf ')}}" width="100%" height="750" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                        </div><!-- /.blog-desc -->
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
                <aside class="sidebar">
                    <div class="list-group">
                        <a href="{{ url('tentang/sejarah-pendirian-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Sejarah Pendirian PKB</a>
                        <a href="{{ url('tentang/naskah-deklarasi') }}" class="list-group-item list-group-item-action list-group-item-light"   style="color :black">Naskah Deklarasi</a>
                        <a href="{{ url('tentang/mabda-siyasi') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Mabda Siyasi</a>
                        <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-success active">AD ART PKB 2014</a>
                        <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Makna Logo PKB</a>
                        <a href="{{ url('tentang/visi-dan-misi') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Visi dan Misi</a>
                    </div>
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop
@push('scripts')
@endpush
