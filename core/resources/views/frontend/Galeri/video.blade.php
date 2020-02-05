@extends('frontend.layouts.master')
@section('title', $title)

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/portfolio-galleries.css') }}">
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
                <h1 class="pagetitle__heading">Galeri Video</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Video</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->
<!-- ===========================
    projects Standard 3 Columns
============================= -->
<section id="projectsStandard3col" class="projects projects-standard projects-standard-3col text-center pt-80 pb-90">
    <div class="container">
        <div id="filtered-items-wrap" class="row">
            @foreach($video as $g)
            <?php preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $g->url, $matches);?>
            <div class="col-sm-6 col-md-4 col-lg-4 mix filter-packaging">
                <div class="project-item">
                    <div class="project__img">
                        <img src="{{ 'http://img.youtube.com/vi/'.$matches[0][0].'/hqdefault.jpg' }}" alt="project img">
                        <div class="project__hover">
                            <div class="hover__content">
                                <div class="hover__content-inner">
                                    <a class="popup-video zoom__icon" href="{{ $g->url }}">
                                        <span class="video__player-animation"></span>
                                    </a>
                                </div>
                            </div><!-- /.hover-content -->
                        </div><!-- /.project-hover -->
                    </div><!-- /.project-img -->
                    <div class="project__info">
                        <h4 class="project__title"><a href="#"> {{ $g->judul }}</a></h4>
                    </div><!-- /.project-info -->
                </div><!-- /.project-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.projects Standard 3 Columns   -->
@stop

@push('scripts')
<!-- <script>
    $("img").on("load", function() {
        // image loaded here
    }).attr("src", url);
    jQuery(document).ready(function () {
        var filename = '{{ $g->url }}';
        VID_REGEX = /(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/
        video_id = filename.match(VID_REGEX)[1];
        console.log(video_id);
        var _img = document.getElementById('video_img');

        var newImg = new Image;
        newImg.onload = function() {
            _img.src = this.src;
        }
        newImg.src = 'http://whatever';
    });
</script> -->
@endpush
