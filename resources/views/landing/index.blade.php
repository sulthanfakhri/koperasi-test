<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.template.head')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
        <div class="container">

            <!-- LOGO -->
            <a class="navbar-brand text-uppercase" href="{{route('index')}}">
                <img src="landing/images/headico.png" alt="" height="35">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('index')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Produk & Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 d-none d-lg-block">
                        <a class="btn btn-primary nav-btn" href="{{route('login')}}">
                            Masuk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Home -->
    <section class="section home" style="padding-bottom: 35px;" id="beranda">
        <div class="container">
            <div class="row align-items-center mt-5 mt-lg-0">
                <div class="col-lg-5">
                    <div class="home-heading" data-aos="fade-right" data-aos-once="true">
                        <h6 class="text-uppercase text-muted">Koperasi Jasa Marga Bakti Kantor Pusat</h6>
                        <h3 class="lh-sm">Mudahkan keperluan Anda dengan <span class="text-primary">Koperasi Jasa Marga Bakti Kantor Pusat</span></h3>
                    </div>
                    <div class="home-btn d-grid d-sm-block gap-3">
                        <a class="btn btn-outline-primary rounded-pill me-sm-3" href="javascript:void(0)" data-aos="fade-right" data-aos-once="true" data-aos-duration="1100">Daftar
                            <span class="avatar-xs">
                                <span class="avatar-title rounded-circle btn-icon">
                                    <i class="mdi mdi-chevron-double-right"></i>
                                </span>
                            </span>
                        </a>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                            <div class="d-inline-flex align-items-center" data-aos="fade-right" data-aos-once="true" data-aos-duration="1200">
                                <div class="flex-grow-1 me-2">
                                    <span class="text-muted fs-14">Tonton Sekarang</span>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle modal-btn">
                                            <i class="mdi mdi-play"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content home-modal">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <video id="VisaChipCardVideo" class="video-box" controls>
                                        <source src="" type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                    </div>
                </div><!-- end col-->
                <div class="col-lg-7">
                    <div class="ms-md-4" data-aos="fade-left" data-aos-once="true" data-aos-duration="1200">
                        <img class="home-img" src="{{ asset('landing/images/welcome.png') }}" alt="kar. koperasi">
                    </div>
                </div><!-- end col-->

                <div id="carouselExample" class="carousel slide" data-aos="fade-up" data-aos-once="true" data-aos-duration="1200">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="client-list">
                                <div class="row justify-content-around mt-5">
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/jasamarga.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/familymart.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/bjb.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/bsi.png') }}" alt="">
                                    </div><!-- End col-->
                                </div><!-- End row-->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="client-list">
                                <div class="row justify-content-around mt-5">
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/jmtm.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/jjb.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/jtt.png') }}" alt="">
                                    </div><!-- End col-->
                                    <div class="col-md-2 col-6 d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('landing/images/logo/jmrb.png') }}" alt="">
                                    </div><!-- End col-->
                                </div><!-- End row-->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="right: 0% !important;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div><!-- end row-->
        </div><!--end container-->
        <div class="container-fluid">
            <div class="row">
                <div class="home-shape-arrow">
                    <a href="#tentang-kami" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!-- End Home -->

    <!-- start About -->
    <section class="section" id="tentang-kami">
        <div class="container">
            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Sekilas Koperasi JMB Pusat</h6>
                                </div>
                                <h4>Tentang Kami</h4>
                                <p class="text-muted">Koperasi Jasa Marga Bakti Kantor Pusat didirikan pada tangal 25 Mei 1985, yang berlokasi di Jalan Dukuh VI RT 008 RW 002 Kelurahan Dukuh, Kecamatan Kramat Jati, Jakarta Timur.
                                    Koperasi Jasa Marga Bakti Kantor Pusat sebagai badan usaha mandiri yang beranggotakan para karyawan yang berada di Kantor Pusat, Anak Perusahaan dan Proyek, serta karyawan Koperasi yang merupakan organisasi ekonomi yang bercirikan azas kekeluargaan.
                                </p>
                                <div class="about-link">
                                    <a href="{{ route('about') }}">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-6">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
            </div><!--  end row  -->
        </div><!--  end container  -->
    </section>
    <!--  end About  -->

    <!-- Start Features -->
    <section class="section features features-bg" id="layanan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-5">
                        <h3 class="heading">Layanan</h3>
                        <p class="text-muted fs-17">Koperasi Jasa Marga Bakti Kantor Pusat menyediakan layanan sebagai berikut :</p>
                    </div>
                </div><!-- end col-->
            </div><!-- end row-->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card features-card">
                        <div class="card-body">
                            <div class="avatar-md mb-4">
                                <div class="avatar-title bg-primary rounded-circle">
                                    <i class="mdi mdi-cash-multiple"></i>
                                </div>
                            </div>
                            <h5>Simpan Pinjam</h5>
                            <p class="text-muted">Koperasi Jasa Marga Bakti Pusat menyediakan layanan aktifitas transaksi simpan dan pinjam untuk berbagai kebutuhan para anggota koperasi.</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card features-card">
                        <div class="card-body">
                            <div class="avatar-md mb-4">
                                <div class="avatar-title bg-primary rounded-circle">
                                    <i class="mdi mdi-truck-fast"></i>
                                </div>
                            </div>
                            <h5>Pengadaan Barang & Jasa</h5>
                            <p class="text-muted">Koperasi Jasa Marga Bakti Pusat menyediakan layanan aktifitas pengadaan barang dan jasa untuk kebutuhan para anggota koperasi.</p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card features-card">
                        <div class="card-body">
                            <div class="avatar-md mb-4">
                                <div class="avatar-title bg-primary rounded-circle">
                                    <i class="mdi mdi-archive-search"></i>
                                </div>
                            </div>
                            <h5>Usaha Lainnya</h5>
                            <p class="text-muted">Koperasi Jasa Marga Bakti Pusat juga menyediakan layanan aktifitas usaha lainnya untuk meningkatkan performa dan kinerja koperasi.</p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end Features -->

    <!-- start counter -->
    <section class="bg-counter w-100" style="background-image: url(landing/images/counter-bg.png);">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h3 class="heading">Anggota Koperasi</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ipsam sapiente quod!</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row justify-content-lg-between justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="mt-5 text-center">
                        <h1 class="fw-semibold display-6 mb-3">
                            <span class="counter_value" data-target="3700">0</span>
                            <span>k</span>
                        </h1>
                        <p class="mb-0 fs-17 text-muted">Lorem, ipsum dolor.</p>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="mt-5 text-center">
                        <h1 class="fw-semibold display-6 mb-3">
                            <span class="counter_value" data-target="250">0</span>
                            <span>+</span>
                        </h1>
                        <p class="mb-0 fs-17 text-muted">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="mt-5 text-center">
                        <h1 class="fw-semibold display-6 mb-3">
                            <span class="counter_value" data-target="34780">0</span>
                            <span>+</span>
                        </h1>
                        <p class="mb-0 fs-17 text-muted">Lorem, ipsum.</p>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-md-6">
                    <div class="mt-5 text-center">
                        <h1 class="fw-semibold display-6 mb-3">
                            <span class="counter_value" data-target="1800">0</span>
                            <span>k</span>
                        </h1>
                        <p class="mb-0 fs-17 text-muted">Lorem, ipsum.</p>
                    </div>
                </div><!--end col-->
            </div><!--emd row-->
        </div><!--end container-->
    </section>
    <!-- end counter -->

    <!-- START News -->
    <section class="section news" id="berita">
        <div class="bg-shape"></div>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="heading">Berita terkini</h3>
                        <p class="text-muted"> Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div><!-- End col -->
                <div class="col-lg-4 col-md-6">
                    <span class="news-bg"></span>
                    <div class="card news-box border-light h-100 py-5 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem, ipsum dolor.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$10 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-4 pb-0" style="height: 10rem;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis amet quo esse eligendi quisquam suscipit deserunt eum exercitationem!</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card news-box border-light h-100 py-5 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem ipsum dolor sit amet.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$30 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-4 pb-0" style="height: 10rem;">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi quisquam error quae.</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- col end -->
                <div class="col-lg-4 col-md-6">
                    <div class="card news-box border-light h-100 py-5 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem, ipsum.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$39 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-4 pb-0" style="height: 10rem;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- col end -->
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-dark" href="{{ route('news') }}">Lihat Berita Lainnya <i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div><!--end col-->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>
    <!-- END News -->

    <!-- START FOOTER -->
    @include('landing.template.footer')
    <!-- END FOOTER -->

    <!-- START JS -->
    @include('landing.template.js')
    <!-- END JS -->

</body>

</html>