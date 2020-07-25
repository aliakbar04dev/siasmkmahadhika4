@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="box" style="box-shadow:0 0 10px 0 grey;">
            <div class="box-header with-border bg-blue" style="box-shadow:0 0 10px 0 grey;">
                <h5 class="box-title">
                    <marquee>
                        <h4 style="font-size:35px;" class="text-white">Hai {{ Auth::user()->name }} , Selamat Datang Di Sistem Informasi Akademik</></h4>
                    </marquee>
                </h5>
            </div>
            <div class="box-body">
                <center><img src="AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png" height="150" width="150"/></center>
                <h4 style="text-align:center; font-size:40px;"><b>SMK MAHADHIKA 4 JAKARTA TIMUR</b></h4>
                <center><h5>Jl. Raya Bogor Km.25 ( Jl. Bengrah ), Cijantung , Pasar Rebo, Jakarta Timur 13770</h5></center>
                <center><h5>Telp : (021) 87701953 / (021) 8447061</h5></center>
                <center><h5>Email : mahadhika4@yahoo.co.id</h5></center>
                <center><h5>Website : smk4.mahadhika.or.id</h5></center>
                <br><br><br><hr>
            </div>
        </div>
    </section>
 
@endsection



