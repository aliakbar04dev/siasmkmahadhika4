@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Tambah Data
                <small>Bimbingan Konseling</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Bimbingan Konseling</a></li>
                <li class="active">Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Tambah Data
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/siswa/bimbingan" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/siswa/prosesaddbimbingan" method="POST" class="form-horizontal">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Nama Siswa/Siswi</label>
                                    <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" id="nm_kelas" name="nm_kelas"  requied>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Masalah</label>
                                    <textarea type="text" class="form-control" id="keluhan" name="keluhan" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;Simpan</i></button>
                    </form>
                </div>
             
                
                </div>
            </div>
        </section>
@endsection






