@extends('frontend.master')
@section ('tittle')
<title>Dokumen</title>
@stop

@section ('content')

<div id="contact" class="section wb">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            @if($cek < 1)
            <form action="{{ url('dokumen/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Kartu Keluarga: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="kartu_keluarga">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Akta Kelahiran: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="akta">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Rapot Kelas 5 Semester 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="r_kel5_sem1">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Rapot Kelas 5 Semester 2: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="r_kel5_sem2">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Rapot Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="r_kel6_sem1">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Pestasi: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="prestasi">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">KIS (Kartu Indonesia Sehat): <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="kis">
                      <!-- @error('image_one')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror -->
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5">Masukan</button>
                </div><!-- form-layout-footer -->
            </form>
            @else
            <form action="{{ url('dokumen/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              {{ method_field('PUT') }}
              <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Kartu Keluarga: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="kartu_keluarga">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->kartu_keluarga) }}" class="btn btn-xs btn-success" download="">Download KK</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Akta Kelahiran: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="akta">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->akta) }}" class="btn btn-xs btn-success" download="">Download Akta</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Rapot Kelas 5 Semester 1: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="r_kel5_sem1">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->r_kel5_sem1) }}" class="btn btn-xs btn-success" download="">Download Rapot Kelas 5 Semester 1</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Rapot Kelas 5 Semester 2: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="r_kel5_sem2">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->r_kel5_sem2) }}" class="btn btn-xs btn-success" download="">Rapot Kelas 5 Semester 2</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Rapot Kelas 6 Semesterter 1: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="r_kel6_sem1">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->r_kel6_sem1) }}" class="btn btn-xs btn-success" download="">Rapot Kelas 6 Semester 1</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Pestasi: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="prestasi">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->prestasi) }}" class="btn btn-xs btn-success" download="">Download Prestasi</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">KIS (Kartu Indonesia Sehat): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="kis">
                        <p style="padding-top: 10px;"><a href="{{ asset($dt->kis) }}" class="btn btn-xs btn-success" download="">Download KIS</a></p>
                        <!-- @error('image_one')
                          <strong class="text-danger">{{$message}}</strong>
                        @enderror -->
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
