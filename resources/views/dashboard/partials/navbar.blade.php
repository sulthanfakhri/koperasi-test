<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-dark bg-blue-light-1 fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i
            class="ion ion-ios-menu"></i></a>
    <a class="navbar-brand" href="{{route('index')}}">
        <img class="brand-img d-inline-block mr-5" height="40px" src="{{asset('dashboard/img/headico.png')}}"
            alt="brand" />
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{asset('dashboard/img/profil.jpeg')}}" alt="user"
                                class="avatar-img rounded-circle">
                        </div>
                    </div>
                    <div class="media-body">
                        <span>{{Auth::user()->nama}}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="{{route('logout.do')}}"><i
                        class="dropdown-icon zmdi zmdi-power"></i><span>Log
                        out</span></a>
            </div>
        </li>
    </ul>
</nav>

<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-dark bg-blue-dark-5">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            @if (Auth::user()->role->nama_role == 'superadmin')
            {{-- ====================================== MENU ADMIN ================================= --}}
            <ul class="navbar-nav flex-column">
                <li class="nav-item {{ Route::currentRouteNamed('admin.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <i class="ion ion-ios-pie"></i>
                        <span class="nav-link-text">Dashboard Admin</span>
                    </a>
                </li>

                <li class="nav-item {{ in_array(Route::currentRouteName(), ['admin.master.unit', 'admin.master.role', 'admin.master.jenis_anggota', 'admin.master.jenis_belanja', 'admin.master.jenis_simpanan']) ? 'active' : '' }}
                ">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#master_drp">
                        <i class="ion ion-ios-folder"></i>
                        <span class="nav-link-text">Master Data</span>
                    </a>
                    <ul id="master_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="">Master Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.master.jenis_anggota')}}">Master Jenis
                                        Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.master.unit')}}">Master Unit Kerja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.master.role')}}">Master Role</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.master.jenis_belanja')}}">Master
                                        Belanja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Master Pinjaman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.master.jenis_simpanan')}}">Master
                                        Simpanan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                        <i class="ion ion-md-american-football"></i>
                        <span class="nav-link-text">Authentication</span>
                    </a>
                    <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#signup_drp">
                                        Sign Up
                                    </a>
                                    <ul id="signup_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="signup.html">Cover</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="signup-simple.html">Simple</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#signin_drp">
                                        Login
                                    </a>
                                    <ul id="signin_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login.html">Cover</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login-simple.html">Simple</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                                        data-target="#recover_drp">
                                        Recover Password
                                    </a>
                                    <ul id="recover_drp" class="nav flex-column collapse collapse-level-2">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="forgot-password.html">Forgot
                                                        Password</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="reset-password.html">Reset
                                                        Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="lock-screen.html">Lock Screen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="404.html">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="maintenance.html">Maintenance</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                        <i class="ion ion-ios-copy"></i>
                        <span class="nav-link-text">Pages</span>
                    </a>
                    <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.html">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="invoice.html">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="activity.html">Activity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faq.html">Faq</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>



            {{-- ====================================== MENU CMS LANDING ============================= --}}
            <hr class="nav-separator">
            <div class="nav-header">
                <span>CMS LANDING PAGE</span>
                <span>CLP</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#Components_drp">
                        <i class="ion ion-ios-wallet"></i>
                        <span class="nav-link-text">Components</span>
                    </a>
                    <ul id="Components_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="alerts.html">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="avatar.html">Avatar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="badge.html">Badge</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cards.html">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="carousel.html">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="collapse.html">Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dropdowns.html">Dropdown</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="list-group.html">List Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="modal.html">Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nav.html">Nav</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="navbar.html">Navbar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nestable.html">Nestable</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pagination.html">Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="popovers.html">Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="progress.html">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                        <i class="ion ion-ios-filing"></i>
                        <span class="nav-link-text">Content</span>
                    </a>
                    <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="typography.html">Typography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="images.html">Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="media-object.html">Media Object</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                        <i class="ion ion-ios-construct"></i>
                        <span class="nav-link-text">Utilities</span>
                    </a>
                    <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="background.html">Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="border.html">Border</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="colors.html">Colors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="embeds.html">Embeds</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons.html">Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shadow.html">Shadow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sizing.html">Sizing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="spacing.html">Spacing</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#forms_drp">
                        <i class="ion ion-ios-list-box"></i>
                        <span class="nav-link-text">Forms</span>
                    </a>
                    <ul id="forms_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="form-element.html">Form Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="input-groups.html">Input Groups</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-layout.html">Form Layout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-mask.html">Form Mask</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-validation.html">Form Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file-upload.html">File Upload</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editor.html">Editor</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#tables_drp">
                        <i class="ion ion-ios-today"></i>
                        <span class="nav-link-text">Tables</span>
                    </a>
                    <ul id="tables_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="basic-table.html">Basic Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="data-table.html">Data Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="responsive-table.html">Responsive Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editable-table.html">Editable Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#charts_drp">
                        <i class="ion ion-ios-stats"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                    <ul id="charts_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="line-charts.html">Line Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="area-charts.html">Area Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="bar-charts.html">Bar Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pie-charts.html">Pie Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="realtime-charts.html">Realtime Chart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mini-charts.html">Mini Chart</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#maps_drp">
                        <i class="ion ion-ios-map"></i>
                        <span class="nav-link-text">Maps</span>
                    </a>
                    <ul id="maps_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="google-map.html">Google Map</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>



            @elseif (Auth::user()->role->nama_role == 'anggota')
            {{-- ====================================== MENU ANGGOTA ================================ --}}
            <ul class="navbar-nav flex-column">
                <li class="nav-item {{ Route::currentRouteNamed('anggota.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('anggota.index')}}">
                        <i class="ion ion-ios-keypad"></i>
                        <span class="nav-link-text">Dashboard Anggota</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                        <i class="ion ion-ios-apps"></i>
                        <span class="nav-link-text">Application</span>
                        {{-- <span class="badge badge-warning badge-pill">4</span> --}}
                    </a>
                    <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="chats.html">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="calendar.html">Calendar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="email.html">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file-manager.html">File Manager</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop">
</div>
<!-- /Vertical Nav -->