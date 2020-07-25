@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Tambah
                <small>Data Kelas</small>
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

                    <form action="/admin/prosesaddkelas" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tingkatan</label>
                                    <select class="form-control" name="tingkatan" id="tingkatan" required>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Jurusan</label>
                                    <select class="form-control" name="jurusan" id="jurusan" required>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                        <option value="Multimedia">Multimedia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Urutan Kelas</label>
                                    <input type="number" class="form-control" placeholder="Harus Angka" id="nama_kelas" name="nama_kelas" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send">&nbsp;Kirim</i></button>
                        <a href="/admin/datakelas" class="btn btn-danger"><i class="fa fa-undo">&nbsp;Kembali</i></a>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






