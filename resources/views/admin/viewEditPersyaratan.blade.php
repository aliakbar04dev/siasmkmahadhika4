@extends('layouts.master')
@section('content')

<section class="content-header">
    <h1>
        Edit Persyaratan
        <small>Beasiswa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit Persyaratan</a></li>
        <li class="active">Beasiswa</li>
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
            <div class="col-md-8">
                <form action="{{ route('proses_edit_syarat') }}" method="POST" class="form-horizontal">
                @csrf
                <input type="hidden" name="id" value="{{ $dataPersyaratan->id }}">
                    <div class="form-group">
                        <textarea class="form-control" rows="10" cols="10" id="persyaratan"
                            name="persyaratan">{{ $dataPersyaratan->persyaratan }}
                        </textarea>
                        <br/>   
                        <button type="submit" class="btn btn-warning">Ubah</button>
                        <a href="{{ route('persyaratanbeasiswa') }}" class="btn btn-danger">Kembali</a>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
