@extends('dashboard.layout')
@section('title', 'Dashboard Anggota')
@section('content')
<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    {{-- <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                        data-feather="toggle-right"></i></span></span>Dashboard Anggota</h4>
    </div> --}}
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="hk-row">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-500">Users</span>
                                </div>
                                <div>
                                    <span class="text-success font-14 font-weight-500">+10%</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">36.1K</span>
                                <small class="d-block">172,458 Target Users</small>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-500">Campaign
                                        Leads</span>
                                </div>
                                <div>
                                    <span class="text-success font-14 font-weight-500">+12.5%</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5"><span
                                        class="counter-anim">168,856</span></span>
                                <small class="d-block">472,458 Targeted</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-500">New
                                        Contacts</span>
                                </div>
                                <div>
                                    <span class="text-warning font-14 font-weight-500">-2.8%</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">73</span>
                                <small class="d-block">100 Targeted</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-500">Win/Loss
                                        Ratio</span>
                                </div>
                                <div>
                                    <span class="text-danger font-14 font-weight-500">-75%</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">48:65</span>
                                <small class="d-block">42:32 Targeted</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hk-row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body pa-0">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck4">
                                                        <label class="custom-control-label" for="customCheck4">Lead
                                                            Title</label>
                                                    </div>
                                                </th>
                                                <th>Sales</th>
                                                <th>Company</th>
                                                <th>Date Created</th>
                                                <th>Lead Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck41" checked="">
                                                        <label class="custom-control-label" for="customCheck41"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$2000</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-primary rounded-circle"><span
                                                                        class="initial-wrap"><span>A</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">American Express</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    22/10/2018
                                                </td>
                                                <td><span class="badge badge-soft-primary">On track</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck42">
                                                        <label class="custom-control-label" for="customCheck42"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$1600</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-danger rounded-circle"><span
                                                                        class="initial-wrap"><span>M</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">Exxon Mobil</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    15/09/2018
                                                </td>
                                                <td><span class="badge badge-soft-primary">On track</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck43">
                                                        <label class="custom-control-label" for="customCheck43"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$1265</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-teal rounded-circle"><span
                                                                        class="initial-wrap"><span>B</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">Big Blackship</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    30/08/2018
                                                </td>
                                                <td><span class="badge badge-soft-danger">Behind</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck44">
                                                        <label class="custom-control-label" for="customCheck44"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$4562</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-indigo rounded-circle"><span
                                                                        class="initial-wrap"><span>F</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">Folkswagan</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    14/03/2018
                                                </td>
                                                <td><span class="badge badge-soft-purple">Negotiation</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck45">
                                                        <label class="custom-control-label" for="customCheck45"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$5012</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-purple rounded-circle"><span
                                                                        class="initial-wrap"><span>N</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">Novotel</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    21/02/2018
                                                </td>
                                                <td><span class="badge badge-soft-orange">Offer Made</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-primary">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck46">
                                                        <label class="custom-control-label" for="customCheck46"><span
                                                                class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                    </div>
                                                </td>
                                                <td>$1245</td>
                                                <td>
                                                    <div class="media align-items-center">
                                                        <div class="media-img-wrap d-flex mr-10">
                                                            <div class="avatar avatar-xs">
                                                                <span
                                                                    class="avatar-text avatar-text-pink rounded-circle"><span
                                                                        class="initial-wrap"><span>D</span></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="d-block">Displaypic</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    3/02/2018
                                                </td>
                                                <td><span class="badge badge-soft-orange">Offer Made</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->
@endsection