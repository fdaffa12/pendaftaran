@extends('frontend.master')
@section ('tittle')
<title>Biodata Wali</title>
@stop

@section ('content')

<div id="contact" class="section wb">
  <div class="container">
    <h1>Biodata Bapak</h1>
        <div class="row">
            <div class="col-md-12">
              @if($cek < 1)
              <form action="{{ url('biodata-bapak/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        <label class="form-control-label">Nama Bapak: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_bapak" value="{{old('nama_bapak')}}" placeholder="Masukan Nama Bapak">
                        @error('nama_bapak')
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
                        <label class="form-control-label">No Aktif / WA: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone" value="{{old('phone')}}" placeholder="No Aktif / WA">
                        @error('phone')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Pekerjaan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="pekerjaan" value="{{old('pekerjaan')}}" placeholder="Pekerjaan">
                        @error('pekerjaan')
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
              <form action="{{ url('biodata-bapak/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-control-label">Nama Bapak: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_bapak" value="{{$dt->nama_bapak}}" placeholder="Masukan Nama Bapak">
                        @error('nama_bapak')
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
                        <label class="form-control-label">No Aktif / WA: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone" value="{{$dt->phone}}" placeholder="No Aktif / WA">
                        @error('phone')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Pekerjaan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="pekerjaan" value="{{$dt->pekerjaan}}" placeholder="Pekerjaan">
                        @error('pekerjaan')
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
</div>

<div id="contact" class="section wb">
  <div class="container">
    <h1>Biodata Ibu</h1>
        <div class="row">
            <div class="col-md-12">
              @if($ck < 1)
              <form action="{{ url('biodata-ibu/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        <label class="form-control-label">Nama Ibu: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_ibu" value="{{old('nama_ibu')}}" placeholder="Masukan Nama Ibu">
                        @error('nama_ibu')
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
                        <label class="form-control-label">No Aktif / WA: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone" value="{{old('phone')}}" placeholder="No Aktif / WA">
                        @error('phone')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Pekerjaan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="pekerjaan" value="{{old('pekerjaan')}}" placeholder="Pekerjaan">
                        @error('pekerjaan')
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
              <form action="{{ url('biodata-ibu/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-control-label">Nama Ibu: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama_ibu" value="{{$dat->nama_ibu}}" placeholder="Masukan Nama Ibu">
                        @error('nama_ibu')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nik" value="{{$dat->nik}}" placeholder="NIK">
                        @error('nik')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Tempat Lahir: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="tempat_lahir" value="{{$dat->tempat_lahir}}" placeholder="Masukan Tempat Lahir">
                        @error('tempat_lahir')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Tanggal Lahir: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="date" name="tanggal_lahir" value="{{$dat->tanggal_lahir}}" placeholder="Tanggal Lahir">
                        @error('tanggal_lahir')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Agama: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="agama" value="{{$dat->agama}}" placeholder="Agama">
                        @error('agama')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="alamat" value="{{$dat->alamat}}" placeholder="alamat">
                        @error('alamat')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">No Aktif / WA: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="phone" value="{{$dat->phone}}" placeholder="No Aktif / WA">
                        @error('phone')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Pekerjaan: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="pekerjaan" value="{{$dat->pekerjaan}}" placeholder="Pekerjaan">
                        @error('pekerjaan')
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
