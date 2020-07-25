@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Aksi Lihat Detail
                <small>Data Siswa</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Master Data</a></li>
                <li class="active">Data Guru</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                      Detail Data Siswa
                    </h3>
                    <div class="box-tools pull-right">
                        <a href="/admin/datasiswa" class="btn btn-danger btn-sm">Back To Master Siswa</a>
                    </div>
                </div>
                <div class="box-body">
                   
                    <table style="width:100%" class="table table-striped">
                        <tr>
                            <th>Nama Siswa/Siswi</th>
                            <td>
                                <div>{{ $dataSiswa->nama_siswa }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <td>
                                <div>{{ $dataSiswa->nis }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>NISN</th>
                            <td>
                                <div>{{ $dataSiswa->nisn }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>
                                <div>{{ $dataSiswa->jenis_kelamin }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>
                                <div>{{ $dataSiswa->tempat_lahir }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Tgl Lahir</th>
                            <td>
                                <div>{{ date('d F Y', strtotime($dataSiswa->tgl_lahir)) }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>
                                <div>{{ $dataSiswa->agama }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>
                                <div>{{ $dataSiswa->alamat }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Ayah</th>
                            <td>
                                <div>{{ $dataSiswa->nama_ayah }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Ibu</th>
                            <td>
                                <div>{{ $dataSiswa->nama_ibu }}</div>
                            </td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Orang Tua</th>
                            <td>
                                <div>{{ $dataSiswa->pekerjaan_ortu }}</div>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>
        </section>
@endsection





