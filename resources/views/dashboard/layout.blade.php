<!DOCTYPE html>
<!--
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    @include('dashboard.partials.header')
    @yield('cssPage')
</head>

<body>


    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">
        @include('dashboard.partials.navbar')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            @yield('content')

            <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>by <spann class="text-dark">Koperasi JMB Kantor Pusat</spann> © 2024</p>
                        </div>
                        {{-- <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#"
                                class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span
                                    class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div> --}}
                    </div>
                </footer>
            </div>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    @include('dashboard.partials.assetJs')
    @yield('jsPage')
    @yield('alert')
</body>

</html>