@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Edit
                <small>Data Siswa</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Siswa</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Edit Data
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

                    <form action="/admin/prosesubahsiswa" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataSiswa->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>No Induk</label>
                                    <input type="text" class="form-control" id="nis" name="nis" value="{{ $dataSiswa->nis }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>NISN</label>
                                    <input type="number" class="form-control" id="nisn" name="nisn" value="{{ $dataSiswa->nisn }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Siswa/Siswi</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataSiswa->nama_siswa }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="Laki-Laki" {{ $dataSiswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}> Laki-Laki </option>
                                        <option value="Perempuan" {{ $dataSiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}> Perempuan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $dataSiswa->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tgl Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $dataSiswa->tgl_lahir }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Agama</label>
                                    <select class="form-control" name="agama" id="agama">
                                        <option value="Islam" {{ $dataSiswa->agama == 'Islam' ? 'selected' : '' }}> Islam </option>
                                        <option value="Kristen Protestan" {{ $dataSiswa->agama == 'Kristen Protestan' ? 'selected' : '' }}> Kristen Protestan </option>
                                        <option value="Katolik" {{ $dataSiswa->agama == 'Katolik' ? 'selected' : '' }}> Katolik </option>
                                        <option value="Budha" {{ $dataSiswa->agama == 'Budha' ? 'selected' : '' }}> Budha </option>
                                        <option value="Hindu" {{ $dataSiswa->agama == 'Hindu' ? 'selected' : '' }}> Hindu </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" required>{{ $dataSiswa->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Ayah </label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{ $dataSiswa->nama_ayah }}">
                                </div>
                            </div>
                              <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Ibu </label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $dataSiswa->nama_ibu }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Pekerjaan Orang Tua </label>
                                    <input type="text" class="form-control" id="pekerjaan_ortu" name="pekerjaan_ortu" value="{{ $dataSiswa->pekerjaan_ortu }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning"><i class="fa fa-envelope">&nbsp;Update</i></button>
                        <a href="/admin/datasiswa" class="btn btn-danger"><i class="fa fa-undo">&nbsp;Kembali</i></a>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






