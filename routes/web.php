<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
    // auth()->User()->assignRole('kepala_sekolah');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/daftarbeasiswa', 'accController@daftar')->middleware('auth')->name('daftarbeasiswa');

Route::get('/persyaratanbeasiswa', 'siaController@index_syarat')->middleware('auth')->name('persyaratanbeasiswa');
Route::post('/addsyarat', 'siaController@proses_add_syarat')->middleware('auth')->name('proses_add_syarat');
Route::get('/editsyarat/{id}', 'siaController@edit_syarat')->middleware('auth')->name('edit_syarat');
Route::post('/proseseditsyarat', 'siaController@proses_edit_syarat')->middleware('auth')->name('proses_edit_syarat');
Route::get('/hapussyarat/{id}', 'siaController@proses_hapus_syarat')->middleware('auth')->name('proses_hapus_syarat');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    // data guru
    Route::get('/dataguru', 'siaController@ViewDataGuru')->name('dataguru.view');
    Route::get('/viewaddguru', 'siaController@ViewTambahGuru')->name('dataguru.viewtambah');
    Route::post('/prosesaddguru', 'siaController@ProsesTambahGuru')->name('dataguru.prosestambah');
    Route::get('/detailguru/{id}', 'siaController@LihatDetailGuru')->name('dataguru.detail');
    Route::get('/vieweditguru/{id}', 'siaController@ViewEditGuru')->name('dataguru.ubah');
    Route::post('/prosesubah', 'siaController@ProsesEditGuru')->name('dataguru.prosesupdate');
    Route::get('/hapus/{id}', 'siaController@HapusDataGuru')->name('dataguru.hapus');

    // data siswa
    Route::get('/datasiswa', 'siaController@ViewDataSiswa')->name('datasiswa.view');
    Route::get('/viewaddsiswa', 'siaController@ViewTambahSiswa')->name('datasiswa.viewtambah');
    Route::post('/prosesaddsiswa', 'siaController@ProsesTambahSiswa')->name('datasiswa.prosestambah');
    Route::get('/detailsiswa/{id}', 'siaController@LihatDetailSiswa')->name('datasiswa.detail');
    Route::get('/vieweditsiswa/{id}', 'siaController@ViewEditSiswa')->name('datasiswa.ubah');
    Route::post('/prosesubahsiswa', 'siaController@ProsesEditSiswa')->name('datasiswa.prosesupdate');
    Route::get('/hapussiswa/{id}', 'siaController@HapusDataSiswa')->name('datasiswa.hapus');

    // data mapel
    Route::get('/datamapel', 'siaController@ViewDataMapel')->name('datamapel.view');
    Route::get('/viewaddmapel', 'siaController@ViewTambahMapel')->name('datamapel.viewtambah');
    Route::post('/prosesaddmapel', 'siaController@ProsesTambahMapel')->name('datamapel.prosestambah');
    Route::get('/detailmapel/{id}', 'siaController@LihatDetailMapel')->name('datamapel.detail');
    Route::get('/vieweditmapel/{id}', 'siaController@ViewEditMapel')->name('datamapel.ubah');
    Route::post('/prosesubahmapel', 'siaController@ProsesEditMapel')->name('datamapel.prosesupdate');
    Route::get('/hapusmapel/{id}', 'siaController@HapusDataMapel')->name('datamapel.hapus');

    // data kelas
    Route::get('/datakelas', 'siaController@ViewDataKelas')->name('datakelas.view');
    Route::get('/viewaddkelas', 'siaController@ViewTambahKelas')->name('datakelas.viewtambah');
    Route::post('/prosesaddkelas', 'siaController@ProsesTambahKelas')->name('datakelas.prosestambah');
    Route::get('/detailkelas/{id}', 'siaController@LihatDetailKelas')->name('datakelas.detail');
    Route::get('/vieweditkelas/{id}', 'siaController@ViewEditKelas')->name('datakelas.ubah');
    Route::post('/prosesubahkelas', 'siaController@ProsesEditKelas')->name('datakelas.prosesupdate');
    Route::get('/hapuskelas/{id}', 'siaController@HapusDataKelas')->name('datakelas.hapus');

    // data input
    Route::get('/inputbeasiswa', 'inputbeasiswaController@index')->name('inputbeasiswa.index');
    Route::post('/penghasilanortu', 'inputbeasiswaController@prosesPenghasilanOrtu')->name('inputbeasiswa.penghasilanortu');
    Route::post('/tanggunganortu', 'inputbeasiswaController@prosesTanggunganOrtu')->name('inputbeasiswa.tanggunganortu');
    Route::post('/saudaraserumah', 'inputbeasiswaController@prosesSaudaraSerumah')->name('inputbeasiswa.saudaraserumah');
});



Route::group(['prefix' => 'guru', 'middleware' => ['auth']], function () {
    // Monitoring Kehadiran
    Route::get('/absen', 'siaController@ViewAbsen')->name('absen.view');
    Route::get('/viewaddabsen/{id}', 'siaController@ViewInputAbsen')->name('absen.viewinput');
    Route::post('/prosesaddabsen', 'siaController@ProsesInputAbsen')->name('absen.prosesinput');
    Route::get('/vieweditabsen/{id}', 'siaController@ViewEditAbsen')->name('absen.ubah');
    Route::post('/proseseditabsen', 'siaController@ProsesEditAbsen')->name('absen.prosesedit');
    Route::get('/proseshapusabsen/{id}', 'siaController@ProsesHapusAbsen')->name('absen.hapus');

    // Keaktifan Siswa
    Route::get('/ekskul', 'siaController@ViewEkskul')->name('ekskul.view');
    Route::get('/viewaddekskul/{id}', 'siaController@ViewInputEkskul')->name('ekskul.viewinput');
    Route::post('/prosesaddekskul', 'siaController@ProsesInputEkskul')->name('ekskul.prosesinput');
    Route::get('/vieweditekskul/{id}', 'siaController@ViewEditEkskul')->name('ekskul.ubah');
    Route::post('/proseseditekskul', 'siaController@ProsesEditEkskul')->name('ekskul.prosesedit');
    Route::get('/proseshapusekskul/{id}', 'siaController@ProsesHapusEkskul')->name('ekskul.hapus');

    // BK GURU
    Route::get('/bimbinganguru', 'siaController@ViewBimbinganguru')->name('bimbinganguru.view');
    Route::get('/detailbimbingan/{id}', 'siaController@LihatDetailBimbinganguru')->name('bimbinganguru.detail');
    Route::get('/vieweditbimbinganguru/{id}', 'siaController@ViewEditBimbinganguru')->name('bimbinganguru.ubah');
    Route::post('/proseseditbimbinganguru', 'siaController@ProsesEditBimbinganguru')->name('bimbinganguru.prosesedit');

    // Penilaian Raport
    Route::get('/raport', 'siaController@ViewRaport')->name('raport.view');
    Route::get('/viewaddraport/{id}', 'siaController@ViewInputRaport')->name('raport.viewinput');
    Route::post('/prosesaddraport', 'siaController@ProsesInputRaport')->name('raport.prosesinput');
    Route::get('/vieweditraport/{id}', 'siaController@ViewEditRaport')->name('raport.ubah');
    Route::post('/proseseditraport', 'siaController@ProsesEditRaport')->name('raport.prosesedit');
    Route::get('/proseshapusraport/{id}', 'siaController@ProsesHapusRaport')->name('raport.hapus');
    Route::get('/prosescetakraport/{id}', 'siaController@ViewCetakPDF')->name('raport.cetakPDF');
});



Route::group(['prefix' => 'siswa', 'middleware' => ['auth']], function () {
    // BK Siswa/Siswi
    Route::get('/bimbingan', 'siaController@ViewBimbingan')->name('bimbingan.view');
    Route::get('/viewaddbimbingan', 'siaController@ViewInputBimbingan')->name('bimbingan.viewinput');
    Route::post('/prosesaddbimbingan', 'siaController@ProsesInputBimbingan')->name('bimbingan.prosesinput');
    Route::get('/detailbimbingan/{id}', 'siaController@LihatDetailBimbingan')->name('bimbingan.detail');
    Route::get('/vieweditbimbingan/{id}', 'siaController@ViewEditBimbingan')->name('bimbingan.ubah');
    Route::post('/proseseditbimbingan', 'siaController@ProsesEditBimbingan')->name('bimbingan.prosesedit');
    Route::get('/proseshapusbimbingan/{id}', 'siaController@ProsesHapusBimbingan')->name('bimbingan.hapus');

    // Jadwal Mata Pelajaran
    Route::get('/jadwalmapel', 'siaController@ViewJadwalmapel')->name('jadwalmapel.view');

    // Lihat Nilai Raport
    Route::get('/lihatraportsiswa', 'siaController@ViewLihatRaportSiswa')->name('siswaraport.view');
});

Route::group(['prefix' => 'kepala_sekolah', 'middleware' => ['auth']], function () {
    // Persetujuan Data Beasiswa
    Route::get('/acc', 'accController@index')->name('acc');
    Route::get('/detail/{id}', 'accController@detail')->name('acc.detail');
    Route::get('/setujui/{data_siswa_id}', 'accController@setujui')->name('acc.setujui');
    Route::get('/tolak/{data_siswa_id}', 'accController@tolak')->name('acc.tolak');
});
