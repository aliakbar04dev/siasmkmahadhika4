<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\data_guru;
use App\data_siswa;
use App\data_kelas;
use App\data_mapel;
use App\data_absen;
use App\data_raport;
use App\data_ekskul;
use App\data_bimbingan;
use App\data_persyaratan_beasiswa;
use Session;
use DB;
use PDF;


class siaController extends Controller
{

    // DATA GURU

    public function ViewDataGuru()
    {
        $dataGuru = data_guru::all();
        return view('admin.dataGuru.homeDataguru', compact('dataGuru'));
    }

    public function ViewTambahGuru()
    {
        $dataGuru = data_guru::all();
        return view('admin.dataGuru.tambahGuru', compact('dataGuru'));
    }

    public function ProsesTambahGuru(Request $request)
    {
        $dataGuru = new data_guru();
        $dataGuru->nip = $request->nip;
        $dataGuru->nama_guru = $request->nama_guru;
        $dataGuru->j_kelamin = $request->j_kelamin;
        $dataGuru->alamat = $request->alamat;
        $dataGuru->mulai_kerja = $request->mulai_kerja;
        $dataGuru->lulusan = $request->lulusan;
        $dataGuru->tahun = $request->tahun;
        $dataGuru->tugas_lain = $request->tugas_lain;
        $dataGuru->save();
        return redirect('/admin/dataguru')->with(['success' => 'Data Guru Berhasil Ditambah']);
    }


    public function LihatDetailGuru($id)
    {
        $dataGuru = data_guru::find($id);
        return view('admin.dataGuru.lihatDataGuru', compact('dataGuru'));
    }

    public function ViewEditGuru($id)
    {
        $dataGuru = data_guru::find($id);
        return view('admin.dataGuru.editDataguru', compact('dataGuru'));
    }

  

    public function ProsesEditGuru(Request $request)
    {
        $dataGuru = data_guru::where('id',$request->id)->first();
        if ($dataGuru->id = $request->id) {
            if (isset($dataGuru->nip)) {
                $dataGuru->nip = $request->nip;
            }
            if (isset($dataGuru->nama_guru)) {
                $dataGuru->nama_guru = $request->nama_guru;
            }
            if (isset($dataGuru->j_kelamin)) {
                $dataGuru->j_kelamin = $request->j_kelamin;
            }
            if (isset($dataGuru->alamat)) {
                $dataGuru->alamat = $request->alamat;
            }
            if (isset($dataGuru->mulai_kerja)) {
                $dataGuru->mulai_kerja = $request->mulai_kerja;
            }
            if (isset($dataGuru->lulusan)) {
                $dataGuru->lulusan = $request->lulusan;
            }
            if (isset($dataGuru->tahun)) {
                $dataGuru->tahun = $request->tahun;
            }
            if (isset($dataGuru->tugas_lain)) {
                $dataGuru->tugas_lain = $request->tugas_lain;
            }
        }
        $dataGuru->update();
        return redirect('/admin/dataguru')->with(['success' => 'Data Guru Berhasil Diupdate']);
    }


    public function HapusDataGuru($id)
    {
        $dataGuru = data_guru::find($id);
        $dataGuru->delete();
        return redirect('/admin/dataguru')->with(['success' => 'Data Guru Berhasil Dihapus']);
    }


// -------------------------------------------------------------------------------------------------------------------------------------- //

    // DATA SISWA

    public function ViewDataSiswa()
    {
        $dataSiswa = data_siswa::all();
        return view('admin.dataSiswa.homeDatasiswa', compact('dataSiswa'));
    }

    public function ViewTambahSiswa()
    {
        $dataSiswa = data_siswa::all();
        $dataKelas = data_kelas::all();
        return view('admin.dataSiswa.tambahSiswa', compact('dataSiswa', 'dataKelas'));
    }

    public function ProsesTambahSiswa(Request $request)
    {
        $dataSiswa = new data_siswa();
        $dataSiswa->nis = $request->nis;
        $dataSiswa->nisn = $request->nisn;
        $dataSiswa->nama_siswa = $request->nama_siswa;
        $dataSiswa->jenis_kelamin = $request->jenis_kelamin;
        $dataSiswa->tempat_lahir = $request->tempat_lahir;
        $dataSiswa->tgl_lahir = $request->tgl_lahir;
        $dataSiswa->agama = $request->agama;
        $dataSiswa->alamat = $request->alamat;
        $dataSiswa->nama_ayah = $request->nama_ayah;
        $dataSiswa->nama_ibu = $request->nama_ibu;
        $dataSiswa->pekerjaan_ortu = $request->pekerjaan_ortu;
        $dataSiswa->data_kelas_id = $request->data_kelas_id;
        $dataSiswa->save();
        return redirect('/admin/datasiswa')->with(['success' => 'Data Siswa Berhasil Ditambah']);
    }

    public function LihatDetailSiswa($id)
    {
        $dataSiswa = data_siswa::find($id);
        return view('admin.dataSiswa.lihatDataSiswa', compact('dataSiswa'));
    }

    public function ViewEditSiswa($id)
    {
        $dataSiswa = data_siswa::find($id);
        return view('admin.dataSiswa.editDatasiswa', compact('dataSiswa'));
    }

    public function ProsesEditSiswa(Request $request)
    {
        $dataSiswa = data_siswa::where('id',$request->id)->first();
        if ($dataSiswa->id = $request->id) {
            if (isset($dataSiswa->nis)) {
                $dataSiswa->nis = $request->nis;
            }
            if (isset($dataSiswa->nisn)) {
                $dataSiswa->nisn = $request->nisn;
            }
            if (isset($dataSiswa->nama_siswa)) {
                $dataSiswa->nama_siswa = $request->nama_siswa;
            }
            if (isset($dataSiswa->jenis_kelamin)) {
                $dataSiswa->jenis_kelamin = $request->jenis_kelamin;
            }
            if (isset($dataGuru->tempat_lahir)) {
                $dataSiswa->tempat_lahir = $request->tempat_lahir;
            }
            if (isset($dataSiswa->tgl_lahir)) {
                $dataSiswa->tgl_lahir = $request->tgl_lahir;
            }
            if (isset($dataSiswa->agama)) {
                $dataSiswa->agama = $request->agama;
            }
            if (isset($dataSiswa->alamat)) {
                $dataSiswa->alamat = $request->alamat;
            }
            if (isset($dataSiswa->nama_ayah)) {
                $dataSiswa->nama_ayah = $request->nama_ayah;
            }
            if (isset($dataSiswa->nama_ibu)) {
                $dataSiswa->nama_ibu = $request->nama_ibu;
            }
            if (isset($dataSiswa->pekerjaan_ortu)) {
                $dataSiswa->pekerjaan_ortu = $request->pekerjaan_ortu;
            }
        }
        $dataSiswa->update();
        return redirect('/admin/datasiswa')->with(['success' => 'Data Siswa Berhasil Diupdate']);
    }

    public function HapusDataSiswa($id)
    {
        $dataSiswa = data_siswa::find($id);
        $dataSiswa->delete();
        return redirect('/admin/datasiswa')->with(['success' => 'Data Siswa Berhasil Dihapus']);
    }

    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // DATA MAPEL

    public function ViewDataMapel()
    {
        $dataMapel = data_mapel::all();
        return view('admin.dataMapel.homeDatamapel', compact('dataMapel'));
    }

    public function ViewTambahMapel()
    {
        $dataMapel = data_mapel::all();
        $dataGuru = data_guru::all();
        return view('admin.dataMapel.tambahMapel', compact('dataMapel','dataGuru'));
    }

    public function ProsesTambahMapel(Request $request)
    {
        $dataMapel = new data_mapel();
        $dataMapel->nama_mapel = $request->nama_mapel;
        $dataMapel->data_guru_id = $request->data_guru_id;
        $dataMapel->save();
        return redirect('/admin/datamapel')->with(['success' => 'Data Mata Pelajaran Berhasil Ditambah']);
    }

    public function LihatDetailMapel($id)
    {
        $dataMapel = data_mapel::find($id);

        return view('admin.dataMapel.lihatDataMapel', compact('dataMapel'));
    }

    public function ViewEditMapel($id)
    {
        $dataMapel = data_mapel::find($id);
        $dataGuru = data_guru::all();
        return view('admin.dataMapel.editDataMapel', compact('dataMapel', 'dataGuru'));
    }

    public function ProsesEditMapel(Request $request)
    {
        $dataMapel = data_mapel::where('id',$request->id)->first();
        if ($dataMapel->id = $request->id) {
            if (isset($dataMapel->nama_mapel)) {
                $dataMapel->nama_mapel = $request->nama_mapel;
            }
        }
        $dataMapel->update();
        return redirect('/admin/datamapel')->with(['success' => 'Data Mata Pelajaran Berhasil Diupdate']);
    }

    public function HapusDataMapel($id)
    {
        $dataMapel = data_mapel::find($id);
        $dataMapel->delete();
        return redirect('/admin/datamapel')->with(['success' => 'Data Mata Pelajaran Berhasil Dihapus']);
    }


       // -------------------------------------------------------------------------------------------------------------------------------------- //

    // DATA KELAS

    public function ViewDataKelas()
    {
        $dataKelas = data_kelas::all();
        return view('admin.dataKelas.homeDataKelas', compact('dataKelas'));
    }

    public function ViewTambahKelas()
    {
        $dataKelas = data_kelas::all();
        return view('admin.dataKelas.tambahKelas', compact('dataKelas'));
    }

    public function ProsesTambahKelas(Request $request)
    {
        $dataKelas = new data_kelas();
        $dataKelas->tingkatan = $request->tingkatan;
        $dataKelas->jurusan = $request->jurusan;
        $dataKelas->nama_kelas = $request->nama_kelas;
        $dataKelas->save();
        return redirect('/admin/datakelas')->with(['success' => 'Data Kelas Berhasil Ditambah']);
    }

    public function LihatDetailKelas($id)
    {
        $dataKelas = data_kelas::find($id);
        return view('admin.dataKelas.lihatDataKelas', compact('dataKelas'));
    }

    public function ViewEditKelas($id)
    {
        $dataKelas = data_kelas::find($id);
        return view('admin.dataKelas.editDataKelas', compact('dataKelas'));
    }

    public function ProsesEditKelas(Request $request)
    {
        $dataKelas = data_kelas::where('id',$request->id)->first();
        if ($dataKelas->id = $request->id) {
            if (isset($dataKelas->tingkatan)) {
                $dataKelas->tingkatan = $request->tingkatan;
            }
            if (isset($dataKelas->jurusan)) {
                $dataKelas->jurusan = $request->jurusan;
            }
            if (isset($dataKelas->nama_kelas)) {
                $dataKelas->nama_kelas = $request->nama_kelas;
            }
        }
        $dataKelas->update();
        return redirect('/admin/datakelas')->with(['success' => 'Data Kelas Berhasil Diupdate']);
    }

    public function HapusDataKelas($id)
    {
        $dataKelas = data_kelas::find($id);
        $dataKelas->delete();
        return redirect('/admin/datakelas')->with(['success' => 'Data Kelas Berhasil Dihapus']);
    }

    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // MONITORING KEHADIRAN

    public function ViewAbsen()
    {
        $dataKehadiran = data_siswa::orderBy('id', 'ASC')->get();
        $dataKehadiran->loadMissing(['detail_absen', 'data_kelas', 'detail_absen.data_kelas']);
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n');

        return view('guru.monitoringabsen.homeMonitoringAbsen', compact('dataKehadiran','tahun', 'tahunkemaren', 'bulan_ini'));
    }

    public function ViewInputAbsen($id)
    {
        $dataKehadiran = data_siswa::find($id);
        $dataKehadiran->loadMissing('detail_absen');
        return view('guru.monitoringabsen.inputMonitoringAbsen', compact('dataKehadiran'));
    }

    public function ProsesInputAbsen(Request $request)
    {
        $dataKehadiran = new data_absen;
        $dataKehadiran->sakit = $request->sakit;
        $dataKehadiran->izin = $request->izin;
        $dataKehadiran->alpha = $request->alpha;
        $dataKehadiran->data_siswa_id = $request->id;
        $dataKehadiran->data_kelas_id = $request->data_kelas_id;
        $dataKehadiran->save();
        return redirect('/guru/absen')->with(['success' => 'Input Kehadiran Berhasil']);
    }

    public function ViewEditAbsen($id)
    {
        $dataKehadiran = data_absen::find($id);
        $dataKehadiran->loadMissing('detail_siswa');
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n');
        if ($bulan_ini == 9 || $bulan_ini == 10 || $bulan_ini == 11 || $bulan_ini == 12 || $bulan_ini == 1 || $bulan_ini == 2){
            '<center><div><b>Ganjil</b></div></center>';
        } else {
            '<center><div><b>Genap</b></div></center>';
         }
        return view('guru.monitoringabsen.editMonitoringAbsen', compact('dataKehadiran', 'tahun', 'tahunkemaren', 'bulan_ini'));
    }

    public function ProsesEditAbsen(Request $request)
    {
        $dataKehadiran = data_absen::where('id',$request->id)->first();
        if ($dataKehadiran->id = $request->id) {
            if (isset($dataKehadiran->sakit)) {
                $dataKehadiran->sakit = $request->sakit;
            }
            if (isset($dataKehadiran->izin)) {
                $dataKehadiran->izin = $request->izin;
            }
            if (isset($dataKehadiran->alpha)) {
                $dataKehadiran->alpha = $request->alpha;
            }
            if (isset($dataKehadiran->data_siswa_id)) {
                $dataKehadiran->data_siswa_id = $request->data_siswa_id;
            }
            if (isset($dataKehadiran->data_kelas_id)) {
                $dataKehadiran->data_kelas_id = $request->data_kelas_id;
            }
        }
        $dataKehadiran->update();
        return redirect('/guru/absen')->with(['success' => 'Update Kehadiran Berhasil']);
    }

    public function ProsesHapusAbsen(Request $request)
    {
        $dataKehadiran = data_absen::where('id',$request->id)->first();
        $dataKehadiran->delete();
        return redirect('/guru/absen')->with(['success' => 'Hapus Kehadiran Berhasil']);
    }


    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // KEAKTIFAN SISWA/SISWI

    public function ViewEkskul()
    {
        $dataEkskul = data_siswa::orderBy('id', 'ASC')->get();
        $dataEkskul->loadMissing(['detail_ekskul', 'data_kelas', 'detail_ekskul.data_kelas']);
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n');

        return view('guru.keaktifansiswa.homeKeaktifanSiswa', compact('dataEkskul','tahun', 'tahunkemaren', 'bulan_ini'));
    }

    public function ViewInputEkskul($id)
    {
        $dataEkskul = data_siswa::find($id);
        $dataEkskul->loadMissing('detail_ekskul');
        return view('guru.keaktifansiswa.inputEkskul', compact('dataEkskul'));
    }

    public function ProsesInputEkskul(Request $request)
    {
        $dataEkskul = new data_ekskul;
        $dataEkskul->nm_ekskul = $request->nm_ekskul;
        $dataEkskul->ket_ekskul = $request->ket_ekskul;
        $dataEkskul->data_siswa_id = $request->id;
        $dataEkskul->data_kelas_id = $request->data_kelas_id;
        $dataEkskul->save();
        return redirect('/guru/ekskul')->with(['success' => 'Keaktifan Siswa Berhasil Diinput']);
    }

    public function ViewEditEkskul($id)
    {
        $dataEkskul = data_ekskul::find($id);
        $dataEkskul->loadMissing('detail_siswa');
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n');
        if ($bulan_ini == 9 || $bulan_ini == 10 || $bulan_ini == 11 || $bulan_ini == 12 || $bulan_ini == 1 || $bulan_ini == 2){
            '<center><div><b>Ganjil</b></div></center>';
        } else {
            '<center><div><b>Genap</b></div></center>';
         }
        return view('guru.keaktifansiswa.editEkskul', compact('dataEkskul', 'tahun', 'tahunkemaren', 'bulan_ini'));
    }

    public function ProsesEditEkskul(Request $request)
    {
        $dataEkskul = data_ekskul::where('id',$request->id)->first();
        if ($dataEkskul->id = $request->id) {
            if (isset($dataEkskul->nm_ekskul)) {
                $dataEkskul->nm_ekskul = $request->nm_ekskul;
            }
            if (isset($dataEkskul->ket_ekskul)) {
                $dataEkskul->ket_ekskul = $request->ket_ekskul;
            }
            if (isset($dataEkskul->data_siswa_id)) {
                $dataEkskul->data_siswa_id = $request->data_siswa_id;
            }
            if (isset($dataEkskul->data_kelas_id)) {
                $dataEkskul->data_kelas_id = $request->data_kelas_id;
            }
        }
        $dataEkskul->update();
        return redirect('/guru/ekskul')->with(['success' => 'Keaktifan Siswa Berhasil Diupdate']);
    }

    public function ProsesHapusEkskul(Request $request)
    {
        $dataEkskul = data_ekskul::where('id',$request->id)->first();
        $dataEkskul->delete();
        return redirect('/guru/ekskul')->with(['success' => 'Keaktifan Siswa Berhasil Dihapus']);
    }


    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // (GURU) BIMBINGAN KONSELING

    public function ViewBimbinganguru()
    {
        $dataBkguru = DB::table('data_bimbingan')
        ->select('data_bimbingan.*')
        ->get();
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n');
        return view('guru.bkguru.homeBkGuru', compact('dataBkguru','tahun','tahunkemaren','bulan_ini'));
    }

    public function LihatDetailBimbinganguru($id)
    {
        $dataBkguru = data_bimbingan::find($id);
        return view('guru.bkguru.lihatDataBimbinganguru', compact('dataBkguru'));
    }

    public function ViewEditBimbinganguru($id)
    {
        $dataBkguru = data_bimbingan::find($id);
        return view('guru.bkguru.EditDataBimbinganguru', compact('dataBkguru'));
    }

    public function ProsesEditBimbinganguru(Request $request)
    {
        $dataBkguru = data_bimbingan::where('id',$request->id)->first();
        $dataBkguru->respon = $request->respon;
        $dataBkguru->save();
        return redirect('/guru/bimbinganguru')->with(['success' => 'Data Bimbingan Berhasil Input']);
    }
    
    // -------------------------------------------------------------------------------------------------------------------------------------- //


    // PENILAIAN RAPORT

    public function ViewRaport()
    {
        $dataRaport = data_siswa::orderBy('id', 'ASC')->get();
        $dataRaport->loadMissing(['detail_raport', 'detail_ekskul', 'detail_raport.detail_ekskul', 'detail_ekskul.data_kelas', 'detail_absen', 'detail_raport.detail_absen', 'data_kelas', 'detail_raport.data_kelas', 'detail_absen.data_kelas']);
        // return json_encode($dataRaport);
        // die();
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n'); 
        return view('guru.penilaianraport.homePenilaianRaport', compact('dataRaport','tahun', 'tahunkemaren', 'bulan_ini'));
    }

    public function ViewInputRaport($id)
    {
        $dataRaport = data_siswa::find($id);
        $dataRaport->loadMissing('detail_raport');
        // echo json_encode($dataRaport);
        return view('guru.penilaianraport.inputPenilaianRaport', compact('dataRaport'));
    }

    public function ProsesInputRaport(Request $request)
    {
        $dataRaport = new data_raport;
        $dataRaport->ulangan_harian = $request->ulangan_harian;
        $dataRaport->tugas = $request->tugas;
        $dataRaport->uts = $request->uts;
        $dataRaport->uas = $request->uas;
        $dataRaport->rata = (($request->ulangan_harian+$request->tugas+$request->uts+$request->uas)/4);
        $dataRaport->data_siswa_id = $request->id;
        $dataRaport->data_kelas_id = $request->data_kelas_id;
        $dataRaport->data_absen_id = $request->data_absen_id;
        $dataRaport->save();
        return redirect('/guru/raport')->with(['success' => 'Nilai Raport Berhasil Diinput']);
    }    

    public function ViewEditRaport($id)
    {
        $dataRaport = data_raport::find($id);
        $dataRaport->loadMissing('detail_siswa');
        // echo json_encode($dataRaport);
        return view('guru.penilaianraport.editPenilaianRaport', compact('dataRaport'));
    }

    public function ProsesEditRaport(Request $request)
    {
        $dataRaport = data_raport::where('id',$request->id)->first();
        if ($dataRaport->id = $request->id) {
            if (isset($dataRaport->ulangan_harian)) {
                $dataRaport->ulangan_harian = $request->ulangan_harian;
            }
            if (isset($dataRaport->tugas)) {
                $dataRaport->tugas = $request->tugas;
            }
            if (isset($dataRaport->uas)) {
                $dataRaport->uas = $request->uas;
            }
            if (isset($dataRaport->rata)) {
                $dataRaport->rata = (($request->ulangan_harian+$request->tugas+$request->uts+$request->uas)/4);
            }
        }
        $dataRaport->update();
        return redirect('/guru/raport')->with(['success' => 'Nilai Raport Berhasil Diupdate']);
    }

    public function ProsesHapusRaport(Request $request)
    {
        $dataRaport = data_raport::where('id',$request->id)->first();
        $dataRaport->delete();
        return redirect('/guru/raport')->with(['success' => 'Nilai Raport Berhasil Dihapus']);
    }

    public function ViewCetakPDF($id)
    {
        $dataRaport = data_raport::find($id);
        $dataRaport->loadMissing('detail_siswa', 'detail_absen', 'detail_ekskul', 'data_kelas', 'detail_siswa.data_kelas', 'detail_siswa.detail_absen', 'detail_siswa.detail_ekskul');
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n'); 
        $sekarang = date('d-m-Y');
        $pdf = PDF::loadView('exportPDF.RaportSiswa',compact('dataRaport', 'tahun', 'tahunkemaren', 'bulan_ini', 'sekarang'));
        return $pdf->stream('Raport.pdf');
    }


    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // (SISWA) BIMBINGAN KONSELING

    public function ViewBimbingan()
    {
        $dataBksiswa = DB::table('data_bimbingan')
        ->select('data_bimbingan.*')
        ->where('nm_siswa', '=', Auth::user()->name) 
        ->get();
        return view('siswa.bksiswa.homeBkSiswa', compact('dataBksiswa'));
    }

    public function ViewInputBimbingan()
    {
        $dataBksiswa = DB::table('data_bimbingan')
        ->select('data_bimbingan.*')
        ->where('nm_siswa', '=', Auth::user()->name) 
        ->get();
        return view('siswa.bksiswa.inputBkSiswa', compact('dataBksiswa'));
    }

    public function ProsesInputBimbingan(Request $request)
    {
        $dataBksiswa = new data_bimbingan;
        $dataBksiswa->nm_siswa = $request->nm_siswa;
        $dataBksiswa->nm_kelas = $request->nm_kelas;
        $dataBksiswa->keluhan = $request->keluhan;
        $dataBksiswa->save();
        return redirect('/siswa/bimbingan')->with(['success' => 'Data Bimbingan Berhasil Diinput']);
    }   

    public function LihatDetailBimbingan($id)
    {
        $dataBksiswa = data_bimbingan::find($id);
        return view('siswa.bksiswa.lihatDataBimbingan', compact('dataBksiswa'));
    }

    public function ViewEditBimbingan($id)
    {
        $dataBksiswa = data_bimbingan::find($id);
        return view('siswa.bksiswa.EditDataBimbingan', compact('dataBksiswa'));
    }

    public function ProsesEditBimbingan(Request $request)
    {
        $dataBksiswa = data_bimbingan::where('id',$request->id)->first();
        if ($dataBksiswa->id = $request->id) {
            if (isset($dataBksiswa->nm_kelas)) {
                $dataBksiswa->nm_kelas = $request->nm_kelas;
            }
            if (isset($dataBksiswa->keluhan)) {
                $dataBksiswa->keluhan = $request->keluhan;
            }
        }
        $dataBksiswa->update();
        return redirect('/siswa/bimbingan')->with(['success' => 'Data Bimbingan Berhasil Diupdate']);
    }

    public function proseshapusbimbingan(Request $request)
    {
        $dataBksiswa = data_bimbingan::where('id',$request->id)->first();
        $dataBksiswa->delete();
        return redirect('/siswa/bimbingan')->with(['success' => 'Data Bimbingan Berhasil Dihapus']);
    }

     // -------------------------------------------------------------------------------------------------------------------------------------- //

    // LIHAT RAPORT (SISWA)

    public function ViewLihatRaportSiswa()
    {
        $dataRaportSiswa = data_siswa::orderBy('id', 'ASC')
        ->where('nama_siswa', '=', Auth::user()->name) 
        ->get();
        $dataRaportSiswa->loadMissing(['detail_raport', 'detail_ekskul', 'detail_raport.detail_ekskul', 'detail_ekskul.data_kelas', 'detail_absen', 'detail_raport.detail_absen', 'data_kelas', 'detail_raport.data_kelas', 'detail_absen.data_kelas']);
        $tahun = date('Y');
        $tahunkemaren = (date("Y")-1);
        $bulan_ini = date('n'); 
        return view('siswa.lihatraport.homeLihatRaport', compact('dataRaportSiswa','tahun','tahunkemaren','bulan_ini'));
    }



    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // JADWAL MATA PELAJARAN

    public function ViewJadwalmapel()
    {
        return view('siswa.jadwalmapel.homeJadwalMapel');
    }
    

    // -------------------------------------------------------------------------------------------------------------------------------------- //

    // DATA PERSYARATAN BEASISWA

    public function index_syarat()
    {
        $dataPersyaratan = data_persyaratan_beasiswa::all();
        return view('admin.viewPersyaratan', compact('dataPersyaratan'));
    }

    public function proses_add_syarat(Request $request)
    {
        $dataPersyaratan = new data_persyaratan_beasiswa();
        $dataPersyaratan->persyaratan = $request->persyaratan;
        $dataPersyaratan->save();
        return redirect('/persyaratanbeasiswa')->with(['success' => 'Data Persyaratan Berhasil Ditambah']);
    }

    public function edit_syarat($id)
    {
        $dataPersyaratan = data_persyaratan_beasiswa::find($id);
        return view('admin.viewEditPersyaratan', compact('dataPersyaratan'));
    }

    public function proses_edit_syarat(Request $request)
    {
        $dataPersyaratan = data_persyaratan_beasiswa::where('id',$request->id)->first();
        if ($dataPersyaratan->id = $request->id) {
            if (isset($dataPersyaratan->persyaratan)) {
                $dataPersyaratan->persyaratan = $request->persyaratan;
            }
        }
        $dataPersyaratan->update();
        return redirect('/persyaratanbeasiswa')->with(['success' => 'Data Persyaratan Berhasil Di Edit']);
    }

    public function proses_hapus_syarat($id)
    {
        $dataPersyaratan = data_persyaratan_beasiswa::find($id);
        $dataPersyaratan->delete();
        return redirect('/persyaratanbeasiswa')->with(['success' => 'Data Persyaratan Berhasil Dihapus']);
    }
}
