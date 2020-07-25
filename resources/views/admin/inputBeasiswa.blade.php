@extends('layouts.master')
@section('content')
   
        <section class="content">
            <div class="box-body">
                    
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            
                @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            
                @if ($message = Session::get('info'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    Please check the form below for errors
                </div>
                @endif

              
              <div class="row">
                  <div class="col-lg-12 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>Input</h3>
                        <p>Penghasilan Orang Tua</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-cash"></i>
                      </div>
                      <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalPenghasilan">Klik Disini &nbsp;<i class="fa fa-arrow-circle-down"></i></a>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-12 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>Input</h3>
                        <p>Tanggungan Orang Tua</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-document-text"></i>
                      </div>
                      <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalTanggungan">Klik Disini &nbsp;<i class="fa fa-arrow-circle-down"></i></a>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-12 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                      <div class="inner">
                        <h3>Input</h3>
                        <p>Saudara Yang Tinggal Se Rumah</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-home"></i>
                      </div>
                      <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalSaudara">Klik Disini &nbsp;<i class="fa fa-arrow-circle-down"></i></a>
                    </div>
                  </div>
              </div>

            </div>     
        </section>

        <!-- MODAL INPUT PENGHASILAN -->
        <div class="modal fade" id="modalPenghasilan" tabindex="-1" role="dialog"
            aria-labelledby="modalTambahPenghasilan" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                       
                        <h2 class="modal-title"><b>Form Penghasilan Orangtua</b></h2>
                    </div>
                    <form action="{{ route('inputbeasiswa.penghasilanortu') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama / Kelas / Nilai Raport</label>
                            <div class="col-sm-8">
                              <select id="data_siswa_id" name="data_siswa_id" aria-controls="data_siswa_id" class="form-control select-2">
                                <option>-- Pilih --</option>
                                @foreach ($dataSiswa as $item)
                                    <option value="{{ $item->data_siswa_id }}">{{ $item->nama_siswa }} / {{ $item->tingkatan }}-{{ $item->jurusan }}-{{ $item->nama_kelas }}
                                        /  {{ $item->rata }}.00
                                    </option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="kerja_ayah" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="kerja_ayah" name="kerja_ayah" placeholder="Pekerjaan Ayah" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="penghasilan_ayah" class="col-sm-3 col-form-label">Penghasilan Per Bulan</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" placeholder="1000000 (contoh)">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="kerja_ibu" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="kerja_ibu" name="kerja_ibu" placeholder="Pekerjaan Ibu" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="penghasilan_ibu" class="col-sm-3 col-form-label">Penghasilan Per bulan</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" placeholder="1000000 (contoh)">
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- MODAL INPUT TANGGUNGAN -->
        <div class="modal fade" id="modalTanggungan" tabindex="-1" role="dialog"
            aria-labelledby="modalTambahTanggungan" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-purple">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                       
                        <h2 class="modal-title"><b>Form Tanggungan Orangtua</b></h2>
                    </div>
                    <form action="{{ route('inputbeasiswa.tanggunganortu') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                          <div class="form-group row">
                            <label for="data_siswa_id" class="col-sm-3 col-form-label">Nama / Kelas / Nilai Raport</label>
                            <div class="col-sm-8">
                              <select id="data_siswa_id" name="data_siswa_id" aria-controls="data_siswa_id" class="form-control select-2">
                                <option>-- Pilih --</option>
                                @foreach ($dataSiswa as $item)
                                    <option value="{{ $item->data_siswa_id }}">{{ $item->nama_siswa }} / {{ $item->tingkatan }}-{{ $item->jurusan }}-{{ $item->nama_kelas }}
                                        /  {{ $item->rata }}.00
                                    </option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="status_rumah" class="col-sm-3 col-form-label">Status Rumah</label>
                            <div class="col-sm-8">
                              <select id="status_rumah" name="status_rumah" aria-controls="status_rumah" class="form-control select-2">
                                  <option>-- Pilih --</option>
                                  <option value="sendiri">Rumah Sendiri</option>
                                  <option value="kontrak">Kontrak</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tag_kontrakan" class="col-sm-3 col-form-label">Biaya Kontrak Rumah</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="tag_kontrakan" name="tag_kontrakan" placeholder="100000 (contoh)">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tag_listrik" class="col-sm-3 col-form-label">Tagihan Listrik</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="tag_listrik" name="tag_listrik" placeholder="100000 (contoh)" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tag_air" class="col-sm-3 col-form-label">Tagihan Air</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="tag_air" name="tag_air" placeholder="100000 (contoh)">
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL INPUT SAUDARA SE RUMAH -->
        <div class="modal fade" id="modalSaudara" tabindex="-1" role="dialog"
            aria-labelledby="modalTambahSaudara" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-yellow">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>                       
                        <h2 class="modal-title"><b>Form Saudara Se Rumah</b></h2>
                    </div>
                    <form action="{{ route('inputbeasiswa.saudaraserumah') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                          <div class="form-group row">
                            <label for="data_siswa_id" class="col-sm-3 col-form-label">Nama / Kelas / Nilai Raport</label>
                            <div class="col-sm-8">
                              <select id="data_siswa_id" name="data_siswa_id" aria-controls="data_siswa_id" class="form-control select-2" required>
                                <option>-- Pilih --</option>
                                @foreach ($dataSiswa as $item)
                                    <option value="{{ $item->data_siswa_id }}">{{ $item->nama_siswa }} / {{ $item->tingkatan }}-{{ $item->jurusan }}-{{ $item->nama_kelas }}
                                        /  {{ $item->rata }}.00
                                    </option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="kakak" class="col-sm-3 col-form-label">Jumlah Kakak</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="kakak" name="kakak" placeholder="Berapa Orang ?" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="adik" class="col-sm-3 col-form-label">Jumlah Adik</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" id="adik" name="adik" placeholder="Berapa Orang ?" required>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                                Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection

@section('js')
<script>
    $(document).ready( function (){
      $("#tag_kontrakan").hide();
      
      $("#status_rumah").change(function() {
        if($("#status_rumah").val() == 'sendiri') {
          $("#tag_kontrakan").hide();
        } else {
          $("#tag_kontrakan").show();
        }
      });

      $("#status_rumah").change(function() {
        if($("#status_rumah").val() == 'kontrak') {
          $("#tag_kontrakan").show();
        } else {
          $("#tag_kontrakan").hide();
        }
      });
    });
</script>
@endsection



