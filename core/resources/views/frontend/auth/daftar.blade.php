@extends('frontend.layouts.master')

@section('styles')
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
                <h1 class="pagetitle__heading">Daftar</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('register') }}" class="mx-auto mx-lg-0" method="POST">
                    @csrf
                    <div class="form-group">
                        <input id="nama" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama Lengkap">
                        @if ($errors->has('nama'))
                            <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Alamat Email">
                        @if ($errors->has('email'))
                            <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="text-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn__primary btn__bordered btn__block">
                            <i class="fa fa-paper-plane mr-3"></i> Daftar Sekarang
                        </button>
                    </div>
                    {{-- <input id="username" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Username"> --}}
                    <div class="form-group">
                        Sudah Punya Akun?
                        <a class="font__size-14 line__height-24 brk-base-font-color text-decoration_underline" href="{{ url('/login')}}">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop

