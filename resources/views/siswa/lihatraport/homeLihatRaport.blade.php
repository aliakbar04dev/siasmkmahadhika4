@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Daftar Nilai
                <small>Raport</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Raport</a></li>
                <li class="active">Lihat Raport Siswa/Siswi</li>
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
                    <div class="table-responsive">
                        <table id="TabelDataSiswa" class="table table-striped table-bordered dt-responsive display nowrap" style="width:100%" >
                            <thead>
                                <tr class="bg-primary">
                                    <th colspan="3"><center></center></th>
                                    <th colspan="5"><center>Nilai</center></th>
                                    <th colspan="3"><center>Kehadiran</center></th>
                                    <th colspan="2"><center>Keaktifan Siswa</center></th>
                                    <th colspan="1"><center></center></th>
                                </tr>
                                <tr class="bg-primary">
                                    <th colspan="1"><center>No</center></th>
                                    <th colspan="1"><center>Nama Siswa/Siswi</center></th>
                                    <th colspan="1"><center>Kelas</center></th>
                                    <th><center>Ulangan Harian</center></th>
                                    <th><center>Tugas</center></th>
                                    <th><center>UTS</center></th>
                                    <th><center>UAS</center></th>
                                    <th><center>Rata-Rata</center></th>
                                    <th><center>S</center></th>
                                    <th><center>I</center></th>
                                    <th><center>A</center></th>
                                    <th><center>EkstraKulikuler</center></th>
                                    <th style="width:50%"><center>Keterangan</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataRaportSiswa as $item)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $item->nama_siswa }}</center></td>
                                    <td><center>{{ $item->data_kelas['tingkatan'] }}-{{ $item->data_kelas['jurusan'] }}-{{ $item->data_kelas['nama_kelas'] }}</td>


                                        @if($item->detail_raport['ulangan_harian'] == "")
                                        <td><center><a href="/guru/viewaddraport/{{$item->id}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Input Nilai Raport Siswa/Siswi" style="color:white"><i class="fa fa-pencil"></i></a></center></td>
                                        @else
                                        <td><center>{{ $item->detail_raport['ulangan_harian'] }}</center></td>
                                        @endif
    

                                        @if($item->detail_raport['tugas'] == "")
                                        <td></td>
                                        @else
                                        <td><center>{{ $item->detail_raport['tugas'] }}</center></td>
                                        @endif
    

                                        @if($item->detail_raport['uts'] == "")
                                        <td></td>
                                        @else
                                        <td><center>{{ $item->detail_raport['uts'] }}</center></td>
                                        @endif


                                        @if($item->detail_raport['uas'] == "")
                                        <td></td>
                                        @else
                                        <td><center>{{ $item->detail_raport['uas'] }}</center></td>
                                        @endif


                                        <td><center>{{ number_format($item->detail_raport['rata'],2) }}</center></td>
                                        <td><center>{{ $item->detail_absen['sakit'] }}</center></td>
                                        <td><center>{{ $item->detail_absen['izin'] }}</center></td>
                                        <td><center>{{ $item->detail_absen['alpha'] }}</center></td>
                                        <td><center>{{ $item->detail_ekskul['nm_ekskul'] }}</center></td>
                                        <td><center>{{ $item->detail_ekskul['ket_ekskul'] }}</center></td>

                                        
                                        @if($item->detail_raport['id'] == "")
                                        <td></td>
                                        @else
                                        <td><center>
                                        <a href="/guru/prosescetakraport/{{$item->detail_raport['id']}}" target="_blank" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cetak Raport"><i class="fa fa-file-pdf-o"></i></a>
                                        </center>
                                        </td>
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
    $(document).ready( function (){
        //DATATABLE
        $('#TabelDataSiswa').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
            });
            
    });
</script>
@endsection



