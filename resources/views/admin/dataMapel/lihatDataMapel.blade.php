@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Lihat Detail
                <small>Data Mata Pelajaran</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Mata Pelajaran</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                      Detail Data Mata Pelajaran
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/admin/datamapel" class="btn btn-danger btn-sm">Back To Master Mapel</a>
                    </div>
                </div>
                <div class="box-body">
                   
                    <table style="width:100%" class="table table-striped">
                        <tr>
                            <th>Nama Mata Pelajaran</th>
                            <td>
                                <div>{{ $dataMapel->nama_mapel }}</div>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>
        </section>
@endsection





