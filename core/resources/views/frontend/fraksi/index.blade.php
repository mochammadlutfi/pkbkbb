@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
@endsection

@section('content')
<!-- ========================
    page title
=========================== -->
<section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-2 text-center"
    style="padding:60px 11px; background: #00652d;">
    <div class="bg-img"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="pagetitle__heading">Fraksi DPC PKB<br> Bandung Barat</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fraksi DPC PKB Bandung Barat</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="team1" class="team team-1 text-center pt-100 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-3 mb-60">
                    <h2 class="heading__title">Anggota Fraksi DPC PKB<br>Kab. Bandung Barat</h2>
                    <blockquote class="blockquote blockquote-3">
                        Keberhasilan seorang pemimpin diukur dari kemampuan mereka dalam menyejahterakan umat yang
                        mereka pimpin
                        <span class="quote__author">Gusdur</span>
                    </blockquote>
                    <div class="divider__line"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row justify-content-center">

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">Wendi Sukmawijaya, S.AG </h5>
                        <p class="member__desc">Ketua Fraksi</p>
                    </div><!-- /.member-info -->
                    <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">Asep Sudrajat, S.Kom.,MM</h5>
                        <p class="member__desc">Sekretaris Fraksi</p>
                    </div><!-- /.member-info -->
                    <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">Drs. Akhmad Kosasih</h5>
                        <p class="member__desc">Anggota Fraksi</p>
                    </div><!-- /.member-info -->
                    <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">Ust. Alit Munawar</h5>
                        <p class="member__desc">Anggota Fraksi</p>
                    </div><!-- /.member-info -->
                    <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">H. Ade Wawan, S.PDi</h5>
                        <p class="member__desc">Anggota Fraksi</p>
                    </div><!-- /.member-info -->
                    <div class="social__icons justify-content-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team1  -->
@stop
@push('scripts')

@endpush
