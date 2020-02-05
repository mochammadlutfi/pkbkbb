@extends('frontend.layouts.master')
@section('styles')
<style>
.sw-video {
  text-align: center;
  display: inline-block;
  position: relative;
}

.sw-video .video__player {
  font-size: 18px;
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  background-color: #ffffff;
  color: #222222;
  position: relative;
  display: inline-block;
}

.sw-video .video__player-animation {
  position: relative;
  width: 66px;
  height: 66px;
}

.sw-video .video__player-animation:before {
  content: "";
  position: absolute;
  left: -3px;
  top: -24px;
  width: 66px;
  height: 66px;
  opacity: 1;
  border: 2px solid #ffffff;
  border-radius: 50%;
  -webkit-animation: pulsing 1s infinite linear;
  -moz-animation: pulsing 1s infinite linear;
  -ms-animation: pulsing 1s infinite linear;
  -o-animation: pulsing 1s infinite linear;
  animation: pulsing 1s infinite linear;
}

.sw-video .video__player-title {
  text-transform: uppercase;
  color: white;
  font-size: 13px;
  font-weight: 700;
  padding-top: 20px;
  margin-bottom: 0;
  line-height: 1;
}

.sw-video:hover .video__player-animation:before {
  opacity: 0;
  -webkit-animation: none;
  -moz-animation: none;
  -ms-animation: none;
  -o-animation: none;
  animation: none;
}
</style>

@endsection
@section('title', $title)
@section('content')

<!-- ============================
Slider
============================== -->
<section id="slider2" class="slider slider-2">
    <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
        data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="3000"
        data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        @foreach($slider as $s)
            <div class="slide-item align-v bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('uploads/'.$s->path) }}" alt="slide img"></div>
            </div><!-- /.slide-item -->
        @endforeach
    </div><!-- /.carousel -->
</section><!-- /.slider -->

<!-- ==========================
    fancybox layout 1
=========================== -->
<section id="fancyboxLayout1" class="fancybox-layout1 text-center pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-layers"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">SEJARAH</h4>
                        <p class="fancybox__desc">Berdirinya partai politik yang bersifat kejuangan, kebangsaan, terbuka dan demokratis yang diberi nama Partai Kebangkitan Bangsa (PKB).</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-4 -->
            <!-- fancybox item #1 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-desktop"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">NASKAH DEKLARASI</h4>
                        <p class="fancybox__desc">Cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka dan bersatu</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-4 -->
            <!-- fancybox item #3 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-strategy"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">MAB'DA SYI'ASI</h4>
                        <p class="fancybox__desc">Wujud dari bangsa yang dicita-citakan itu adalah masyarakat yang terjamin hak asasi kemanusiaannya.</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-4 -->
            <!-- fancybox item #2 -->
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                        <i class="icon-layers"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                        <h4 class="fancybox__title">VISI & MISI</h4>
                        <p class="fancybox__desc">Mewujudkan cita-cita kemerdekaan Republik Indonesia sebagaimana dituangkan dalam Pembukaan Undang-Undang Dasar 1945</p>
                        <div class="dotted__line"><span></span></div>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /. fancybox layout 1 -->

<section id="team1" class="team team-1 text-center pt-100 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
          <div class="heading heading-3 mb-60">
            <h2 class="heading__title">Anggota Fraksi DPC PKB<br>Kab. Bandung Barat</h2>
            <blockquote class="blockquote blockquote-3">
                Keberhasilan seorang pemimpin diukur dari kemampuan mereka dalam menyejahterakan umat yang mereka pimpin
                <span class="quote__author">Gusdur</span>
            </blockquote>
            <div class="divider__line"></div>
          </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <div class="row justify-content-center">
        @for($i=1; $i <= 5; $i++)
        <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="member">
            <div class="member__img">
              <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="member img">
            </div><!-- /.member-img -->
            <div class="member__info">
              <h5 class="member__name">Ahmed Abd Alhaleem</h5>
              <p class="member__desc">Graphic Designer</p>
            </div><!-- /.member-info -->
            <div class="social__icons justify-content-center">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </div><!-- /.social-icons -->
          </div><!-- /.member -->
        </div><!-- /.col-lg-4 -->
        @endfor

      </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.team1  -->



<!-- ======================
Blog
========================= -->
<section id="blog" class="blog blog-grid pt-100 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-3 text-center mb-60">
                    <h2 class="heading__title">Berita Terbaru Kami</h2>
                    <p class="heading__desc">Follow website Kami untuk mendapatkan informasi terbaru tentang DPC PKB Bandung Barat & Informasi Seputar Bandung Barat</p>
                    <div class="divider__line"></div>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">

            @for($i=1; $i <= 3; $i++)
            <!-- Blog Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog__img">
                        <a href="#">
                            <img src="{{ asset('assets/frontend/img/blog/grid/1.jpg') }}" alt="blog image">
                        </a>
                    </div><!-- /.entry-img -->
                    <div class="blog__content">
                        <div class="blog__meta">
                            <div class="blog__meta-cat">
                                <a href="#">Business</a><a href="#">Tips</a>
                            </div><!-- /.blog-meta-cat -->
                            <span class="blog__meta-date">Jan 20, 2019</span>
                        </div><!-- /.blog-meta -->
                        <h4 class="blog__title"><a href="#">Four ways to cheer yourself up on Blue Monday!</a></h4>
                        <p class="blog__desc">The third Monday of January is supposed to be day of year. Whether you
                            believe that or not....</p>
                        <a href="#" class="btn btn__secondary btn__link">Read More</a>
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-4 -->
            @endfor
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog -->


<!-- =========================
    video 2
=========================== -->
<section id="video" class="video video-2 text-center bg-overlay bg-parallax">
    <div class="bg-img"><img src="{{ asset('assets/frontend/img/pkb_tv.jpg') }}" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="heading mb-40">
                    <h3 class="heading__title color-white">We love what we do <br> and we do it with passion!</h3>
                    <p class="heading__desc color-white">We're committed to providing our customers with a great
                        investing
                        experience, there are no fees for depositing or withdrawing from your account.</p>
                </div><!-- /.heading -->
                <div class="video__btn">
                    <a class="sw-video" href="{{ route('galeri.video') }}">
                        <span class="video__player-animation"></span>
                        <div class="video__player">
                            <img src="{{ asset('assets/frontend/img/icons/player.png') }}" alt="player">
                        </div>
                        <h6 class="video__player-title">Play Video!</h6>
                    </a>
                </div><!-- /.video -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.video 2 -->

<!-- =====================
    Clients 2
======================== -->
<section id="clients2" class="clients clients-2 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="3"
                    data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true"
                    data-speed="700">
                    <div class="client">
                        <a href="#"><img src="{{ asset('assets/frontend/img/clients/1.png') }}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="{{ asset('assets/frontend/img/clients/2.png') }}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="{{ asset('assets/frontend/img/clients/3.png') }}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="{{ asset('assets/frontend/img/clients/4.png') }}" alt="client"></a>
                    </div><!-- /.client -->
                    <div class="client">
                        <a href="#"><img src="{{ asset('assets/frontend/img/clients/5.png') }}" alt="client"></a>
                    </div><!-- /.client -->
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.clients 2 -->
@endsection
