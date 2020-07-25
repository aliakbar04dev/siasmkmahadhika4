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

class accController extends Controller
{
    public function index()
    {
        $dataPersyaratan = DB::table('data_siswa')
                ->leftJoin('data_kelas', 'data_siswa.data_kelas_id', '=', 'data_kelas.id')
                ->leftJoin('data_raport', 'data_siswa.id', '=', 'data_raport.data_siswa_id')
                ->select('data_siswa.*', 'data_kelas.*', 'data_raport.*')
                ->where('data_kelas.tingkatan', '=', 'X')
                ->orWhere('data_kelas.tingkatan', '=', 'XI')
                ->get();
        
        // return json_encode($dataPersyaratan); die();
        return view('kepsek.index', compact('dataPersyaratan'));
    }

    public function detail($id)
    {
        $data = data_siswa::find($id);
        $data->loadMissing('data_kelas', 'detail_raport', 'detail_tanggungan', 'detail_penghasilan', 'detail_saudara');

        // return json_encode($data); die();
        return view('kepsek.detail', compact('data'));
    }

    public function setujui(Request $request, $data_siswa_id)
    {
        $data = data_siswa::where('id',$data_siswa_id)->first();
        if ($data->id = $data_siswa_id) {
            if (isset($data->status_beasiswa)) {
                $data->status_beasiswa = 1;
            }
        }
        $data->update();
        return redirect('/kepala_sekolah/acc')->with(['success' => 'Berhasil Menyetujui Data Beasiswa']);
    }

    public function tolak(Request $request, $data_siswa_id)
    {
        $data = data_siswa::where('id',$data_siswa_id)->first();
        if ($data->id = $data_siswa_id) {
            if (isset($data->status_beasiswa)) {
                $data->status_beasiswa = 2;
            }
        }
        $data->update();
        return redirect('/kepala_sekolah/acc')->with(['success' => 'Berhasil Menolak Data Beasiswa']);
    }

    public function daftar()
    {
        $dataPersyaratan = DB::table('data_siswa')
        ->leftJoin('data_kelas', 'data_siswa.data_kelas_id', '=', 'data_kelas.id')
        ->leftJoin('data_raport', 'data_siswa.id', '=', 'data_raport.data_siswa_id')
        ->select('data_siswa.*', 'data_kelas.*', 'data_raport.*')
        ->where('data_kelas.tingkatan', '=', 'X')
        ->orWhere('data_kelas.tingkatan', '=', 'XI')
        ->get();

        // return json_encode($dataPersyaratan); die();
        return view('kepsek.daftar', compact('dataPersyaratan'));
    }
}
