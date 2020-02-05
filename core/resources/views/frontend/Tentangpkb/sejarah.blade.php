@extends('frontend.layouts.master')
@section('styles')
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
                <h1 class="pagetitle__heading">Sejarah Pendirian PKB</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sejarah Pendirian PKB</li>
                    </ol>
                </nav>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
        Blog Single
      ========================= -->
<section id="blogSingleCentered" class="blog blog-single pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="blog-item blog-single-item">
                    <div class="blog__content">
                        <div class="row">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/img/pkb.png') }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <ul class="icon-list layout1">
                                            <div class="mb-15">
                                                 <li>21 Mei 1998, Reformasi Indonesia</li>
                                                <p class="ml-50">
                                                    Presiden Soeharto lengser dari jabatannya sebagai Presiden Republik Indonesia.
                                                </p>
                                            </div>
                                            <div class="mb-15">
                                                <li>3 Juni 1998, Rapat PBNU</li>
                                                <p class="ml-50">
                                                   PBNU mengadakan Rapat Harian Syuriyah dan Tanfidziyah untuk membentuk Tim Lima.
                                                </p>
                                            </div>
                                            <div class="mb-15">
                                                <li>20 Juni 1998, Rapat Tim Lima</li>
                                                <p class="ml-50">
                                                  Tim Lima dan Tim Asistensi mengadakan rapat menyusun rancangan awal pembentukan parpol.
                                                </p>
                                            </div>
                                            <div class="mb-15">
                                                <li>23 Juli 1998, Deklarasi PKB</li>
                                                <p class="ml-50">
                                                   Deklarasi Partai Kebangkitan Bangsa dilaksanakan di Jakarta pada 12 Rabiul Awal 1419 Hijriah.
                                                </p>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="blog__title">
                            Partai Kebangkitan Bangsa
                        </h4>
                        <div class="blog__desc">
                            <p>
                                Pada tanggal 21 Mei 1998, Presiden Soeharto lengser keprabon akibat desakan arus
                                reformasi yang kuat, mulai yang mengalir dari diskusi terbatas, unjuk rasa,
                                unjuk keprihatinan, sampai istighosah, dan lain sebagainya.</p>
                            <p>
                                Peristiwa ini menandai lahirnya era baru di Indonesia, yang kemudian disebut Era
                                Reformasi. Sehari setelah peristiwa bersejarah itu, Pengurus Besar Nahdlatul
                                Ulama (PBNU) mulai kebanjiran usulan dari warga NU di seluruh pelosok Tanah Air.
                            </p>
                            <p>
                                Usulan yang masuk ke PBNU sangat beragam, ada yang hanya mengusulkan agar PBNU
                                membentuk parpol, ada yang mengusulkan nama parpol. Tercatat ada 39 nama parpol
                                yang diusulkan. Nama terbanyak yang diusulkan adalah Nahdlatul Ummah,
                                Kebangkitan Umat, dan Kebangkitan Bangsa.</p>
                            <p>
                                Ada juga yang mengusulkan lambang parpol. Unsur-unsur yang terbanyak diusulkan
                                untuk lambang parpol adalah gambar bumi, bintang sembilan, dan warna hijau. Ada
                                yang mengusulkan bentuk hubungan dengan NU, ada yang mengusulkan visi dan misi
                                parpol, AD/ART parpol, nama-nama untuk menjadi pengurus parpol, ada juga yang
                                mengusulkan semuanya.</p>
                            <p>
                                Di antara usulan yang paling lengkap berasal dari Lajnah Sebelas Rembang yang
                                diketuai KH M Cholil Bisri dan PWNU Jawa Barat. Dalam menyikapi usulan yang
                                masuk dari masyarakat Nahdliyin, PBNU menanggapinya secara hati-hati. Hal ini
                                didasarkan pada adanya kenyataan bahwa hasil Muktamar NU ke-27 di Situbondo yang
                                menetapkan bahwa secara organisatoris NU tidak terkait dengan partai politik
                                manapun dan tidak melakukan kegiatan politik praktis.</p>
                            <p>
                                Namun demikian, sikap yang ditunjukkan PBNU belum memuaskan keinginan warga NU.
                                Banyak pihak dan kalangan NU dengan tidak sabar bahkan langsung menyatakan
                                berdirinya parpol untuk mewadahi aspirasi politik warga NU setempat. Di antara
                                yang sudah mendeklarasikan sebuah parpol adalah Partai Bintang Sembilan di
                                Purwokerto dan Partai Kebangkitan Umat (Perkanu) di Cirebon.</p>
                            <p>
                                Akhirnya, PBNU mengadakan Rapat Harian Syuriyah dan Tanfidziyah PBNU tanggal 3
                                Juni 1998. Forum ini menghasilkan keputusan untuk membentuk Tim Lima yang diberi
                                tugas untuk memenuhi aspirasi warga NU.</p>
                            <p>
                                Tim Lima diketuai oleh KH Ma’ruf Amin (Rais Suriyah/Kordinator Harian PBNU),
                                dengan anggota, KH M Dawam Anwar (Katib Aam PBNU), Dr KH Said Aqil Siroj, M.A.
                                (Wakil Katib Aam PBNU), HM Rozy Munir,S.E., M.Sc. (Ketua PBNU), dan Ahmad Bagdja
                                (Sekretaris Jenderal PBNU). Untuk mengatasi hambatan organisatoris, Tim Lima itu
                                dibekali Surat Keputusan PBNU.</p>
                            <p>
                                Selanjutnya, untuk memperkuat posisi dan kemampuan kerja Tim Lima seiring
                                semakin derasnya usulan warga NU yang menginginkan adanya partai politik, maka
                                Rapat Harian Syuriyah dan Tanfidziyah PBNU pada tanggal 20 Juni 1998 memberi
                                Surat Tugas kepada Tim Lima.</p>
                            <p>
                                Selain itu juga dibentuk Tim Asistensi yang diketuai oleh Arifin Djunaedi (Wakil
                                Sekjen PBNU) dengan anggota H Muhyiddin Arubusman, H.M. Fachri Thaha Ma’ruf,
                                Lc., Drs. H Abdul Aziz, M.A., Drs. H Andi Muarli Sunrawa, H.M. Nasihin Hasan, H
                                Lukman Saifuddin, Drs. Amin Said Husni, dan Muhaimin Iskandar. Tim Asistensi
                                bertugas membantu Tim Lima dalam mengiventarisasi dan merangkum usulan yang
                                ingin membentuk parpol baru, dan membantu warga NU dalam melahirkan parpol baru
                                yang dapat mewadahi aspirasi poitik warga NU.</p>
                            <p>
                                Pada tanggal 22 Juni 1998 Tim Lima dan Tim Asistensi mengadakan rapat untuk
                                mendefinisikan dan mengelaborasikan tugas-tugasnya. Tanggal 26 – 28 Juni 1998
                                Tim Lima dan Tim Asistensi mengadakan konsinyering di Villa La Citra Cipanas
                                untuk menyusun rancangan awal pembentukan parpol. Pertemuan ini menghasilkan
                                lima rancangan, yaitu:</p>
                            <p>
                                Pokok-pokok Pikiran NU Mengenai Reformasi Politik, Mabda’ Siyasi, Hubungan
                                Partai Politik dengan NU, AD/ART dan Naskah Deklarasi.</p>
                            <p>
                                Sang inisiator pembentukan parpol bagi warga NU, KH Abdurrahman Wahid atau Gus
                                Dur prihatin bahwa kelompok-kelompok NU ingin mendirikan partai politik NU.
                                Lantaran ini terkesan mengaitkan agama dan politik partai. Medio akhir Juni
                                1998, sikapnya mengendur dan bersedia menginisiasi kelahiran parpol berbasis
                                ahlussunah wal jamaah.</p>
                            <p>
                                Keinginan Gus Dur diperkuat dukungan deklarator lainnya, yaitu KH Munasir Ali,
                                KH Ilyas Ruchiyat, KH A. Mustofa Bisri serta KH A. Muchith Muzadi. Proses
                                selanjutnya, penentuan nama partai disahkan melalui hasil musyawarah Tim
                                Asistensi Lajnah, Tim Lajnah, Tim NU, Tim Asistensi NU, Perwakilan Wilayah, para
                                tokoh pesantren, dan tokoh masyarakat.</p>
                            <p>
                                Usai pembentukan partai, deklarasi pun dilaksanakan di Jakarta pada <strong>29 Rabiul Awal 1419 H atau 23 Juli 1998</strong>. Bunyi dalam isi deklarasi
                                tersebut adalah:</p>
                            <p>
                                Bahwa cita-cita proklamasi kemerdekaan bangsa Indonesia adalah terwujudnya suatu
                                bangsa yang merdeka, bersatu, adil dan makmur, serta untuk mewujudkan
                                pemerintahan Negara Kesatuan Republik Indonesia (NKRI) yang melindungi segenap
                                bangsa Indonesia dan untuk memajukan kesejahteraan umum, mencerdaskan kehidupan
                                bangsa, serta ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan,
                                perdamaian abadi, dan keadilan sosial.</p>
                            <p>
                                Bahwa wujud dari bangsa yang dicita-citakan itu adalah masyarakat beradab dan
                                sejahtera yang mengejawantahkan nilai-nilai kejujuran, kebenaran, kesungguhan
                                dan keterbukaan yang bersumber dari hati nurani, bisa dipercaya, setia dan tepat
                                janji serta mampu memecahkan masalah sosial yang bertumpu pada kekuatan sendiri,
                                bersikap dan bertindak adil dalam segala situasi, tolong menolong dalam
                                kebajikan, serta konsisten menjalankan garis/ketentuan yang telah disepakati
                                bersama.</p>
                            <p
                                style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; margin-top: 0px; margin-bottom: 0px;">
                                Maka dengan memohon rahmat, taufiq, hidayah dan inayah Allah SWT serta didorong
                                oleh semangat keagamaan, kebangsaan dan demokrasi, kami warga Jam’iyah Nahdlatul
                                Ulama dengan ini menyatakan berdirinya partai politik yang bersifat kejuangan,
                                kebangsaan, terbuka dan demokratis yang diberi nama <strong
                                    style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold;">Partai
                                    Kebangkitan Bangsa</strong> <strong
                                    style="box-sizing: border-box; text-rendering: optimizelegibility; outline: 0px; font-weight: bold; margin-bottom: 0px;">(PKB)</strong>.
                            </p>

                            <h2 class="heading__title" style="font-size:24px;">PEROLEHAN SUARA PKB PADA PEMILU 1999 – 2014</h2>
                            <p>Di bawah komando Ketua Umum Dewan Pengurus Pusat Partai Kebangkitan Bangsa (DPP PKB)
                                <a href="https://id.wikipedia.org/wiki/Muhaimin_Iskandar">H.Abdul Muhaimin Iskandar</strong></a>, perolehan suara PKB dalam
                                Pemilihan Umum (Pemilu) 2014 kembali meroket. Dengan pencapaian 11.292.151 suara
                                (9,04%) atau setara 47 kursi di DPR RI. Padahal, lima tahun sebelumnya atau
                                Pemilu priode 2004-2009, PKB hanya memperoleh 5.146.302 suara (4,95 persen) dan
                                mendapat 28 kursi DPR RI.
                            </p>
                            <p>
                                Semua pencapaian tersebut dapat diraih berkat strategi jitu yang ditelurkan Cak
                                Imin sapaan akrab H Abdul Muhaimin Iskandar dalam menghadapi Pemilu 2014. Cak
                                Imin tidak hanya dikenal piawai memainkan strategi politik, ia juga lihai dalam
                                memotivasi semangat calon anggota legislatif asal PKB untuk berjibaku meraih
                                kemenangan.</p>
                            <p>
                                Tekad bulat Cak Imin mengibarkan bendera kejayaan PKB terus dilakukan. Bahkan,
                                mantan Ketua Umum Pengurus Besar Persatuan Mahasiswa Islam Indonesia (PB PMII)
                                itu sampai hari ini terus mengajak keluarga besar PKB untuk bekerja lebih keras
                                dengan memasifkan politik silaturahim, membangun kantung – kantung kekuatan
                                nahdliyin dan nahdliyah serta lebih memperkuat kembali sinergisitas antara
                                Nahdlatul Ulama (NU) dan PKB.</p>
                            <p>
                                Sebagai partai dengan basis nasionalis religius, PKB pun berhasil mengantarkan
                                85 pasangan calon kepala daerah di seluruh Indonesia dalam Pemilihan Kepala
                                Daerah (Pilkada) serentak 9 Desember 2015 lalu.</p>
                            <p>
                                Semua keberhasilan PKB di tangan Cak Imin saat ini, tidak lepas juga dari jasa
                                besar pendiri PKB, yakni KH Abdurahman Wahid atau Gus Dur dan kiai-kiai lainnya.
                            </p>
                            <p>
                                Sejarah bangsa Indonesia mencatat, ketokohan dan kepemimpinan Gus Dur terbukti
                                ampuh mendongkrak suara PKB di Pemilu 1999. Pesta demokrasi perdana yang diikuti
                                Green Party ini sukses besar dengan meraup 13.336.982 suara (12,61 persen)
                                setara 51 kursi di DPR RI.</p>
                            <p>
                                Tak hanya sampai di sana, gaya politik Gus Dur pun berhasil memikat koalisi
                                poros tengah untuk menunjuk Gus Dur sebagai calon presiden. Melalui proses
                                pemungutan suara pada Sidang Umum MPR, Gus Dur pun terpilih menjadi Presiden RI
                                dan Megawati Soekarnoputri sebagai wakilnya.</p>
                            <p>
                                Pada Pemilu tahun 2004-2009, PKB kembali masuk dalam lingkaran lima besar.
                                Dimana peringkat PKB pada waktu itu berada di peringkat ketiga dengan raihan
                                12.002.885 suara (10,61 persen) dan mendapat 52 kursi DPR RI.</p>
                            <p>
                                Sayangnya, pada Pemilu 2009-2014 perolehan suara PKB melorot tajam. Partai anak
                                kandung NU ini hanya meraih 5.146.302 suara (4,95 persen) dan mendapat 28 kursi
                                DPR.</p>
                            <p>
                                Barulah, pada era kepemimpinan Cak Imin PKB berada di jalur yang tepat untuk
                                meraih kesuksesan dan menjadi partai pembela rakyat sejati.</p>
                        </div><!-- /.blog-desc -->
                    </div><!-- /.entry-content -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog Single -->
@stop
