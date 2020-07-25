@extends('layouts.master')
@section('content')

<section class="content-header">
    <h1>
        Daftar 
        <small>Beasiswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Beasiswa</a></li>
        <li class="active">Daftar Pemberitahuan Penerima Beasiswa</li>
    </ol>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                Pemberitahuan Penerima Beasiswa
            </h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
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
                <table id="TabelPersyaratanBeasiswa"
                    class="table table-striped table-bordered dt-responsive display nowrap" style="width:100%">
                    <thead>
                        <tr class="bg-primary">
                            <th style="width:2%">
                                <center>No</center>
                            </th>
                            <th>
                                <center>NIS</center>
                            </th>
                            <th>
                                <center>Nama Siswa/Siswi</center>
                            </th>
                            <th>
                                <center>Kelas</center>
                            </th>
                            <th>
                                <center>Status Beasiswa</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPersyaratan as $item)
                        <tr>
                            <td>
                                <center>{{ $loop->iteration }}</center>
                            </td>
                            <td>
                                <center>{{ $item->nis }}</center>
                            </td>
                            <td>
                                <center>{{ $item->nama_siswa }}</center>
                            </td>
                            <td>
                                <center>{{ $item->tingkatan }}-{{ $item->jurusan }}-{{ $item->nama_kelas }}</center>
                            </td>

                            @if ($item->status_beasiswa == '0')
                                <td><center> <span class="label label-warning">Proses Seleksi</span> </center></td>
                            @elseif ($item->status_beasiswa == '1')
                                <td><center> <span class="label label-success">Lolos Seleksi</span> </center></td>
                            @elseif ($item->status_beasiswa == '2')
                                <td><center> <span class="label label-danger">Tidak Lolos</span> </center></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        //DATATABLE
        $("#TabelPersyaratanBeasiswa").DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });

</script>
@endsection
