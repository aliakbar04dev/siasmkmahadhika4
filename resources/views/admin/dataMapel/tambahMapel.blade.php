@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Tambah
                <small>Data Mata Pelajaran</small>
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
                        Form Tambah Data
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

                    <form action="/admin/prosesaddmapel" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Guru Pengajar</label>
                                    <select id="data_guru_id" name="data_guru_id" aria-controls="data_guru_id" class="form-control select2">
                                    @foreach ($dataGuru as $item)
                                        <option value={{ $item->id }}>{{ $item->nama_guru }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send">&nbsp;Kirim</i></button>
                        <a href="/admin/datamapel" class="btn btn-danger"><i class="fa fa-undo">&nbsp;Kembali</i></a>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






