<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.template.head')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- Start Navbar -->
    @include('landing.template.navbar')
    <!-- End Navbar -->

    <!-- start News -->
    <section class="section news" id="berita">
        <div class="bg-shape"></div>
        <div class="container">
            <div class="row gy-5 mt-1 justify-content-center">
                @include('landing.template.urlpage')
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="heading">Berita Koperasi JMB Pusat</h3>
                        <p class="text-muted"> Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div><!-- End col -->
                <div class="col-lg-4 col-md-6">
                    <span class="news-bg"></span>
                    <div class="card news-box border-light h-100 py-3 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem, ipsum dolor.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$10 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-3 pb-0" style="height: 8rem;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis amet quo esse eligendi quisquam suscipit deserunt eum exercitationem!</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card news-box border-light h-100 py-3 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem ipsum dolor sit amet.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$30 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-3 pb-0" style="height: 8rem;">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi quisquam error quae.</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- col end -->
                <div class="col-lg-4 col-md-6">
                    <div class="card news-box border-light h-100 py-3 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem, ipsum.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$39 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-3 pb-0" style="height: 8rem;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <span class="news-bg"></span>
                    <div class="card news-box border-light h-100 py-3 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem, ipsum dolor.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$10 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-3 pb-0" style="height: 8rem;">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis amet quo esse eligendi quisquam suscipit deserunt eum exercitationem!</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-6">
                    <div class="card news-box border-light h-100 py-3 mx-1">
                        <div class="pb-4 text-center border-bottom">
                            <h6 class="text-primary">Lorem ipsum dolor sit amet.</h6>
                            <!-- <h1 class="mb-0 pt-2 fw-bold">$30 <sub class="fs-14 fw-normal text-muted">/-Monthly</sub></h1> -->
                            <img src="{{ asset('landing/images/about-2.png') }}" class="img-thumbnail mt-2" style="width: 320px; height:auto;" alt="">
                        </div>
                        <div class="p-3 pb-0" style="height: 8rem;">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi quisquam error quae.</p>
                        </div>
                        <div class="mx-auto">
                            <a href="javascript:void(0)" class="btn btn-outline-dark">Read</a>
                        </div>
                    </div><!-- End card -->
                </div>
                <!-- col end -->
            </div><!-- End row -->
        </div><!-- End container -->
    </section>
    <!--  end News  -->

    <!-- START FOOTER -->
    @include('landing.template.footer')
    <!-- END FOOTER -->

    <!-- START JS -->
    @include('landing.template.js')
    <!-- END JS -->

</body>

</html>