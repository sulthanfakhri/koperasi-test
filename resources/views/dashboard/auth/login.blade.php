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
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand align-items-center" href="#">
                    <img class="brand-img d-inline-block mr-5" height="50px"
                        src="{{asset('dashboard/img/headico.png')}}" alt="brand" />
                </a>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="item auth-cover-img overlay-wrap"
                            style="background-image:url({{asset('dashboard/img/bg.jpg')}});">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content text-start w-xxl-75 w-sm-90 w-xs-100">
                                    <h1 class="text-white mb-20">Selamat Datang di Aplikasi Simpan Pinjam
                                        Koperasi JMB Pusat.
                                    </h1>

                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>

                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form action="{{route('login.do')}}" class="needs-validation" novalidate method="POST">
                                    {{ csrf_field() }}
                                    <h1 class="display-4 mb-10 text-center">Login</h1>
                                    <p class="mb-30 text-center">Silahkan Login dengan Akun Anda!</p>
                                    @if (session('error'))
                                    <div class="alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show"
                                        role="alert">
                                        <span class="alert-icon-wrap"><i class="zmdi zmdi-block-alt"></i></span>
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <input class="form-control @error('npp') is-invalid @enderror" placeholder="NPP"
                                            type="text" name="npp" id="npp" autocomplete="off" placeholder="NPP"
                                            value="{{old('npp')}}" rerquired>
                                        @error('npp')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" type="password" name="password" id="password"
                                            value="{{old('password')}}">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <button class="btn btn-primary btn-block" type="submit">Login</button>

                                    <p class="text-center mt-4">Kembali ke <a href="{{route('index')}}"> Halaman Utama
                                        </a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    @include('dashboard.partials.assetJs')
    @yield('jsPage')
</body>

</html>