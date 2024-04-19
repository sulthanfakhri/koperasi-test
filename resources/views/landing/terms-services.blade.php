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
    <section class="section" id="Syarat & Layanan">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-lg-5">
                        <h3 class="heading">Syarat & Layanan</h3>
                        <p class="text-muted fs-17 mb-0">In an ideal world this website wouldn’t exist, a client would acknowledge the importance design starts.</p>
                    </div>
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Eligibilitas Anggota</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Koperasi Jasa Marga Bakti Kantor Pusat, terbuka <b>hanya untuk karyawan aktif Jasa Marga dan atau anak perusahaannya;</b></li>
                                    <li>Calon anggota koperasi harus dapat membuktikan status kepegawaian yang sah, dalam hal ini berupa <b>ID Card/Name Tag</b>.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-4">
                    <img src="{{ asset('{{ asset('landing/images/about-2.png') }}') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-4">
                    <img src="{{ asset('{{ asset('landing/images/about-2.png') }}') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Keanggotaan</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Anggota <b>wajib mengisi formulir pendaftaran dan melunasi simpanan pokok</b> sesuai dengan ketentuan yang berlaku.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Simpanan</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Anggota diharuskan melakukan setoran rutin sesuai dengan kebijakan Koperasi Jasa Marga Bakti Kantor Pusat;</li>
                                    <li>Jumlah minimal setoran dan mekanisme penarikan simpanan telah ditentukan oleh Koperasi Jasa Marga Bakti Kantor Pusat.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Pinjaman</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Terdapat Pinjaman Koperasi dengan sistem Saldo Menurun, Flat 1 Tahun, Flat 2 Tahun; Dan Pinjaman Bank;</li>
                                    <li>Informasi terkait Pinjaman Koperasi dan Bank dengan Besaran pinjaman, bunga, dan jangka waktu pelunasan akan diinformasikan kepada anggota yang ingin melakukan peminjaman oleh karyawan Koperasi Jasa Marga Bakti Kantor Pusat.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Pengembalian Pinjaman</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Peminjam wajib melunasi pinjaman sesuai dengan jangka waktu yang telah disepakati;</li>
                                    <li>Keterlambatan pembayaran akan dikenakan denda sesuai dengan kebijakan Koperasi Jasa Marga Bakti kantor Pusat.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Bagi Hasil (SHU)</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li><b>Pembagian SHU akan dilakukan setelah memperhitungkan laba dan rugi</b> Koperasi Jasa Marga Bakti kantor Pusat;</li>
                                    <li>Besaran SHU akan <b>ditetapkan berdasarkan kontribusi</b> masing-masing anggota.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Pengelolaan Dana</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Koperasi Jasa Marga Bakti Kantor Pusat akan mengelola dana dengan transparansi dan profesionalisme untuk kepentingan anggota.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
                </div><!--  end col  -->
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Pengunduran Diri</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Anggota yang ingin mengundurkan diri <b>wajib mengisi dan mengajukan formulir</b> yang telah disediakan oleh Koperasi Jasa Marga Bakti Kantor Pusat;</li>
                                    <li>Jika anggota masih memiliki pinjaman melalui koperasi maka diwajibkan untuk tetap melunasi pinjamannya;</li>
                                    <li>Simpanan anggota yang mengundurkan diri akan dikembalikan sesuai dengan keinginan anggota.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
            </div><!--  end row  -->

            <div class="row my-4 align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="me-lg-5">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase">Perubahan Ketentuan</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Koperasi Jasa Marga Bakti Kantor Pusat <b>berhak untuk melakukan perubahan terhadap syarat dan layanan ini</b> dengan memberikan pemberitahuan kepada anggota.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
                <div class="col-lg-4">
                    <img src="{{ asset('landing/images/about-2.png') }}" class="img-fluid" alt="">
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