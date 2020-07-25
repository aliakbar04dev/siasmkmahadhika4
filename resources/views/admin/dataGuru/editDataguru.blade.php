@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Edit
                <small>Data Guru</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Guru</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-warning ">
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

                    <form action="/admin/prosesubah" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataGuru->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" id="nip" name="nip" value="{{ $dataGuru->nip }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Guru</label>
                                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $dataGuru->nama_guru }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="j_kelamin" id="j_kelamin">
                                        <option value="Laki-Laki" {{ $dataGuru->j_kelamin == 'Laki-Laki' ? 'selected' : '' }}> Laki-Laki </option>
                                        <option value="Perempuan" {{ $dataGuru->j_kelamin == 'Perempuan' ? 'selected' : '' }}> Perempuan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat">{{ $dataGuru->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Mulai Bekerja</label>
                                    <input type="date" class="form-control" id="mulai_kerja" name="mulai_kerja" value="{{ $dataGuru->mulai_kerja }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Lulusan</label>
                                    <select class="form-control" name="lulusan" id="lulusan">
                                        <option value="Strata 2" {{ $dataGuru->lulusan == 'Strata 2' ? 'selected' : '' }}> Strata 2 </option>
                                        <option value="Strata 1" {{ $dataGuru->lulusan == 'Strata 1' ? 'selected' : '' }}> Strata 1 </option>
                                        <option value="Diploma 4" {{ $dataGuru->lulusan == 'Diploma 4' ? 'selected' : '' }}> Diploma 4 </option>
                                        <option value="Diploma 3" {{ $dataGuru->lulusan == 'Diploma 3' ? 'selected' : '' }}> Diploma 3 </option>
                                        <option value="SLTA" {{ $dataGuru->lulusan == 'SLTA' ? 'selected' : '' }}> SLTA </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tahun Lulus</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $dataGuru->tahun }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Tugas Lain </label>
                                    <input type="text" class="form-control" id="tugas_lain" name="tugas_lain" value="{{ $dataGuru->tugas_lain }}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil">&nbsp;Ubah</i></button>
                        <a href="/admin/dataguru" class="btn btn-danger"><i class="fa fa-undo">&nbsp;Kembali</i></a>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection





