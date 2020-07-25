@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Input Data
                <small>Keaktifan Siswa/Siswi</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Keaktifan</a></li>
                <li class="active">Keaktifan Siswa/Siswi</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Form Input Data                   
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/guru/ekskul" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/guru/prosesaddekskul" method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $dataEkskul->id }}">
                        <input type="hidden" name="data_kelas_id" id="data_kelas_id" value="{{ $dataEkskul->data_kelas_id }}">
                      
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Nama Siswa/Siswi</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $dataEkskul->nama_siswa }}" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Pilihan Ekskul</label>
                                    <select class="form-control" name="nm_ekskul" id="nm_ekskul" required>
                                        <option value="OSIS">OSIS</option>
                                        <option value="PASKIBRA">PASKIBRA</option>
                                        <option value="PRAMUKA">PRAMUKA</option>
                                        <option value="ROHIS">ROHIS</option>
                                        <option value="ROBOTIK">ROBOTIK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="col-sm-10">
                                    <label>Keterangan Ekskul</label>
                                    <textarea type="text" class="form-control" id="ket_ekskul" name="ket_ekskul" rows="10"></textarea>
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






