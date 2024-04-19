<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
{{-- <title>@yield('title') | Koperasi JMB Pusat</title> --}}
@if (Route::currentRouteNamed('login'))
<title>Login | Koperasi JMB Pusat</title>
@else
<title>@yield('title') | Koperasi JMB Pusat</title>
@endif
<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('landing/images/favicon.ico')}}">
<link rel="icon" href="{{asset('landing/iamges/favicon.ico')}}" type="image/x-icon">

<!-- vector map CSS -->
<link href="{{ asset('dashboard/vendors/vectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />

<!-- Toggles CSS -->
<link href="{{ asset('dashboard/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('dashboard/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet"
    type="text/css">

<!-- Toastr CSS -->
<link href="{{ asset('dashboard/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet"
    type="text/css">

<!-- Data Table CSS -->
<link href="{{asset('dashboard/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet"
    type="text/css" />
<link href="{{asset('dashboard/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}"
    rel="stylesheet" type="text/css" />

<!-- sweetalert -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('dashboard/dist/css/style.css') }}" rel="stylesheet" type="text/css">