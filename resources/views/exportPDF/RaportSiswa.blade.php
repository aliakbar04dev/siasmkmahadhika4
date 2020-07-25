<!DOCTYPE html>
<html>

<head>
    <center><img src="AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png" height="120" width="120"/></center>
    <center>
    <h2>
        <b>Raport Peserta Didik</b>
    </h2>
    <h2>
        <b>SMK MAHADHIKA 4</b>
    </h2>
    <h4>
        <b>Jl. Raya Bogor Km.25, Cijantung , Pasar Rebo, Jakarta Timur</b>
    </h4
    </center>
    <hr>

        <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 0.5px solid #000000;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #FFFFFF
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #096d9a;
                color: white;
            }

            .tanggal{
                text-align: right;
            }
            #baru {
                margin: 0 auto;
            }
        </style>
</head>

<body>
    <div>
        <table id="baru" class="table table-striped" style="width:100%">
            <tr>
                <td>Nama Peserta Didik</td>
                <td style="width:70%">: &nbsp;&nbsp;&nbsp;<b>{{ $dataRaport->detail_siswa['nama_siswa'] }}</b></td> 
            </tr>
            </tr>  
            <tr>
                <td>No Induk</td>
                <td style="width:70%">: &nbsp;&nbsp;&nbsp;<b>{{ $dataRaport->detail_siswa['nis'] }}</b></td> 
            </tr>  
            <tr>
                <td>Kelas</td>
                <td style="width:70%"> : &nbsp;&nbsp;&nbsp;<b>{{ $dataRaport->data_kelas['tingkatan'] }}-{{ $dataRaport->data_kelas['jurusan'] }}-{{ $dataRaport->data_kelas['nama_kelas'] }}</b></td> 
            </tr>  
            <tr>
                <td>Semester</td>
                @if ($bulan_ini == 9 || $bulan_ini == 10 || $bulan_ini == 11 || $bulan_ini == 12 || $bulan_ini == 1 || $bulan_ini == 2)
                <td style="width:70%">: &nbsp;&nbsp;&nbsp;<b>Ganjil</b></td> 
                @else
                <td style="width:70%">: &nbsp;&nbsp;&nbsp;<b>Genap</b></td> 
                @endif
            </tr>  
            <tr>
                <td>Tahun Ajaran</td>
                <td style="width:70%">: &nbsp;&nbsp;&nbsp;<b>{{ $tahunkemaren }}/{{ $tahun }}</b></td> 
            </tr>  
        </table>
    </div>
</center>
    <hr>
    <br><br><br>
    <table id="customers">
        <thead>
            <tr class="bg-primary">
                <th colspan="5"><center>Hasil Nilai Peserta Didik</center></th>
            </tr>
            <tr class="bg-primary">
                <th><center>Ulangan Harian</center></th>
                <th><center>Tugas</center></th>
                <th><center>UTS</center></th>
                <th><center>UAS</center></th>
                <th><center>Rata-Rata</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><center>{{ $dataRaport->ulangan_harian }}</center</td>
                <td><center>{{ $dataRaport->tugas }}</center</td>
                <td><center>{{ $dataRaport->uts }}</center</td>
                <td><center>{{ $dataRaport->uas }}</center</td>
                <td><center>{{ number_format($dataRaport->rata,2) }}</center</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table id="customers">
        <thead>
            <tr class="bg-primary">
                <th colspan="3"><center>Hasil Monitoring Kehadiran Peserta Didik</center></th>
            </tr>
            <tr class="bg-primary">
                <th><center>Sakit</center></th>
                <th><center>izin</center></th>
                <th><center>Alpha</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><center>{{ $dataRaport->detail_siswa->detail_absen['sakit'] }} Hari</center</td>
                <td><center>{{ $dataRaport->detail_siswa->detail_absen['izin'] }} Hari</center</td>
                <td><center>{{ $dataRaport->detail_siswa->detail_absen['alpha'] }} Hari</center</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <table id="customers">
        <thead>
            <tr class="bg-primary">
                <th colspan="2"><center>Hasil Monitoring Keaktifan Peserta Didik</center></th>
            </tr>
            <tr class="bg-primary">
                <th><center>Ekstrakulikuler Yang Diikuti</center></th>
                <th><center>Keterangan</center></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><center>{{ $dataRaport->detail_siswa->detail_ekskul['nm_ekskul'] }}</center</td>
                <td><center>{{ $dataRaport->detail_siswa->detail_ekskul['ket_ekskul'] }}</center</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <p>
        <b>Catatan Wali Kelas</b> : <br>Ananda/Adinda {{ $dataRaport->detail_siswa['nama_siswa'] }},<br>Pertahankan prestasi yang dimilki. Semangatmu dalam belajar serta prestasi yang kamu raih menunjukkan sikap yang positif. Bapak/Ibu Guru menghargaimu!
    </p>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <p class="tanggal">
        JAKARTA,{{ $sekarang }}
    </p>
    <br><br><br><br> <br><br>
    <table style="width:120%">
        <tr>
            <td width="65%">
                Orang Tua/Wali
                <br><br><br><br><br><br><br>
                <hr align="left" width="25%">
            </td>
            <td>
                Wali Kelas
                <br><br><br><br><br><br><br>
                <hr align="left" width="50%">
            </td>
        </tr>
    </table>
    <table style="width:100%">
        <tr>
            <td align="center">
                Kepala Sekolah
                <br><br><br><br><br><br><br>
                <hr align="center" width="25%">
            </td>
        </tr>
    </table>
</body>

</html>
