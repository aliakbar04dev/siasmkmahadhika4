@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Daftar Data
                <small>Monitoring Kehadiran</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Kehadiran</a></li>
                <li class="active">Monitoring Kehadiran Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        @if ($bulan_ini == 9 || $bulan_ini == 10 || $bulan_ini == 11 || $bulan_ini == 12 || $bulan_ini == 1 || $bulan_ini == 2)
                        <td>Semester : Ganjil</td>
                        @else
                        <td>Semester : Genap</td>
                        @endif
                        &nbsp;
                        Tahun Ajaran : {{ $tahunkemaren }}/{{ $tahun }}
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
                                <th colspan="3"><center></center></th>
                                <th colspan="3"><center>Kehadiran</center></th>
                                <th colspan="1"><center></center></th>
                            </tr>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Siswa/Siswi</center></th>
                                <th><center>Kelas</center></th>
                                <th><center>S</center></th>
                                <th><center>I</center></th>
                                <th><center>A</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataKehadiran as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->nama_siswa }}</center></td>
                                <td><center>{{ $item->data_kelas['tingkatan'] }}-{{ $item->data_kelas['jurusan'] }}-{{ $item->data_kelas['nama_kelas'] }}</td>
                                    @if($item->detail_absen['sakit'] == "")
                                    <td> <center><a href="/guru/viewaddabsen/{{$item->id}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Input Kehadiran Siswa" style="color:white"><i class="fa fa-plus"></i></a></center></td>
                                    @else
                                    <td><center>{{ $item->detail_absen['sakit'] }}</center></td>
                                    @endif

                                    @if($item->detail_absen['izin'] == "")
                                    <td></td>
                                    @else
                                    <td><center>{{ $item->detail_absen['izin'] }}</center></td>
                                    @endif

                                    @if($item->detail_absen['alpha'] == "")
                                    <td></td>
                                    @else
                                    <td><center>{{ $item->detail_absen['alpha'] }}</center></td>
                                    @endif
                                 
                                    @if($item->detail_absen['id'] == "")
                                    <td></td>
                                    @else
                                    <td><center>
                                    <a href="/guru/vieweditabsen/{{$item->detail_absen['id']}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update Kehadiran" style="color:white"><i class="fa fa-edit"></i></a>
                                    <a href="/guru/proseshapusabsen/{{$item->detail_absen['id']}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Kehadiran" style="color:white" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
                                    </center>
                                    </td>
                                    @endif
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



