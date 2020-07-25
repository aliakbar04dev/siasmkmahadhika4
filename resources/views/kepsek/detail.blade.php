@extends('layouts.master')
@section('content')

<section class="content-header">
    <h1>
        Detail Calon Penerima
        <small>Beasiswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Beasiswa</a></li>
        <li class="active">Detail Calon Penerima Beasiswa</li>
    </ol>
</section>
<section class="content">
    <a href="{{ route('acc') }}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Kembali Ke Daftar Persetujuan Beasiswa" style="color:white">Kembali</a>

    </br></br>

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Siswa/Siswi</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px">NIS</th>
                            <td>{{ $data->nis }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">NISN</th>
                            <td>{{ $data->nisn }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Nama Siswa/Siswi</th>
                            <td>{{ $data->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Kelas</th>
                            <td>{{ $data->data_kelas['tingkatan'] }}-{{ $data->data_kelas['jurusan'] }}-{{ $data->data_kelas['nama_kelas'] }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Status Beasiswa</th>
                            @if ($data->status_beasiswa == '0')
                                <td><span class="label label-warning">Menunggu Persetujuan</span></td>
                            @elseif ($data->status_beasiswa == '1')
                                <td><span class="label label-success">Disetujui</span></td>
                            @else
                                <td><span class="label label-danger">Ditolak</span></td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Nilai Raport</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px">Ulangan Harian</th>
                            <td>{{ $data->detail_raport['ulangan_harian'] }}.00</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Tugas</th>
                            <td>{{ $data->detail_raport['tugas'] }}.00</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">UTS</th>
                            <td>{{ $data->detail_raport['uts'] }}.00</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">UAS</th>
                            <td>{{ $data->detail_raport['uas'] }}.00</td>
                        </tr>
                        <tr class="bg-success Per Bulan">
                            <th style="width: 200px">Rata-Rata</th>
                            <td>{{ $data->detail_raport['rata'] }}.00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Penghasilan Orang Tua Per Bulan</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px">Pekerjaan Ayah</th>
                            <td>{{ $data->detail_penghasilan['kerja_ayah'] }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Penghasilan</th>
                            <td>@currency($data->detail_penghasilan['penghasilan_ayah'])</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Pekerjaan Ibu</th>
                            <td>{{ $data->detail_penghasilan['kerja_ibu'] }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Penghasilan</th>
                            @if ($data->detail_penghasilan['penghasilan_ibu'] == null)
                                <td>-</td>
                            @else
                                <td>@currency($data->detail_penghasilan['penghasilan_ibu'])</td>
                            @endif
                        </tr>
                        <tr class="bg-warning">
                            <th style="width: 200px">Total</th>
                            <td>@currency($data->detail_penghasilan['penghasilan_total'])</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Tanggungan Orang Tua Per Bulan</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px">Status Rumah</th>
                            <td>{{ $data->detail_tanggungan['status_rumah'] }}</td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Tagihan Kontrakan</th>
                            @if ($data->detail_tanggungan['tag_kontrakan'] == null)
                            <td>-</td>
                            @else
                            <td>@currency($data->detail_tanggungan['tag_kontrakan'])</td>
                            @endif
                        </tr>
                        <tr>
                            <th style="width: 200px">Tagihan Listrik</th>
                            <td> @currency($data->detail_tanggungan['tag_listrik']) </td>
                        </tr>
                        <tr>
                            <th style="width: 200px">Tagihan Air</th>
                            <td> @currency($data->detail_tanggungan['tag_air']) </td>
                        </tr>
                        <tr class="bg-info">
                            <th style="width: 200px">Total</th>
                            <td> @currency($data->detail_tanggungan['tag_total']) </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Saudara Serumah</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Kakak</th>
                            @if ($data->detail_saudara['kakak'] == null)
                            <td>-</td>
                            @else
                            <td>{{ $data->detail_saudara['kakak'] }} Orang</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Adik</th>
                            @if ($data->detail_saudara['adik'] == null)
                            <td>-</td>
                            @else
                            <td>{{ $data->detail_saudara['adik'] }} Orang</td>
                            @endif
                        </tr>
                        <tr class="bg-danger">
                            <th>Total</th>
                            @if ($data->detail_saudara['total'] == null)
                            <td>-</td>
                            @else
                            <td>{{ $data->detail_saudara['total'] }} Orang</td>
                            @endif
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

