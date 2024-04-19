@extends('dashboard.layout')
@section('title', 'Master Role')
@section('content')
<div class="container-fluid mt-30">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                        data-feather="hash"></i></span></span>Master Role</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                        <h5 class="hk-sec-title">Tabel Data Role</h5>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a href="" data-toggle="modal" data-target="#roleAdd"
                            class="btn btn-blue btn-wth-icon btn-rounded icon-right"><span class="btn-text">Tambah
                                Role</span> <span class="icon-label"><span class="feather-icon"><i
                                        data-feather="plus-circle"></i></span> </span>
                        </a>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-md-12">
                        @if (session('message'))
                        <div class="alert alert-inv alert-inv-{{session('color')}} alert-wth-icon alert-dismissible fade show"
                            role="alert">
                            <span class="alert-icon-wrap"><i class="zmdi zmdi-{{session('icon')}}"></i></span>
                            {{session('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="datable_1" class="table table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $r)
                                    <tr>
                                        <td>{{$r->id}}</td>
                                        <td>{{$r->nama_role}}</td>
                                        <td>
                                            <button class="btn btn-icon btn-yellow btn-icon-style-1 mr-1"><span
                                                    class="btn-icon-wrap" data-toggle="modal"
                                                    data-target="#roleEdit{{$r->id}}"><i
                                                        class="fa fa-pencil text-dark"></i></span>
                                            </button>
                                            <button class="btn btn-icon btn-red btn-icon-style-1"><span
                                                    class="btn-icon-wrap" data-toggle="modal"
                                                    data-target="#roleDelete{{$r->id}}"><i
                                                        class="fa fa-trash text-white"></i></span>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


{{-- Modal Add Role --}}
<div class="modal fade" id="roleAdd" tabindex="-1" role="dialog" aria-labelledby="roleAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.master.role.add.do')}}" class="needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_role">Nama Role <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_role') is-invalid @enderror" id="nama_role"
                            name="nama_role" value="{{old('nama_role')}}" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- Modal Edit role --}}
@foreach ($roles as $r)
<div class="modal fade" id="roleEdit{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="roleEdit{{$r->id}}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.master.role.edit.do', ['id'=> $r->id])}}"
                    class="needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_role">Nama Role <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_role') is-invalid @enderror" id="nama_role"
                            name="nama_role" value="{{$r->nama_role}}" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


{{-- Modal Delete Unit --}}
@foreach ($roles as $r)
<div class="modal fade" id="roleDelete{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="unitDelete{{$r->id}}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body py-30 px-30">
                <div class="row d-flex justify-content-center mb-10">
                    <h4>Hapus Data</h4>
                </div>
                <div class="row d-flex justify-content-center text-center mb-20">
                    <p>Anda Yakin Ingin Menghapus Data ini ? <br> <strong>Jika anda menghapus data Role ini maka,
                            data Anggota yang berkaitan dengan role ini akan terhapus.</strong></p>
                </div>
                <div class="row d-flex justify-content-center text-center">
                    <button type="button" class="btn btn-dark mr-10" data-dismiss="modal" aria-label="Close">
                        Kembali
                    </button>
                    <a href="{{route('admin.master.role.delete.do', ['id'=> $r->id])}}" class="btn btn-red">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('jsPage')
<script>
    $(document).ready(function () {
        $('#datable_1').DataTable({
            // dom: 'Bfrtip',
            responsive: true,
            autoWidth: false,
            language: { search: "",
            searchPlaceholder: "Search",
            sLengthMenu: "_MENU_items",
            scroller: true,
            scrollerY:300,
            // buttons: [
            // 	'copy', 'csv', 'excel', 'pdf', 'print'
            // ],
            }
        });
    });
</script>
@endsection