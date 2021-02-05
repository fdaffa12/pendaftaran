@extends('admin.layouts.master')
@section ('tittle')
<title>Edit {{$dt->biodata_r->nama}}</title>
@stop

@section('content')

<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12">
      <h4>Edit Data</h4>
      <div class="box box-warning">
        <div class="box-header">
            <p>
                <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-backward"></i> Kembali</a>
            </p>
        </div>
        <div class="box-body">
            <form role="form" method="post" action="{{ url('peserta-update/'.$dt->id) }}" enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-layout">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif
                <div class="row mg-b-25">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nama Peserta: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nama" value="{{$dt->biodata_r->nama}}" placeholder="Masukan Nama Peserta">
                      @error('nama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nik" value="{{$dt->biodata_r->nik}}" placeholder="NIK">
                      @error('nik')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tempat Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="tempat_lahir" value="{{$dt->biodata_r->tempat_lahir}}" placeholder="Masukan Tempat Lahir">
                      @error('tempat_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tanggal Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="date" name="tanggal_lahir" value="{{$dt->biodata_r->tanggal_lahir}}" placeholder="Tanggal Lahir" id="datepicker">
                      @error('tanggal_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Agama: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="agama" value="{{$dt->biodata_r->agama}}" placeholder="Agama">
                      @error('agama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="alamat" value="{{$dt->biodata_r->alamat}}" placeholder="alamat">
                      @error('alamat')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Asal Sekolah: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="asal_sekolah" value="{{$dt->biodata_r->asal_sekolah}}" placeholder="Asal Sekolah">
                      @error('asal_sekolah')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NISN: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nisn" value="{{$dt->biodata_r->nisn}}" placeholder="NISN">
                      @error('nisn')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5">Update</button>
                </div><!-- form-layout-footer -->
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
