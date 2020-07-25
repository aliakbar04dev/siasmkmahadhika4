@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Detail
                <small>Master Data Guru</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Guru</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                      Detail Data Guru
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/admin/dataguru" class="btn btn-danger btn-sm">Back To Master Guru</a>
                    </div>
                </div>
                <div class="box-body">
                   
                    <table style="width:100%" class="table table-striped">
                        <tr>
                            <th>NIP</th>
                            <td id="nip">
                                <div>{{ $dataGuru->nip }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Guru</th>
                            <td id="nama_guru">
                                <div>{{ $dataGuru->nama_guru }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td id="j_kelamin">
                                <div>{{ $dataGuru->j_kelamin }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td id="alamat">
                                <div>{{ $dataGuru->alamat }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Mulai Bekerja</th>
                            <td id="mulai_kerja">
                                <div>{{ date('d F Y', strtotime($dataGuru->mulai_kerja)) }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Lulusan</th>
                            <td id="lulusan">
                                <div>{{ $dataGuru->lulusan }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Lulus Tahun</th>
                            <td id="tahun">
                                <div>{{ $dataGuru->tahun }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tugas Lain</th>
                            <td id="tugas_lain">
                                <div>{{ $dataGuru->tugas_lain }}</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                        Mata Pelajaran Yang Diajar
                        </h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped" style="width:100%;">
                       
                            <tbody>
                                @foreach ($dataGuru->data_mapel as $mapel)
                                <tr>
                                    <td>{{ $mapel->nama_mapel }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                     
                    </div>
                 
                    
                    </div>
                </div>
            </div>
            
        </section>
        
@endsection





