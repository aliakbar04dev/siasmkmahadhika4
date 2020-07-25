@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Input Data
                <small>Kehadiran</small>
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
                        Form Input Data
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/guru/absen" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/guru/prosesaddabsen" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataKehadiran->id }}">
                        <input type="hidden" name="data_kelas_id" id="data_kelas_id" value="{{ $dataKehadiran->data_kelas_id }}">
                      
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataKehadiran->nama_siswa }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="col-sm-10">
                                    <label>Sakit</label>
                                    <input type="number" class="form-control" id="sakit" name="sakit" required>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="col-sm-10">
                                    <label>Izin</label>
                                    <input type="number" class="form-control" id="izin" name="izin" required>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <div class="col-sm-10">
                                    <label>Alpha</label>
                                    <input type="number" class="form-control" id="alpha" name="alpha" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;Save</i></button>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






