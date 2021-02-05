@extends('frontend.master')
@section ('tittle')
<title>Nilai</title>
@stop

@section ('content')

<div id="contact" class="section wb">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            @if($cek < 1)
            <form action="{{ url('nilai/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
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
                <h1>Nilai PAI</h1>
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_pai_kel5_sem1" value="{{old('n_pai_kel5_sem1')}}" placeholder="Nilai PAI Kelas 5 Semester 1">
                      @error('n_pai_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_pai_kel5_sem2" value="{{old('n_pai_kel5_sem2')}}" placeholder="Nilai PAI Kelas 5 Semester 2">
                      @error('n_pai_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_pai_kel6_sem1" value="{{old('n_pai_kel6_sem1')}}" placeholder="Nilai PAI Kelas 6 Semester 1">
                      @error('n_pai_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <h1>Nilai Bahasa Indonesia</h1>
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bind_kel5_sem1" value="{{old('n_bind_kel5_sem1')}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 1">
                      @error('n_bind_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bind_kel5_sem2" value="{{old('n_bind_kel5_sem2')}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 2">
                      @error('n_bind_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bind_kel6_sem1" value="{{old('n_bind_kel6_sem1')}}" placeholder="Nilai B.Indonesia Kelas 6 Semester 1">
                      @error('n_bind_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <h1>Nilai Bahasa Inggris</h1>
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bing_kel5_sem1" value="{{old('n_bing_kel5_sem1')}}" placeholder="Nilai B.Inggris Kelas 5 Semester 1">
                      @error('n_bing_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bing_kel5_sem2" value="{{old('n_bing_kel5_sem2')}}" placeholder="Nilai B.Inggris Kelas 5 Semester 2">
                      @error('n_bing_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="n_bing_kel6_sem1" value="{{old('n_bing_kel6_sem1')}}" placeholder="Nilai B.Inggris Kelas 6 Semester 1">
                      @error('n_bing_kel5_sem1')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <input type="hidden" name="rata_bing" value="{{$rata_bing}}">
                <input type="hidden" name="rata_bind" value="{{$rata_bind}}">
                <input type="hidden" name="rata_pai" value="{{$rata_pai}}">

                <div class="form-layout-footer">
                  <button class="btn btn-info mg-r-5">Masukan</button>
                </div><!-- form-layout-footer -->
            </form>
            @else
            <form action="{{ url('nilai/'.\Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
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
                    <h1>Nilai PAI</h1>
                    <div class="row mg-b-25">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_pai_kel5_sem1" value="{{$dt->n_pai_kel5_sem1}}" placeholder="Nilai PAI Kelas 5 Semester 1">
                          @error('n_pai_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_pai_kel5_sem2" value="{{$dt->n_pai_kel5_sem2}}" placeholder="Nilai PAI Kelas 5 Semester 2">
                          @error('n_pai_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_pai_kel6_sem1" value="{{$dt->n_pai_kel6_sem1}}" placeholder="Nilai PAI Kelas 6 Semester 1">
                          @error('n_pai_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <h1>Nilai Bahasa Indonesia</h1>
                    <div class="row mg-b-25">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bind_kel5_sem1" value="{{$dt->n_bind_kel5_sem1}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 1">
                          @error('n_bind_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bind_kel5_sem2" value="{{$dt->n_bind_kel5_sem2}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 2">
                          @error('n_bind_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bind_kel6_sem1" value="{{$dt->n_bind_kel6_sem1}}" placeholder="Nilai B.Indonesia Kelas 6 Semester 1">
                          @error('n_bind_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <h1>Nilai Bahasa Inggris</h1>
                    <div class="row mg-b-25">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bing_kel5_sem1" value="{{$dt->n_bing_kel5_sem1}}" placeholder="Nilai B.Inggris Kelas 5 Semester 1">
                          @error('n_bing_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bing_kel5_sem2" value="{{$dt->n_bing_kel5_sem2}}" placeholder="Nilai B.Inggris Kelas 5 Semester 2">
                          @error('n_bing_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="number" name="n_bing_kel6_sem1" value="{{$dt->n_bing_kel6_sem1}}" placeholder="Nilai B.Inggris Kelas 6 Semester 1">
                          @error('n_bing_kel5_sem1')
                            <strong class="text-danger">{{$message}}</strong>
                          @enderror
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

                    <input type="hidden" name="rata_bing" value="{{$rata_bing}}">
                    <input type="hidden" name="rata_bind" value="{{$rata_bind}}">
                    <input type="hidden" name="rata_pai" value="{{$rata_pai}}">

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
