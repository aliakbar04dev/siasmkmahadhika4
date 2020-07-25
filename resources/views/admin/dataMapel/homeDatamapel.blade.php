@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Tabel Mata Pelajaran
                <small>Master Data</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Mata Pelajaran</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('datamapel.viewtambah') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Mata Pelajaran</a>
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
              
        
                    <table id="TabelDataMapel" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Mata Pelajaran</center></th>
                                <th><center>Guru Yang Mengajar</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataMapel as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->nama_mapel }}</center></td>
                                <td><center><a href="/admin/detailguru/{{$item->data_guru_id}}" class="btn btn-sm btn-default" data-toggle="tooltip" title="Detail Guru Yang Mengajar">{{ $item->data_guru->nama_guru }}</a></center></td>
                                <td><center>
                                    <a href="/admin/detailmapel/{{$item->id}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Lihat Detail" style="color:white" ><i class="fa fa-eye"></i></a>
                                    <a href="/admin/vieweditmapel/{{$item->id}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update" style="color:white"><i class="fa fa-pencil"></i></a>
                                    <a href="/admin/hapusmapel/{{$item->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" style="color:white" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
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
        $('#TabelDataMapel').DataTable({
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