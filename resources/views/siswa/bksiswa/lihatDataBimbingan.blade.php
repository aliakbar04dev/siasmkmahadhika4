@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Detail Data
                <small>Bimbingan Konseling</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Bimbingan Konseling</a></li>
                <li class="active">Bimbingan Konseling Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Detail Data
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/siswa/bimbingan" class="btn btn-danger btn-sm">Back To Daftar Bimbingan Konseling</a>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/siswa/proseseditbimbingan" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataBksiswa->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Nama Siswa/Siswi</label>
                                    <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" id="nm_kelas" name="nm_kelas" value="{{ $dataBksiswa->nm_kelas }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Masalah</label>
                                    <textarea type="text" class="form-control" id="keluhan" name="keluhan" rows="15" readonly>{{ $dataBksiswa->keluhan }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-sm-10">
                                    <label>Solusi Dari Guru BK</label>
                                    <textarea type="text" class="form-control" id="respon" name="respon" rows="15" readonly>{{ $dataBksiswa->respon }}</textarea>
                                </div>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
               
            </div>
            
        </section>
        
@endsection





