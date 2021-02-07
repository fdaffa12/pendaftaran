@extends('frontend.master')
@section ('tittle')
<title>Biodata Siswa</title>
@stop

@section ('content')

<div id="contact" class="section wb">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            @if($cek < 1)
            <form action="{{ url('biodata-siswa/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-layout">
                <div class="row mg-b-25">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nama Peserta: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nama" value="{{old('nama')}}" placeholder="Masukan Nama Peserta">
                      @error('nama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nik" value="{{old('nik')}}" placeholder="NIK">
                      @error('nik')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tempat Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="tempat_lahir" value="{{old('tempat_lahir')}}" placeholder="Masukan Tempat Lahir">
                      @error('tempat_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tanggal Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="date" name="tanggal_lahir" value="{{old('tanggal_lahir')}}" placeholder="Tanggal Lahir">
                      @error('tanggal_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Agama: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="agama" value="{{old('agama')}}" placeholder="Agama">
                      @error('agama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="alamat" value="{{old('alamat')}}" placeholder="alamat">
                      @error('alamat')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Asal Sekolah: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="asal_sekolah" value="{{old('asal_sekolah')}}" placeholder="Asal Sekolah" >
                      @error('asal_sekolah')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NISN: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nisn" value="{{old('nisn')}}" placeholder="NISN">
                      @error('nisn')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5">Masukan</button>
                </div><!-- form-layout-footer -->
            </form>
            @else
            <form action="{{ url('biodata-siswa/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-layout">
                <div class="row mg-b-25">

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nama Peserta: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nama" value="{{$dt->nama}}" placeholder="Masukan Nama Peserta">
                      @error('nama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nik" value="{{$dt->nik}}" placeholder="NIK">
                      @error('nik')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tempat Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="tempat_lahir" value="{{$dt->tempat_lahir}}" placeholder="Masukan Tempat Lahir">
                      @error('tempat_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Tanggal Lahir: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="date" name="tanggal_lahir" value="{{$dt->tanggal_lahir}}" placeholder="Tanggal Lahir">
                      @error('tanggal_lahir')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Agama: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="agama" value="{{$dt->agama}}" placeholder="Agama">
                      @error('agama')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="alamat" value="{{$dt->alamat}}" placeholder="alamat">
                      @error('alamat')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Asal Sekolah: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="asal_sekolah" value="{{$dt->asal_sekolah}}" placeholder="Asal Sekolah">
                      @error('asal_sekolah')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">NISN: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="nisn" value="{{$dt->nisn}}" placeholder="NISN">
                      @error('nisn')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5">Update</button>
                </div><!-- form-layout-footer -->
            </form>
            @endif
          </div>
        </div>
      </div>
  </div>
</div>

@endsection
