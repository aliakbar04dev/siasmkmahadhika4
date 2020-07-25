@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Detail Kelas <b>{{ $dataKelas->tingkatan }}-{{ $dataKelas->jurusan }}-{{ $dataKelas->nama_kelas }}</b>
                <small> Master Data Kelas</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Kelas</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                      Info Kelas
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/admin/datakelas" class="btn btn-danger btn-sm">Back To Master Kelas</a>
                    </div>
                </div>
                <div class="box-body">
                   
                    <table style="width:100%" class="table table-striped">
                        <tr>
                            <th>Nama Kelas</th>
                            <td>
                                <div>{{ $dataKelas->tingkatan }}-{{ $dataKelas->jurusan }}-{{ $dataKelas->nama_kelas }}</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
             
            </div>
            <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                        Daftar Siswa
                        </h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="tabel_siswa_kelas" class="table table-striped" style="width:100%;">
                            <thead>
                                <tr>
                                    <th><center>No</center></th>
                                    <th><center>NIS</center></th>
                                    <th><center>NISN</center></th>
                                    <th><center>Nama Siswa/Siswi</center></th>
                                </tr>
                            </thead>
                            <tbody style="width:100%">
                                @foreach ($dataKelas->data_siswa as $siswa)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $siswa->nis }}</center></td>
                                    <td><center>{{ $siswa->nisn }}</center></td>
                                    <td><center>{{ $siswa->nama_siswa }}</center></td>
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
    $(document).ready( function (){
        //DATATABLE
        $('#tabel_siswa_kelas').DataTable({
            fixedHeader: {
                header: true,
                },
                scrollY:        "300px",
                scrollX:        true,
                scrollCollapse: true,
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
        });
    });
</script>
@endsection





