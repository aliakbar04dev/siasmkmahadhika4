<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\data_siswa;
use App\penghasilan_ortu;
use App\tanggungan_ortu;
use App\saudara_serumah;
use Session;
use DB;

class inputbeasiswaController extends Controller
{
    // QUERY MENAMPILKAN DATA SEMUA INPUT
    // SELECT b.nama_siswa, e.tingkatan, e.jurusan, e.nama_kelas, b.nama_ayah, d.penghasilan_total, c.tag_total, a.total FROM `saudara_serumah` a LEFT JOIN data_siswa b ON a.data_siswa_id = b.id LEFT JOIN tanggungan_ortu c ON c.data_siswa_id = b.id LEFT JOIN penghasilan_ortu d ON d.data_siswa_id = b.id LEFT JOIN data_kelas e ON b.data_kelas_id = e.id WHERE b.id = '1' 

    public function index()
    {
        $dataSiswa = DB::table('data_siswa')
                ->leftJoin('data_kelas', 'data_siswa.data_kelas_id', '=', 'data_kelas.id')
                ->leftJoin('data_raport', 'data_siswa.id', '=', 'data_raport.data_siswa_id')
                ->select('data_siswa.id', 'data_kelas.tingkatan', 'data_raport.data_siswa_id', 'data_siswa.data_kelas_id', 'data_siswa.nama_siswa', 'data_kelas.tingkatan', 'data_kelas.jurusan', 'data_kelas.nama_kelas', 'data_raport.rata')
                ->where('data_kelas.tingkatan', '=', 'X')
                ->orWhere('data_kelas.tingkatan', '=', 'XI')
                ->get();
        
        // return json_encode($dataSiswa); die();
        return view('admin.inputBeasiswa', compact('dataSiswa'));
    }

    public function prosesPenghasilanOrtu(Request $request)
    {
        $data = new penghasilan_ortu;
        $data->data_siswa_id = $request->data_siswa_id;
        $data->kerja_ayah = $request->kerja_ayah;
        $data->penghasilan_ayah = $request->penghasilan_ayah;
        $data->kerja_ibu = $request->kerja_ibu;
        $data->penghasilan_ibu = $request->penghasilan_ibu;
        $data->penghasilan_total = $request->penghasilan_ayah + $request->penghasilan_ibu;
        $data->save();
        return redirect('/admin/inputbeasiswa')->with(['success' => 'Data Penghasilan Orang Tua Berhasil Diinput']);

        // QUERY UNTUK MENAMPILKAN DATA PENGHASILAN ORTU
        // SELECT b.nama_siswa, b.nama_ayah, a.kerja_ayah, a.penghasilan_ayah, b.nama_ibu, a.kerja_ibu, a.penghasilan_ibu, a.penghasilan_total FROM `penghasilan_ortu` a LEFT JOIN data_siswa b ON a.data_siswa_id = b.id WHERE b.id = '3'
    }

    
    public function prosesTanggunganOrtu(Request $request)
    {
        $data = new tanggungan_ortu;
        $data->data_siswa_id = $request->data_siswa_id;
        $data->status_rumah = $request->status_rumah;
        $data->tag_kontrakan = $request->tag_kontrakan;
        $data->tag_listrik = $request->tag_listrik;
        $data->tag_air = $request->tag_air;
        $data->tag_total = $request->tag_kontrakan + $request->tag_listrik + $request->tag_air;
        $data->save();
        return redirect('/admin/inputbeasiswa')->with(['success' => 'Data Tanggungan Orang Tua Berhasil Diinput']);
        
        // QUERY UNTUK MENAMPILKAN DATA TANGGUNGAN ORTU
        // SELECT b.nama_siswa, b.nama_ayah, a.status_rumah, a.tag_kontrakan, a.tag_listrik, a.tag_air, a.tag_total FROM `tanggungan_ortu` a LEFT JOIN data_siswa b ON a.data_siswa_id = b.id WHERE b.id = '11'   
    }


    public function prosesSaudaraSerumah(Request $request)
    {
        $data = new saudara_serumah;
        $data->data_siswa_id = $request->data_siswa_id;
        $data->kakak = $request->kakak;
        $data->adik = $request->adik;
        $data->total = $request->kakak + $request->adik;
        $data->save();
        return redirect('/admin/inputbeasiswa')->with(['success' => 'Data Saudara Se Rumah Berhasil Diinput']);
        
        // QUERY UNTUK MENAMPILKAN DATA SAUDARA SERUMAH
        // SELECT b.nama_siswa, b.nama_ayah, a.kakak, a.adik, a.total FROM `saudara_serumah` a LEFT JOIN data_siswa b ON a.data_siswa_id = b.id WHERE b.id = '1'    
    }


}
