@extends('frontend.layouts.master')
@section('title')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/gallery-cols.css') }}">
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
                <h1 class="pagetitle__heading">{{ $title }}</h1>
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
<section id="projectsMasonry" class="projects projects-masonry pt-30 pb-0">
    <div class="container">
        <div id="filtered-items-wrap" class="row mb-50">
            @foreach($foto as $f)
            <!-- project item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-packaging">
                <div class="project-item">
                    <div class="project__img">
                        <img src="{{ asset('uploads/'.$f->path) }}" alt="{{ $title }}">
                    </div><!-- /.project-img -->
                </div><!-- /.project-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@stop
@push('scripts')

@endpush
