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
                <h1 class="pagetitle__heading">Mabda Syi'asi</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mabda Syi'asi</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<div class="main-wrapper">
    <main class="main-container">
        <div class="container mt-40 mb-80">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 col-xl-8">
                	<div class="brs-post brs-post_slider p-50" data-brk-library="component__blog">
	                    <div class="brs-posts-container pt-20">
	                        <div class="brk-post-full">
	                        	<div class="brs-post__description">
								<ul class="list-inline-2" data-brk-library="component__list">
									<li class="font__family-montserrat font__size-14 list-counter">
										<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu bangsa yang merdeka, bersatu, adil dan makmur sejahtera lahir dan batin, bermartabat dan sederajat dengan bangsa-bangsa lain didunia, serta mampu mewujudkan suatu pemerintahan Negara Kesatuan Republik Indonesia yang melindungi segenap bangsa Indonesia menuju tercapainya kesejahteraan umum, mencerdaskan kehidupan bangsa, keadilan sosial dan menjamin terpenuhinya hak asasi manusia serta ikut melaksanakan ketertiban dunia.
											</span>
										</p>
									</li>
									<li class="font__family-montserrat font__size-14 list-counter">
										<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Bagi Partai Kebangkitan Bangsa, wujud dari bangsa yang dicita-citakan itu adalah masyarakat yang terjamin hak asasi kemanusiaannya yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan dan keterbukaan bersumber pada hati nurani (as-shidqu), dapat dipercaya, setia dan tepat janji serta mampu memecahkan masalah-masalah sosial yang dihadapi (al-amanah wa al-wafa-u bi al-ahdli), bersikap dan bertindak adil dalam segala situasi (al-‘adalah), tolong menolong dalam kebajikan (al-ta’awun) serta konsisten menjalankan ketentuan yang telah disepakati bersama (al-istiqomah) musyawarah dalam menyelesaikan persoalan sosial (al-syuro) yang menempatkan demokrasi sebagai pilar utamanya dan persamaan kedudukan setiap warga negara didepan hukum (al-musawa) adalah prinsip dasar yang harus ditegakkan.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Dalam mewujudkan apa yang selalu dicita-citakan tersebut, misi utama yang dijalankan Partai Kebangkitan Bangsa adalah tatanan masyarakat beradab yang sejahtera lahir dan batin, yang setiap warganya mampu mengejawantahkan nilai-nilai kemanusiaannya. Yang meliputi, terpeliharanya jiwa raga, terpenuhinya kemerdekaan, terpenuhinya hak-hak dasar manusia seperti pangan, sandang, dan papan, hak atas penghidupan/perlindungan pekerjaan, hak mendapatkan keselamatan dan bebas dari penganiayaan (hifdzu al-Nafs), terpeliharanya agama dan larangan adanya pemaksaan agama (hifdzu al-din), terpeliharanya akal dan jaminan atas kebebasan berekspresi serta berpendapat (hifdzu al-Aql), terpeliharanya keturunan, jaminan atas perlindungan masa depan generasi penerus (hifdzu al-nasl) dan terpeliharanya harta benda (hifdzu al-mal). Misi ini ditempuh dengan pendekatan amar ma’ruf nahi munkar yakni menyerukan kebajikan serta mencegah segala kemungkinan dan kenyataan yang mengandung kemunkaran.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Penjabaran dari misi yang di emban guna mencapai terwujudnya masyarakat yang dicitakan tersebut tidak bisa tidak harus dicapai melalui keterlibatan penetapan kebijakan publik. Jalur kekuasaan menjadi amat penting ditempuh dalam proses mempengaruhi pembuatan kebijakan publik melalui perjuangan pemberdayaan kepada masyarakat lemah, terpinggirkan dan tertindas, memberikan rasa aman, tenteram dan terlindungi terhadap kelompok masyarakat minoritas dan membongkar sistem politik, ekonomi, hukum dan sosial budaya yang memasung kedaulatan rakyat. Bagi Partai Kebangkitan Bangsa, upaya mengartikulasikan garis perjuangan politiknya dalam jalur kekuasaan menjadi hal yang niscaya dan dapat dipertanggungjawabkan.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Partai Kebangkitan Bangsa sadar dan yakin bahwa kekuasaan itu sejatinya milik Tuhan Yang Maha Esa. Kekuasaan yang ada pada diri manusia merupakan titipan dan amanat Tuhan yang dititipkan kepada manusia yang oleh manusia hanya bisa diberikan pada pihak lain yang memiliki keahlian dan kemampuan untuk mengemban dan memikulnya. Keahlian memegang amanat kekuasaan itu mensaratkan kemampuan menerapkan kejujuran, keadilan dan kejuangan yang senantiasa memihak kepada pemberi amanat.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Dalam kaitan dengan kehidupan bermasyarakat, berbangsa dan bernegara kekuasaan yang bersifat demikian itu harus dapat dikelola dengan sebaik-baiknya dalam rangka menegakkan nilai-nilai agama yang mampu menebarkan rahmat, kedamaian dan kemaslahatan bagi semesta. Manifestasi kekuasaan itu harus dipergunakan untuk memperjuangkan pemberdayaan rakyat agar mampu menyelesaikan persoalan hidupnya dengan lebih maslahat. Partai Kebangkitan Bangsa berketetapan bahwa kekuasaan yang hakekatnya adalah amanat itu haruslah dapat dipertanggungjawabkan dihadapan Tuhan dan dapat dikontrol pengelolaannya oleh rakyat. Kontrol terhadap kekuasaan itu hanya mungkin dilakukan manakala kekuasaan tidak tak terbatas dan tidak memusat di satu tangan, serta berada pada mekanisme sistem yang institusionalistik, bukan bertumpu pada kekuasaan individualistik, harus selalu dibuka ruang untuk melakukan kompetisi kekuasaan dan perimbangan kekuasaan sebagai arena mengasah ide-ide perbaikan kualitas bangsa dalam arti yang sesungguhnya. Pemahaman atas hal ini tidak hanya berlaku saat memandang kekuasaan dalam tatanan kenegaraan, melainkan juga harus terefleksikan dalam tubuh internal partai.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
										<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
											<span class="text">
												<span class="cirlce">
													<span class="before"></span>
													<span class="after"></span>
												</span>
												Partai Kebangkitan Bangsa menyadari bahwa sebagai suatu bangsa pluralistik yang terdiri dari berbagai suku, agama dan ras, tatanan kehidupan bangsa Indonesia harus senantiasa berpijak pada nilai-nilai Ketuhanan Yang Maha Esa, kemanusiaan yang adil dan beradab, persatuan Indonesia, kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan, dan keadilan sosial bagi seluruh rakyat Indonesia. Penerapan nilai-nilai Pancasila tersebut haruslah dijiwai dengan sikap mengembangkan hubungan tali persaudaraan antar sesama yang terikat dengan ikatan keagamaan (ukhuwah diniyah), kebangsaan (ukhuwah wathoniyah), dan kemanusiaan (ukhwuah insaniyah), dengan selalu menjunjung tinggi semangat akomodatif, kooperatif dan integratif, tanpa harus saling dipertentangkan antara sesuatu dengan yang lainnya.
												</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
												<span class="text">
													<span class="cirlce">
														<span class="before"></span>
														<span class="after"></span>
													</span>
													Partai Kebangkitan Bangsa bercirikan humanisme religius (insaniyah diniyah), amat peduli dengan nilai-nilai kemanusiaan yang agamis, yang berwawasan kebangsaan. Menjaga dan melestarikan tradisi yang baik serta mengambil hal-hal yang baru yang lebih baik untuk ditradisikan menjadi corak perjuangan yang ditempuh dengan cara-cara yang santun dan akhlak karimah. Partai adalah ladang persemaian untuk mewujudkan masyarakat beradab yang dicitakan, serta menjadi sarana dan wahana sekaligus sebagai wadah kaderisasi kepemimpinan bangsa. Partai dalam posisi ini berkehendak untuk menyerap, menampung, merumuskan, menyampaikan dan memperjuangkan aspirasi rakyat guna menegakkan hak-hak rakyat dan menjamin pelaksanaan ketatanegaraan yang jujur, adil dan demokratis.
													</span>
											</p>
										</li>
										<li class="font__family-montserrat font__size-14 list-counter">
											<p class="brs-post__description__paragraph text-left font__family-open-sans font__size-16 font__weight-normal line__height-26 mb-15 ml-20 ml-20">
												<span class="text">
													<span class="cirlce">
														<span class="before"></span>
														<span class="after"></span>
													</span>
													Partai Kebangkitan Bangsa adalah partai terbuka dalam pengertian lintas agama, suku, ras, dan lintas golongan yang dimanestasikan dalam bentuk visi, misi, program perjuangan, keanggotaan dan kepemimpinan. Partai Kebangkitan Bangsa bersifat independen dalam pengertian menolak segala bentuk kekuasaan dari pihak manapun yang bertentangan dengan tujuan didirikannya partai.
												</span>
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-xl-3">
                    <div class="mb-60">
                        <div class="brs-sidebar brs-sidebar_right">
                            <div class="list-group">
                                <a href="{{ url('tentang/sejarah-pendirian-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Sejarah Pendirian PKB</a>
                                <a href="{{ url('tentang/naskah-deklarasi') }}" class="list-group-item list-group-item-action list-group-item-light"   style="color :black">Naskah Deklarasi</a>
                                <a href="{{ url('tentang/mabda-siyasi') }}" class="list-group-item list-group-item-action list-group-item-success active">Mabda Siyasi</a>
                                <a href="{{ url('tentang/ad-art-pkb-2014') }}" class="list-group-item list-group-item-action list-group-item-light" style="color :black">AD ART PKB 2014</a>
                                <a href="{{ url('tentang/makna-logo-pkb') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Makna Logo PKB</a>
                                <a href="{{ url('tentang/visi-dan-misi') }}" class="list-group-item list-group-item-action list-group-item-light"  style="color :black">Visi dan Misi</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</main>
</div>
@stop
@push('scripts')
    <!-- vendor -->
	<script src="{{ asset('assets/frontend/js/components/blog.js') }} "></script>
@endpush
