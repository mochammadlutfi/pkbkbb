@extends('frontend.layouts.master')
@section('title', $title)
@section('styles')
<style>
    #playground-result img{
        position: relative;
        margin: 5px;
        width: 32%;
        border-radius: 4px;
        overflow: hidden;
    }
</style>
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
                <h1 class="pagetitle__heading">Galeri Instagram</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Instagram</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<section id="blogSingleCentered" class="blog blog-single pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="blog-item blog-single-item">
                    <div class="blog__content">
                        <div class="row">
                            <div id="playground-result" class="result"></div>
                        </div>
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop

@push('scripts')
    <script src="{{ asset('assets/frontend/js/instastory.js') }} "></script>
    <script type="text/javascript">
        (function($) {
            $("#playground-result").instastory({
                get:"@dpc_pkbkbb",
                limit: 15,
                imageSize: 240,
            });
        })(jQuery);
    </script>
@endpush
