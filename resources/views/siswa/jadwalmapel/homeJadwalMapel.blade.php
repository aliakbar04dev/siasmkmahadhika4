@extends('layouts.master')
@section('content')
   
        <section class="content-header">
            <h1>
                Tabel Jadwal Mata Pelajaran
                <small>Jadwal Mata Pelajaran</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Jadwal</a></li>
                <li class="active">Mata Pelajaran</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                      Jadwal ini berlaku untuk semua kelas (kelas x,xi,dan xii)
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
              
                    <table id="TabelJadwalMP1" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th><center>Senin</center></th>
                                <th><center>Selasa</center></th>
                                <th><center>Rabu</center></th>
                                <th><center>Kamis</center></th>
                                <th><center>Jumat</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><center>Upacara</center></td>
                                <td><center>Bahasa Indonesia</center></td>
                                <td><center>Teori Kejuruan</center></td>
                                <td><center>Fisika</center></td>
                                <td><center>Pendidikan Agama Islam</center></td>
                            </tr>
                            <tr>
                                <td><center>Matematika</center></td>
                                <td><center>Pendidikan Kewarganegaraan</center></td>
                                <td><center>Praktek Kejuruan</center></td>
                                <td><center>Kimia</center></td>
                                <td><center>Bahasa Inggris</center></td>
                            </tr>
                            <tr>
                                <td><center>Seni Budaya</center></td>
                                <td><center>Kewirausahaan</center></td>
                                <td><center>Sejarah Indonesia</center></td>
                                <td><center>Olahraga</center></td>
                                <td><center>Teknologi Informasi Komputer</center></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
@endsection

@section('js')
<script>
    $(document).ready( function (){
        //DATATABLE
        $('#TabelJadwalMP1').DataTable({
            fixedHeader: {
                header: true,
                },
                scrollY:        "300px",
                scrollX:        true,
                scrollCollapse: true,
                'paging'      : false,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true,
                'autoWidth'   : false
        });
    });
</script>
@endsection



