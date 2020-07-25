@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Daftar Data
                <small>Keaktifan Siswa/Siswi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Keaktifan</a></li>
                <li class="active">Keaktifan Kehadiran Siswa/Siswi</li>
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
                    <table id="TabelDataSiswa" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th colspan="3"><center></center></th>
                                <th colspan="2"><center>Keaktifan Siswa</center></th>
                                <th colspan="1"><center></center></th>
                            </tr>
                            <tr class="bg-primary">
                                <th><center>No</center></th>
                                <th><center>Nama Siswa/Siswi</center></th>
                                <th><center>Kelas</center></th>
                                <th><center>Nama Ekskul</center></th>
                                <th><center>Keterangan</center></th>
                                <th><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataEkskul as $item)
                            <tr>
                                <td><center>{{ $loop->iteration }}</center></td>
                                <td><center>{{ $item->nama_siswa }}</center></td>
                                <td><center>{{ $item->data_kelas['tingkatan'] }}-{{ $item->data_kelas['jurusan'] }}-{{ $item->data_kelas['nama_kelas'] }}</td>
                                    @if($item->detail_ekskul['nm_ekskul'] == "")
                                    <td><center><a href="/guru/viewaddekskul/{{$item->id}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Input Ekskul Siswa/Siswi" style="color:white"><i class="fa fa-plus"></i></a></center></td>
                                    @else
                                    <td><center>{{ $item->detail_ekskul['nm_ekskul'] }}</center></td>
                                    @endif

                                    @if($item->detail_ekskul['ket_ekskul'] == "")
                                    <td><center></center></td>
                                    @else
                                    <td><center>{{ $item->detail_ekskul['ket_ekskul'] }}</center></td>
                                    @endif
                                    
                                    @if($item->detail_ekskul['id'] == "")
                                    <td></td>
                                    @else
                                    <td><center>
                                    <a href="/guru/vieweditekskul/{{$item->detail_ekskul['id']}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Update Ekskul" style="color:white"><i class="fa fa-edit"></i></a>
                                    <a href="/guru/proseshapusekskul/{{$item->detail_ekskul['id']}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Ekskul" style="color:white" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i></a>
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



