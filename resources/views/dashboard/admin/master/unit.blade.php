@extends('dashboard.layout')
@section('title', 'Master Unit')
@section('content')
{{-- <nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Element</li>
    </ol>
</nav> --}}
<div class="container-fluid mt-30">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                        data-feather="hash"></i></span></span>Master Unit Kerja</h4>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-start align-items-center">
                        <h5 class="hk-sec-title">Tabel Data Unit Kerja</h5>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a href="" data-toggle="modal" data-target="#unitAdd"
                            class="btn btn-blue btn-wth-icon btn-rounded icon-right"><span class="btn-text">Tambah
                                Unit</span> <span class="icon-label"><span class="feather-icon"><i
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
                                        <th>Nama Unit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($units as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->nama_unit}}</td>
                                        <td>
                                            <button class="btn btn-icon btn-yellow btn-icon-style-1 mr-1"><span
                                                    class="btn-icon-wrap" data-toggle="modal"
                                                    data-target="#unitEditModal{{$u->id}}"><i
                                                        class="fa fa-pencil text-dark"></i></span>
                                            </button>
                                            <button class="btn btn-icon btn-red btn-icon-style-1"><span
                                                    class="btn-icon-wrap" data-toggle="modal"
                                                    data-target="#unitDelete{{$u->id}}"><i
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

{{-- Modal Add Unit --}}
<div class="modal fade" id="unitAdd" tabindex="-1" role="dialog" aria-labelledby="unitAdd" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.master.unit.add.do')}}" class="needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_unit">Nama Unit Kerja <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_unit') is-invalid @enderror" id="nama_unit"
                            name="nama_unit" value="{{old('nama_unit')}}" autocomplete="off">
                        @error('nama_unit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- Modal Edit Unit --}}
@foreach ($units as $u)
<div class="modal fade" id="unitEditModal{{$u->id}}" tabindex="-1" role="dialog"
    aria-labelledby="unitEditModal{{$u->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.master.unit.edit.do', ['id'=> $u->id])}}"
                    class="needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_unit_edit">Nama Unit Kerja <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_unit_edit') is-invalid @enderror"
                            id="nama_unit_edit" name="nama_unit_edit" value="{{$u->nama_unit}}" autocomplete="off">
                        @error('nama_unit_edit')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


{{-- Modal Delete Unit --}}
@foreach ($units as $u)
<div class="modal fade" id="unitDelete{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="unitDelete{{$u->id}}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body py-30 px-30">
                <div class="row d-flex justify-content-center mb-10">
                    <h4>Hapus Data</h4>
                </div>
                <div class="row d-flex justify-content-center text-center mb-20">
                    <p>Anda Yakin Ingin Menghapus Data ini ? <br> <strong>Jika anda menghapus data unit kerja ini maka,
                            data Anggota yang berkaitan dengan unit ini akan terhapus.</strong></p>
                </div>
                <div class="row d-flex justify-content-center text-center">
                    <button type="button" class="btn btn-dark mr-10" data-dismiss="modal" aria-label="Close">
                        Kembali
                    </button>
                    <a href="{{route('admin.master.unit.delete.do', ['id'=> $u->id])}}" class="btn btn-red">Hapus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection


@section('jsPage')
<script>
    $(document).ready(function() {
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
    $('#datable_2').DataTable({ 
		autoWidth: false,
		lengthChange: false,
		"bPaginate": false,
		language: { search: "",searchPlaceholder: "Search" }
	});
	
	/*Export DataTable*/
	$('#datable_3').DataTable( {
		dom: 'Bfrtip',
		responsive: true,
		language: { search: "",searchPlaceholder: "Search" },
		"bPaginate": false,
		"info":     false,
		"bFilter":     false,
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		],
		"drawCallback": function () {
			$('.dt-buttons > .btn').addClass('btn-outline-light btn-sm');
		}
	} );
} );
</script>
@endsection