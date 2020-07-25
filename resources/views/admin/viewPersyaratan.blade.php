@extends('layouts.master')
@section('content')

<section class="content-header">

    <h1>
        Daftar Persyaratan
        <small>Beasiswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Beasiswa</a></li>
        <li class="active">Daftar Persyaratan</li>
    </ol>

</section>
<section class="content">
    <div class="box box-primary">

                        @role('admin|kepala_sekolah')

        <div class="box-header with-border">
            <h1 class="box-title">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalPersyaratan"><i class="fa fa-plus"></i>&nbsp; Tambah Persyaratan</a>

                        @else

                <div class="box-header with-border text-center">
                    <h3 class="box-title text-center">
                        <b>--- RINCIAN PERSYARATAN BEASISWA ---</b>
                        @endrole

                    </h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="color: white;">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove" style="color: white;">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Please check the form below for errors
                    </div>
                    @endif

                    <div class="table-responsive">

                        @role('admin|kepala_sekolah')

                        <table id="TabelPersyaratanBeasiswa" class="table table-striped table-bordered dt-responsive display nowrap" style="width:100%">
                            <thead>
                                <tr class="bg-primary">
                                    <th style="width:2%">
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Persyaratan</center>
                                    </th>
                                    @role('admin|kepala_sekolah')
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPersyaratan as $item)
                                <tr>
                                    <td>
                                        <center>{{ $loop->iteration }}</center>
                                    </td>
                                    <td>
                                        <center>{{ $item->persyaratan }}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="/editsyarat/{{$item->id}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update" style="color:white"><i class="fa fa-pencil"></i></a>
                                            <a href="/hapussyarat/{{$item->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" style="color:white" onclick="return confirm('Anda Yakin Ingin  Menghapus Data Ini ?')"><i class="fa fa-trash"></i></a>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endrole

                        @role('siswa')
                        <table id="TabelPersyaratanBeasiswa" class="table" style="width:100%">
                            <tbody>
                                @foreach ($dataPersyaratan as $item)
                                <tr>
                                    <td style="width: 2%">{{ $loop->iteration }}.</td>
                                    <td style="width: 98%">{{ $item->persyaratan }}</td>
                                    @role('admin|kepala_sekolah')
                                    <td>
                                        <a href="/admin/vieweditguru/{{$item->id}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update" style="color:white"><i class="fa fa-pencil"></i></a>
                                        <a href="/admin/hapus/{{$item->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" style="color:white"><i class="fa fa-trash"></i></a>
                                    </td>
                                    @endrole
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endrole


                        <!-- MODAL TAMBAH MENU -->
                        <div class="modal fade" id="modalPersyaratan" tabindex="-1" role="dialog" aria-labelledby="modalTambahPersyaratan" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-green">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h2 class="modal-title"><b>Form Persyaratan Beasiswa</b></h2>
                                    </div>
                                    <form action="{{ route('proses_add_syarat') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="8" cols="80" id="persyaratan" name="persyaratan" placeholder="Persyaratan Beasiswa..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                                Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        //DATATABLE
        $('#TabelPersyaratanBeasiswa').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true

        });

    });
</script>
@endsection