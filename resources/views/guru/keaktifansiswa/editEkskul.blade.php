@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Update Data
                <small>Keaktifan Siswa/Siswi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Keaktifan</a></li>
                <li class="active">Keaktifan Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Update Data
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/guru/ekskul" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/guru/proseseditekskul" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataEkskul->id }}">
                        <input type="hidden" name="data_kelas_id" id="data_kelas_id" value="{{ $dataEkskul->data_kelas_id }}">
                        <input type="hidden" name="data_siswa_id" id="data_siswa_id" value="{{ $dataEkskul->data_siswa_id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Semester</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="Ganjil" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tahun Ajaran</label>
                                    <input type="text" class="form-control" value="{{ $tahunkemaren }}/{{ $tahun }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataEkskul->detail_siswa['nama_siswa'] }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataEkskul->data_kelas['tingkatan'] }}-{{ $dataEkskul->data_kelas['jurusan'] }}-{{ $dataEkskul->data_kelas['nama_kelas'] }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Ekskul</label>
                                    <select class="form-control" name="nm_ekskul" id="nm_ekskul">
                                        <option value="OSIS" {{ $dataEkskul->nm_ekskul == 'OSIS' ? 'selected' : '' }}> OSIS </option>
                                        <option value="PASKIBRA" {{ $dataEkskul->nm_ekskul == 'PASKIBRA' ? 'selected' : '' }}> PASKIBRA </option>
                                        <option value="PRAMUKA" {{ $dataEkskul->nm_ekskul == 'PRAMUKA' ? 'selected' : '' }}> PRAMUKA </option>
                                        <option value="ROHIS" {{ $dataEkskul->nm_ekskul == 'ROHIS' ? 'selected' : '' }}> ROHIS </option>
                                        <option value="ROBOTIK" {{ $dataEkskul->nm_ekskul == 'ROBOTIK' ? 'selected' : '' }}> ROBOTIK </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Keterangan Ekskul</label>
                                    <input type="text" class="form-control" id="ket_ekskul" name="ket_ekskul" value="{{ $dataEkskul->ket_ekskul }}" required>
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






