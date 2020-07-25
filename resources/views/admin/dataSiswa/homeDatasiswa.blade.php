@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Tabel Siswa/Siswi
                <small>Master Data</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('datasiswa.viewtambah') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Siswa/Siswi</a>
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
              
        
                    <table id="TabelDataSiswa" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Siswa/Siswi Ajah</center></th>
                                <th><center>Kelas</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataSiswa as $item)
                            <tr style="width:100%">
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->nama_siswa }}</center></td>
                                <td><center><a href="/admin/detailkelas/{{$item->data_kelas_id}}" class="btn btn-sm btn-default" data-toggle="tooltip" title="Detail Kelas">{{ $item->data_kelas->tingkatan }}-{{ $item->data_kelas->jurusan }}-{{ $item->data_kelas->nama_kelas }}</a></center></td>
                                <td><center>
                                    <a href="/admin/detailsiswa/{{$item->id}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Detail Profile Siswa/Siswi" style="color:white" ><i class="fa fa-eye"></i></a>
                                    <a href="/admin/vieweditsiswa/{{$item->id}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update Profile Siswa/Siswi" style="color:white"><i class="fa fa-pencil"></i></a>
                                    <a href="/admin/hapussiswa/{{$item->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" style="color:white" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
                                </center></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@endsection

@section('js')
<script>
    $(document).ready( function (){
        //DATATABLE
        $('#TabelDataSiswa').DataTable({
            fixedHeader: {
                header: true,
                },
              
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



