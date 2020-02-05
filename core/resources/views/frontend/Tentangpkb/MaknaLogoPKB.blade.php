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
                <h1 class="pagetitle__heading">Makna Logo PKB</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Makna Logo PKB</li>
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
                        <h2 class="blog__title"><a href="{{ route('tentang.visi_misi') }}">Makna Logo PKB</a></h2>
                        <div class="blog__desc">
                            <p>Lambang Partai terdiri dari bola dunia yang dikelilingi sembilan bintang dengan tulisan nama partai pada bagian bawah, dengan bingkai dalam empat persegi bergaris ganda, dan tulisan PKB di bawahnya yang diberi bingkai luar dengan garis tunggal. Makna Lambang :</p>
                            </p>
                            <ul class="icon-list layout2">
                                <li>Arti Gambar adalah sebagai berikut:</li>
                                    <ol class="icon-list layout8">
                                        <li>Bumi dan peta Indonesia, bermakna tanah air Indonesia yang merupakan basis perjuangan Partai dalam usahanya untuk mencapai tujuan partai</li>
                                        <li>Sembilan bintang bermakna idealisme partai yang memuat 9 (sembilan) nilai, yaitu kemerdekaan, keadilan, kebenaran, kejujuran, kerakyatan, persamaan, kesederhanaan, keseimbangan, dan persaudaraan</li>
                                        <li>Tulisan nama Partai dan singkatannya bermakna identitas diri partai yang berfungsi sebagai sarana perjuangan aspirasi politik rakyat Indonesia yang memiliki kehendak menciptakan tatanan kehidupan bangsa yang demokratis</li>
                                        <li>Bingkai segi empat dengan garis ganda yang sejajar bermakna garis perjuangan Partai yang menempatkan orientasi duniawi dan ukhrawi, material dan spiritual, lahir dan batin, secara sejajar.</li>
                                    </ol>
                                <li>Arti warna adalah sebagai berikut:</li>
                                    <ol class="icon-list layout8">
                                        <li>Putih, bermakna kesucian, ketulusan dan kebenaran yang menjadi etos perjuangan partai</li>
                                        <li>Hijau, bermakna kemakmuran lahir dan batin bagi seluruh rakyat Indonesia yang menjadi tujuan perjuangan</li>
                                        <li>Kuning, bermakna kebangkitan Bangsa yang menjadi nuansa pembaharuan dan berpijak pada kemaslahatan umat manusia</li>
                                        <li>Asas dan Prinsip Perjuangan (menggantikan Tugas dan fungsi)</li>
                                        <li>Partai berasaskan Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmah kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia. Sedangkan Prinsip perjuangan PKB adalah pengabdian kepada Allah Subhanahu wa Ta’ala, menjunjung tinggi kebenaran dan kejujuran, menegakkan keadilan, menjaga persatuan, menumbuhkan persaudaraan dan kebersamaan sesuai dengan nilai-nilai Islam Ahlusunnah Waljama’ah</li>
                                    </ol>
                            </ul>
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
                        <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">AD ART PKB 2014</a>
                        <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Makna Logo PKB</a>
                        <a href="{{ url('tentang/visi-dan-misi') }}" class="list-group-item list-group-item-action list-group-item-success active" >Visi dan Misi</a>
                    </div>
                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop
@push('scripts')
@endpush
