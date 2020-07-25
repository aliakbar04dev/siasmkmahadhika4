@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Daftar Data
                <small>Bimbingan Konseling</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Bimbingan Konseling</a></li>
                <li class="active">Bimbingan Konseling (Guru)</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        @if ($bulan_ini == 9 || $bulan_ini == 10 || $bulan_ini == 11 || $bulan_ini == 12 || $bulan_ini == 1 || $bulan_ini == 2)
                        <td>Semester : Ganjil.</td>
                        @else
                        <td>Semester : Genap.</td>
                        @endif
                        &nbsp;
                        Tahun Ajaran : {{ $tahunkemaren }}/{{ $tahun }}.
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
              
        
                    <table id="TabelDataBKguru" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Siswa</center></th>
                                <th><center>Masalah</center></th>
                                <th><center>Solusi</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataBkguru as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->nm_siswa }}</center></td>
                                <td><center>{{ $item->keluhan }}</center></td>
                                <td><center>{{ $item->respon }}</center></td>
                                <td><center>
                                    <a href="/guru/detailbimbingan/{{$item->id}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Lihat Detail" style="color:white" ><i class="fa fa-eye"></i></a>

                                    @if ($item->respon == !null)
                                        
                                    @else
                                    <a href="/guru/vieweditbimbinganguru/{{$item->id}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Input Solusi" style="color:white"><i class="fa fa-plus"></i></a>
                                    @endif
                                  
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
        $('#TabelDataBKguru').DataTable({
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



