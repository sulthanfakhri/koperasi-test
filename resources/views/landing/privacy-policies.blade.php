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
                        <h3 class="heading">Kebijakan & Kerahasiaan Data</h3>
                        <p class="text-muted fs-17 mb-0">Koperasi Jasa Marga Bakti Kantor Pusat menghargai dan melindungi privasi data anggota. Dengan mengakses atau menggunakan layanan kami, Anda setuju dengan kebijakan ini.</p>
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
                                    <h6 class="text-uppercase">Infromasi yang Kami Kumpulkan</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Koperasi Jasa Marga Bakti Kantor Pusat dapat mengumpulkan informasi pribadi seperti nama, npp, unit kerja, ktp, npwp, alamat, nomor telepon, dan informasi keuangan untuk keperluan administrasi Koperasi Jasa Marga Bakti Kantor Pusat.</b></li>
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
                                    <h6 class="text-uppercase">Penggunaan Informasi</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Informasi pribadi hanya digunakan untuk keperluan internal Koperasi Jasa Marga Bakti Kantor Pusat dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan anggota.</li>
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
                                    <h6 class="text-uppercase">Keamanan Data</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Koperasi Jasa Marga Bakti Kantor Pusat mengambil langkah-langkah keamanan fisik dan digital untuk melindungi data pribadi anggota dari akses yang tidak sah atau pengungkapan.</li>
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
                                    <h6 class="text-uppercase">Akses dan Perubahan Data</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Anggota dapat meminta akses atau perubahan terhadap data pribadi mereka dengan menghubungi admin Koperasi Jasa Marga Bakti Kantor Pusat.</li>
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
                                    <h6 class="text-uppercase">Penghapusan Data</h6>
                                </div>
                                <ul class="text-muted" style="text-align:justify">
                                    <li>Data pribadi anggota yang tidak lagi diperlukan akan dihapus sesuai dengan kebijakan retensi yang berlaku.</li>
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
                                    <li><b>Kebijakan ini dapat diperbarui dari waktu ke waktu</b>. Perubahan signifikan akan diberitahukan kepada anggota.</li>
                                </ul>
                            </div>
                        </div><!-- End card-body -->
                    </div><!-- End card -->
                </div><!--  end col  -->
            </div><!--  end row  -->

        </div><!--  end container  -->

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <p class="text-muted fs-17 mb-0"><b>Untuk informasi lebih lanjut, silakan hubungi kami. Terima kasih atas kepercayaan Anda pada Koperasi Jasa Marga Bakti Kantor Pusat.</b></p>
                    </div>
                </div><!--  end col  -->
            </div><!--  end row  -->
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