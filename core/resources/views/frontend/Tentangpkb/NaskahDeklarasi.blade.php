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
                <h1 class="pagetitle__heading">Naskah Deklarasi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Naskah Deklarasi</li>
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
                        <h2 class="blog__title"><a href="#">Naskah Deklarasi</a></h2>
                        <div class="blog__desc">
                            <p>Bahwa cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa
                                yang merdeka, bersatu, adil dan makmur, serta untuk mewujudkan pemerintahan Negara
                                Kesatuan Republik Indonesia yang melindungi segenap bangsa Indonesia dan untuk memajukan
                                kesejahteraan umum, mencerdaskan kehidupan bangsa, serta ikut melaksanakan ketertiban
                                dunia yang berdasarkan kemerdekaan, perdamaian abadi dan keadilan sosial.</p>
                            <p>Bahwa wujud dari bangsa yang dicita-citakan itu adalah masyarakat beradab dan sejahtera,
                                yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan dan keterbukaan yang
                                bersumber dari hati nurani, bisa dipercaya, setia dan tepat janji serta mampu memecahkan
                                masalah sosial yang bertumpu pada kekuatan sendiri, bersikap dan bertindak adil dalam
                                segala situasi, tolong menolong dalam kebajikan, serta konsisten menjalankan
                                garis/ketentuan yang telah disepakati bersama..</p>
                            <p>Bahwa perwujudan dari cita-cita kemerdekaan tersebut menghendaki tegaknya demokrasi yang
                                menjamin terciptanya tatanan kenegaraan yang adil serta pemerintahan yang bersih dan
                                terpercaya, terjaminnya hak-hak asasi manusia, dan lestarinya lingkungan hidup bagi
                                peningkatan harkat dan martabat bangsa Indonesia yang diridlai Allah Subhanahu wa
                                Ta’ala. Bahwa untuk mewujudkan hal tersebut, diperlukan adanya wahana perjuangan yang
                                kuat, mampu menyalurkan aspirasi dan menyatukan seluruh potensi bangsa yang majemuk,
                                serta terlibat aktif dalam penyelenggaraan negara dengan berakhlaqul karimah. Maka
                                dengan memohon rahmat, taufiq, hidayah, dan inayah Allah Subhanahu wa Ta’ala,
                                didirikanlah PARTAI KEBANGKITAN BANGSA yang bersifat kebangsaan, demokratis dan terbuka.
                            </p>
                        </div><!-- /.blog-desc -->
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-9 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
                <aside class="sidebar">

                </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->

@stop
