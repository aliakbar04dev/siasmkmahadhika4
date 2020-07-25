@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Tabel Kelas
                <small>Master Data</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Kelas</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <a href="{{ route('datakelas.viewtambah') }}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Tambah Kelas</a>
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
              
        
                    <table id="TabelDataKelas" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Kelas</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataKelas as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->tingkatan }}-{{ $item->jurusan }}-{{ $item->nama_kelas }}</center></td>
                                <td><center>
                                    <a href="/admin/detailkelas/{{$item->id}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Lihat Detail" style="color:white" ><i class="fa fa-eye"></i></a>
                                    <a href="/admin/vieweditkelas/{{$item->id}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update" style="color:white"><i class="fa fa-pencil"></i></a>
                                    <a href="/admin/hapuskelas/{{$item->id}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" style="color:white" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
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
        $('#TabelDataKelas').DataTable({
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



