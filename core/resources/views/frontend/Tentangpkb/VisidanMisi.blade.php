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
                <h1 class="pagetitle__heading">Visi & Misi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
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
                        <h2 class="blog__title"><a href="{{ route('tentang.visi_misi') }}">Visi</a></h2>
                        <div class="blog__desc">
                            <p>Mewujudkan cita-cita kemerdekaan Republik Indonesia sebagaimana dituangkan dalam Pembukaan Undang-Undang Dasar 1945
                                Mewujudkan masyarakat yang adil dan makmur secara lahir dan batin, material dan spiritual
                                Mewujudkan tatanan politik nasional yang demokratis, terbuka, bersih dan berakhlakul karimah.</p>
                            </p>
                        </div><!-- /.blog-desc -->
                        <h2 class="blog__title"><a href="{{ route('tentang.visi_misi') }}">Misi</a></h2>
                        <div class="blog__desc">
                            <p>Bidang Ekonomi: menegakkan dan mengembangkan kehidupan ekonomi kerakyatan yang adil dan demokratis
                                Bidang Hukum: berusaha menegakkan dan mengembangkan negara hukum yang beradab, mampu mengayomi seluruh rakyat, menjunjung tinggi hak-hak asasi manusia, dan berkeadilan sosial
                                Bidang Sosial Budaya: berusaha membangun budaya yang maju dan modern dengan tetap memelihara jatidiri bangsa yang baik demi meningkatkan harkat dan martabat bangsa
                                Bidang Pendidikan: berusaha meningkatkan kualitas sumber daya manusia yang berakhlak mulia, mandiri, terampil, profesional dan kritis terhadap lingkungan sosial di sekitarnya, mengusahakan terwujudnya sistem pendidikan nasional yang berorientasi kerakyatan, murah dan berkesinambungan
                                Bidang Pertahanan: membangun kesadaran setiap warga negara terhadap kewajiban untuk turut serta dalam usaha pertahanan negara; mendorong terwujudnya swabela masyarakat terhadap perlakuan-perlakuan yang menimbulkan rasa tidak aman, baik yang datang dari pribadi-pribadi maupun institusi tertentu dalam masyarakat.</p>
                            </p>
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
    <!-- vendor -->
	<script src="{{ asset('assets/frontend/js/components/blog.js') }} "></script>
@endpush
