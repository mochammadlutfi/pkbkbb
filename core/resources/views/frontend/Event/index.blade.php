@extends('frontend.layouts.master')
{{-- @section('title', $title) --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/components/shop-components-cards.css') }}">
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
                <h1 class="pagetitle__heading">Event's DPC PKB<br>Bandung Barat</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

	<div class="container mt-80 mb-40">
		<div class="row">
			@foreach($event as $e)
				<div class="col-12 col-md-6 col-lg-4">
					<div class="card" data-brk-library="component__shop_cards">
						<h6 class="">
							{{ $e->tgl }}
						</h6>
						<h5 class="brk-sc-bonus__title font__family-montserrat font__size-21 font__weight-normal line__height-28 mb-15">
							<span class="text-uppercase font__weight-medium">Ayo! Ikuti</span><br><span class="font__family-playfair font__style-italic">{{ $e->judul }}</span>
						</h5>
						<p class="font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-dark-font-color">
							ini deskripsi ini deskripsi  ini deskripsi  ini deskripsi  ini deskripsi
						</p>
						<a href="{{ route('event.detail', $e->slug) }}" class="brk-base-font-color font__family-open-sans font__size-16 font__weight-normal line__height-26 brk-sc-bonus__link mt-2">Lihat Event</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>



@stop
