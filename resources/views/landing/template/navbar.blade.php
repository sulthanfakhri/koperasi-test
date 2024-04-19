<nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
    <div class="container">

        <!-- LOGO -->
        <a class="btn-primary mdi mdi-chevron-left me-3 rounded" style="font-size: 25px; height:35px; align-self:center;" onclick="history.back()"></a>

        <a class="navbar-brand text-uppercase" onclick="history.back()">
            <img src="{{ asset('landing/images/headico.png') }}" alt="" height="35">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" style="justify-content: end;" id="navbarCollapse">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 d-none d-lg-block">
                    <a class="btn btn-primary nav-btn" href="{{ route('login') }}">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>