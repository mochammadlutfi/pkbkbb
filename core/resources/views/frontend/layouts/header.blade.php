<header id="header2" class="header header-2 header-full">
    <div class="header__topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9 col-lg-10">
                    <ul class="contact__list list-unstyled">
                        <li><i class="icon-document"></i>{{ settings()->get('email_contact') }}</li>
                    </ul>
                </div><!-- /.col-lg-10 -->
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="social__icons justify-content-end">
                        <a href="{{ asset(settings()->get('social_facebook')) }}"><i class="fa fa-facebook"></i></a>
                        <a href="{{ asset(settings()->get('social_twitter')) }}"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="{{ asset(settings()->get('social_instagram')) }}"><i class="fa fa-instagram"></i></a>
                    </div><!-- /.social-icons -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset(settings()->get('app_logo')) }}" class="logo-light" alt="logo">
                <img src="{{ asset(settings()->get('app_logo')) }}" class="logo-dark" alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav__item"><a href="{{ url('/') }}"
                            class="nav__item-link {{ Request::is('/') ? 'nav__item-link active' : null}}">Home</a></li>

                    <li class="nav__item with-dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="dropdown-toggle nav__item-link {{ Request::is('tentang/*') ? 'nav__item-link active' : null}}">Tentang</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item"><a href="{{ route('tentang.sejarah') }}"
                                    class="nav__item-link">Sejarah Pendirian</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('tentang.naskah_deklarasi') }}"
                                    class="nav__item-link">Naskah Deklarasi</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('tentang.mabda_siyasi') }}"
                                    class="nav__item-link">Mabda Syi'asi</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('tentang.ad_art') }}" class="nav__item-link">AD/ART
                                    PKB 2014</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('tentang.makna_logo') }}"
                                    class="nav__item-link">Makna Logo PKB</a></li>
                            <!-- /.nav-item -->
                            <li class="nav__item"><a href="{{ route('tentang.visi_misi') }}" class="nav__item-link">Visi
                                    & Misi</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    <li class="nav__item"><a href="{{ route('fraksi') }}"
                            class="nav__item-link {{ Request::is('fraksi/*') ? 'nav__item-link active' : null}}">Fraksi</a>
                    </li>

                    <li class="nav__item with-dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="dropdown-toggle nav__item-link {{ Request::is('galeri/*', 'galeri') ? 'nav__item-link active' : null}}">Galeri</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item"><a href="{{ route('galeri') }}" class="nav__item-link">Foto</a></li>
                            <li class="nav__item"><a href="{{ route('galeri.video') }}" class="nav__item-link">Video</a>
                            </li>
                            <li class="nav__item"><a href="{{ route('galeri.instagram') }}"
                                    class="nav__item-link">Instagram</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </li><!-- /.nav-item -->

                    <li class="nav__item"><a href="#" class="nav__item-link">Berita</a></li>

                    <li class="nav__item"><a href="{{ route('event') }}" class="nav__item-link">Event</a></li>

                    <li class="nav__item"><a href="{{ route('QA') }}" class="nav__item-link">Tanya Jawab</a></li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->

            <div class="navbar-modules">
                <div class="modules__wrapper d-flex align-items-center">
                    @if(Auth::guard('web')->check())
                    <a href="#" class="module__btn module__btn-cart">
                        <div class="unf-header-menu__avatar">
                            <div class="css-1mq751s">
                                <img src="" alt="Mochammad">
                            </div>
                        </div>
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="module__btn module__btn-contact">Login</a>
                    <a href="{{ route('register') }}" class="module__btn module__btn-contact">Daftar</a>
                    @endif
                </div><!-- /.modules-wrapper -->
                <div class="module__cart-container">
                    <div class="cart-action">
                        <a href="{{ url('profile') }}" class="btn btn__primary btn__block btn__hover3 mb-10">Profil</a>
                        <a class="btn btn__primary btn__block btn__hover3" href="#"
                            onclick="event.preventDefault();
                                            document.querySelector('#logout-form').submit();">
                            Keluar
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div><!-- /.cart-action -->
                </div><!-- /.module-cart-container -->
            </div><!-- /.navbar-modules -->

        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header>
