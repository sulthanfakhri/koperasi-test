<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.template.head')
</head>

<body data-bs-target="#navbar" data-bs-offset="71">

    <!-- Start Navbar -->
    @include('landing.template.navbar')
    <!-- End Navbar -->

    <!-- start About -->
    <section class="section" id="tentang-kami">
        <div class="container mt-4">
            <div class="row justify-content-center">
                @include('landing.template.urlpage')
                <div class="col-lg-7 mt-5">
                    <div class="text-center mb-lg-5">
                        <h3 class="heading">Tentang Kami</h3>
                        <p class="text-muted fs-17 mb-0">Sekilas Koperasi JMB Pusat, Visi & Misi, Landasan, Asas, Prinsip, Tujuan dan Struktur Organisasi</p>
                    </div>
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between" style="text-align: justify;">
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Sekilas Koperasi JMB Pusat</h6>
                                </div>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat didirikan pada tangal 25 Mei 1985, yang berlokasi di Jalan Dukuh VI RT 008 RW 002 Kelurahan Dukuh, Kecamatan Kramat Jati, Jakarta Timur.
                                    Koperasi Jasa Marga Bakti Kantor Pusat sebagai badan usaha mandiri yang beranggotakan para karyawan yang berada di Kantor Pusat, Anak Perusahaan dan Proyek, serta karyawan Koperasi yang merupakan organisasi ekonomi yang bercirikan azas kekeluargaan.
                                </p>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-6">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="gambar-koperasi">
                </div><!--  end col  -->

                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Landasan</h6>
                                </div>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat berlandaskan Pancasila dan Undang-undang Dasar 1945 beserta amandemennya dan Undang-undang Republik Indonesia Nomor 25 tahun 1992 tentang Perkoperasian.
                                </p>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Asas</h6>
                                </div>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat dapat menjalankan usahanya berdasarkan asas kekeluargaan, keterbukaan, akuntabilitas dan kesetaraan.
                                </p>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->

                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Prinsip</h6>
                                </div>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat melakukan kegiatan berdasarkan prinsip-prinsip koperasi, yaitu:
                                </p>
                                <ol type="a" class="text-muted">
                                    <li>Keanggotaan bersifat sukarela dan terbuka;</li>
                                    <li>Pengelolaan dilakukan secara demokratis dan tetap;</li>
                                    <li>Pembagian Sisa Hasil Usaha (SHU) dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota.</li>
                                </ol>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Tujuan</h6>
                                </div>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat melakukan kegiatan berdasarkan prinsip-prinsip koperasi, yaitu:
                                </p>
                                <ol type="1" class="text-muted">
                                    <li>Koperasi bertujuan mewujudkan kesejahteraan anggota pada khususnya masyarakat pada umumnya.</li>
                                    <li>Menjadi salahsatu pilar Gerakan Ekonomi Rakyat serta aktif ikut membangun tatanan perokonomian Nasional.</li>
                                </ol>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->

            </div><!--  end row  -->
        </div><!--  end container  -->
    </section>
    <!--  end About  -->

    <!-- START FOOTER -->
    @include('landing.template.footer')
    <!-- END FOOTER -->

    <!-- START JS -->
    @include('landing.template.js')
    <!-- END JS -->

</body>

</html>