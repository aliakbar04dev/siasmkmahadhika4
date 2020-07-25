@extends('layouts.master')
@section('content')

<section class="content-header">
    <h1>
        Edit Data
        <small>Penilaian Raport</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Penilaian Raport</a></li>
        <li class="active">Penilaian Raport Siswa/Siswi</li>
    </ol>
</section>
<section class="content">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">
                Form Edit Data
            </h3>
            <div class="box-tools pull-right">
            </div>
        </div>
        <div class="box-body">

            <form action="/guru/proseseditraport" method="POST" class="form-horizontal">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $dataRaport->id }}">
                <input type="hidden" name="data_kelas_id" id="data_kelas_id" value="{{ $dataRaport->data_kelas_id }}">
                <input type="hidden" name="data_absen_id" id="data_absen_id" value="{{ $dataRaport->data_absen_id }}">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"
                            value="{{ $dataRaport->detail_siswa['nama_siswa'] }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>U.Harian</label>
                        <input type="number" class="form-control" id="ulangan_harian" name="ulangan_harian"
                            value="{{ $dataRaport->ulangan_harian }}">
                    </div>
                    <div class="form-group">
                        <label>Tugas</label>
                        <input type="number" class="form-control" id="tugas" name="tugas"
                            value="{{ $dataRaport->tugas }}">
                    </div>
                    <div class="form-group">
                        <label>UTS</label>
                        <input type="number" class="form-control" id="uts" name="uts" value="{{ $dataRaport->uts }}">
                    </div>
                    <div class="form-group">
                        <label>UAS</label>
                        <input type="number" class="form-control" id="uas" name="uas" value="{{ $dataRaport->uas }}">
                    </div>
                    <div class="form-group">
                        <label>Rata-rata</label>
                        <input type="number" class="form-control" value="{{ $dataRaport->rata }}" readonly>
                    </div>
                    <a href="/guru/raport" class="btn btn-danger btn-sm" style="margin-left: 230px;">Kembali</a>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </div>
             
            </form>
        </div>


    </div>
    </div>
</section>
@endsection
