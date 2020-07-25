@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Update Data
                <small>Kehadiran</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Kehadiran</a></li>
                <li class="active">Monitoring Kehadiran Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Update Data
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/guru/absen" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/guru/proseseditabsen" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataKehadiran->id }}">
                        <input type="hidden" name="data_kelas_id" id="data_kelas_id" value="{{ $dataKehadiran->data_kelas_id }}">
                        <input type="hidden" name="data_siswa_id" id="data_siswa_id" value="{{ $dataKehadiran->data_siswa_id }}">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="col-sm-10">
                                    <label>Semester</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="Ganjil" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-sm-10">
                                    <label>Tahun Ajaran</label>
                                    <input type="text" class="form-control" value="{{ $tahunkemaren }}/{{ $tahun }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-sm-10">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataKehadiran->detail_siswa['nama_siswa'] }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-sm-10">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataKehadiran->data_kelas['tingkatan'] }}-{{ $dataKehadiran->data_kelas['jurusan'] }}-{{ $dataKehadiran->data_kelas['nama_kelas'] }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col-sm-10">
                                    <label>Sakit</label>
                                    <input type="number" class="form-control" id="sakit" name="sakit" value="{{ $dataKehadiran->sakit }}" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col-sm-10">
                                    <label>Izin</label>
                                    <input type="number" class="form-control" id="izin" name="izin" value="{{ $dataKehadiran->izin }}" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="col-sm-10">
                                    <label>Alpha</label>
                                    <input type="number" class="form-control" id="alpha" name="alpha" value="{{ $dataKehadiran->alpha }}" required>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-warning"><i class="fa fa-edit">&nbsp;Update</i></button>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






