<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.template.head')
</head>

<body data-bs-target="#navbar" data-bs-offset="71">

    <!-- Start Navbar -->
    @include('landing.template.navbar')
    <!-- End Navbar -->

    <!-- Start contact -->
    <section class="section" id="kontak">
        <div class="container">
            <div class="row justify-content-center">
                @include('landing.template.urlpage')
                <div class="col-lg-6 mt-5">
                    <div class="text-center mb-5">
                        <h3 class="heading">Kontak Kami</h3>
                        <p class="text-muted mt-2">Untuk informasi lebih detail, hubungin kami lebih lanjut.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d351.58439601736995!2d106.87860384680499!3d-6.291081396731325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f29b6b4ec9d5%3A0xdc97d70174900659!2sPV5H%2BJCX%2C%20Jl%2C%20Duku%20VI%2C%20RT.8%2FRW.2%2C%20Dukuh%2C%20Kec.%20Kramat%20jati%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013550!5e0!3m2!1sen!2sid!4v1713259487940!5m2!1sen!2sid" class="w-100 shadow" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--end form-->
                </div>
                <!--end col-->
                <div class="col-lg-5">
                    <div class="contact-details mb-4 mb-lg-0">
                        <p class="mb-3"><i class="mdi mdi-email-outline align-middle fs-20 me-2"></i> <span class="fw-medium">jmbpusat@yahoo.co.id</span></p>
                        <p class="mb-3"><i class="mdi mdi-web align-middle fs-20 me-2"></i> <span class="fw-medium">koperasijmbpusat.com</span></p>
                        <p class="mb-3"><i class="mdi mdi-phone align-middle fs-20 me-2"></i> <span class="fw-medium">(021) - 87795737</span></p>
                        <p class="mb-3"><i class="mdi mdi-hospital-building fs-20 me-2"></i> <span class="fw-medium">9:00 AM - 5:00 PM</span></p>
                        <p class="mb-3"><i class="mdi mdi-map-marker-outline fs-20 me-2"></i> <span class="fw-medium">Jl. Dukuh VI RT 008/RW 02, Kel. Dukuh, Kec. Kramatjati, Jakarta Timur 13550, Indonesia.</span></p>
                    </div>
                    <!--end contact-details-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- End contect -->

    <!-- START FOOTER -->
    @include('landing.template.footer')
    <!-- END FOOTER -->

    <!-- START JS -->
    @include('landing.template.js')
    <!-- END JS -->

</body>

</html>