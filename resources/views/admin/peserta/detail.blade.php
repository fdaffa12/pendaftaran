@extends('admin.layouts.master')
@section ('tittle')
<title>Detail {{$peserta->biodata_r->nama}}</title>
@stop

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$peserta->name}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{asset($peserta->photo)}}" alt="User profile picture" style="height:100px;">

              <h3 class="profile-username text-center">{{$peserta->name}}</h3>

              <p class="text-muted text-center">{{$peserta->biodata_r->asal_sekolah}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No REG</b> <a class="pull-right">{{$peserta->id_registrasi}}</a>
                </li>
                <li class="list-group-item">
                  <b>NIK</b> <a class="pull-right">{{$peserta->biodata_r->nik}}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> NISN</strong>

              <p class="text-muted">
                {{$peserta->biodata_r->nisn}}
              </p>

              <hr>

              <strong><i class="fa fa-calendar margin-r-5"></i> Tempat, Tanggal Lahir</strong>

              <p class="text-muted">{{$peserta->biodata_r->tempat_lahir}}, {{$peserta->biodata_r->tanggal_lahir}}</p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
              <p class="text-muted">{{$peserta->biodata_r->alamat}}</p>
              <hr>

              @if($peserta->is_verifikasi == null)
              <a href="{{ url('peserta/'.$peserta->id.'/verifikasi') }}" class="btn btn-primary btn-block"><b>Verivikasi</b></a>
              @else
              <a href="{{ url('peserta/'.$peserta->id.'/verifikasi-batal') }}" class="btn btn-warning btn-block"><b>Batalkan Verivikasi</b></a>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Biodata Wali</a></li>
              <li><a href="#timeline" data-toggle="tab">Dokumen</a></li>
              <li><a href="#nilai" data-toggle="tab">Nilai</a></li>
              <!-- <li><a href="#settings" data-toggle="tab">Edit Data Peserta</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <h3>Biodata Ayah</h3>
                  <h4>Nama : {{$peserta->biodata_bpk->nama_bapak}}</h4>
                  <h4>Tempat, Tanggal Lahir : {{$peserta->biodata_bpk->tempat_lahir}}, {{$peserta->biodata_bpk->tanggal_lahir}}</h4>
                  <h4>Agama : {{$peserta->biodata_bpk->agama}}</h4>
                  <h4>Alamat : {{$peserta->biodata_bpk->alamat}}</h4>
                  <h4>Kontak Aktif : {{$peserta->biodata_bpk->phone}}</h4>
                  <h4>Pekerjaan : {{$peserta->biodata_bpk->pekerjaan}}</h4>
                </div>

                <div class="post">
                  <h3>Biodata Ibu</h3>
                  <h4>Nama : {{$peserta->biodata_ibu->nama_ibu}}</h4>
                  <h4>Tempat, Tanggal Lahir : {{$peserta->biodata_ibu->tempat_lahir}}, {{$peserta->biodata_ibu->tanggal_lahir}}</h4>
                  <h4>Agama : {{$peserta->biodata_ibu->agama}}</h4>
                  <h4>Alamat : {{$peserta->biodata_ibu->alamat}}</h4>
                  <h4>Kontak Aktif : {{$peserta->biodata_ibu->phone}}</h4>
                  <h4>Pekerjaan : {{$peserta->biodata_ibu->pekerjaan}}</h4>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <li>
                    <i class="fa fa-file bg-purple"></i>

                    <div class="timeline-item">

                      <h3 class="timeline-header"><a href="#">Dokumen</a> {{$peserta->name}}</h3>

                      <div class="timeline-body">
                        <a href="{{asset($peserta->dokumen->kartu_keluarga)}}" download="" class="btn btn-primary btn-xs"> Download Kartu Keluarga</a>
                        <a href="{{asset($peserta->dokumen->akta)}}" download="" class="btn btn-primary btn-xs"> Download Akta</a>
                        <a href="{{asset($peserta->dokumen->r_kel5_sem1)}}" download="" class="btn btn-primary btn-xs"> Rapot Kelas 5 Semester 1</a>
                        <a href="{{asset($peserta->dokumen->r_kel5_sem2)}}" download="" class="btn btn-primary btn-xs"> Rapot Kelas 5 Semester 2</a>
                        <a href="{{asset($peserta->dokumen->r_kel6_sem1)}}" download="" class="btn btn-primary btn-xs"> Rapot Kelas 6 Semester 1</a>
                        <a href="{{asset($peserta->dokumen->prestasi)}}" download="" class="btn btn-primary btn-xs"> Download Prestasi</a>
                        <a href="{{asset($peserta->dokumen->kis)}}" download="" class="btn btn-primary btn-xs"> Download KIS</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-user-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="nilai">
                @if($peserta->is_nilai == 1)
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                <h3>Nilai PAI</h3>
                                  <tr>
                                      <th>Nilai Kelas 5 Semester 1</th>
                                      <th>Nilai Kelas 5 Semester 2</th>
                                      <th>Nilai Kelas 6 Semester 1</th>
                                      <th>Rata - rata nilai PAI</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td style="text-align : center;">{{$peserta->nilai->n_pai_kel5_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_pai_kel5_sem2}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_pai_kel6_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->rata_pai}}</td>
                                  </tr>
                              </tbody>
                          </table>

                          <hr>

                          <table class="table table-hover">
                              <thead>
                                <h3>Nilai Bahasa Indonesia</h3>
                                  <tr>
                                      <th>Nilai Kelas 5 Semester 1</th>
                                      <th>Nilai Kelas 5 Semester 2</th>
                                      <th>Nilai Kelas 6 Semester 1</th>
                                      <th>Rata - rata nilai Bahasa Indonesia</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bind_kel5_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bind_kel5_sem2}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bind_kel6_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->rata_bind}}</td>
                                  </tr>
                              </tbody>
                          </table>

                          <hr>

                          <table class="table table-hover">
                              <thead>
                                <h3>Nilai Bahas Inggris</h3>
                                  <tr>
                                      <th>Nilai Kelas 5 Semester 1</th>
                                      <th>Nilai Kelas 5 Semester 2</th>
                                      <th>Nilai Kelas 6 Semester 1</th>
                                      <th>Rata - rata nilai Bahasa Inggris</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bing_kel5_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bing_kel5_sem2}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->n_bing_kel6_sem1}}</td>
                                    <td style="text-align : center;">{{$peserta->nilai->rata_bing}}</td>
                                  </tr>
                              </tbody>
                          </table>

                          <a href="{{ url('peserta-nilai/'.$peserta->id.'/verifikasinilai-batal') }}" class="btn btn-warning btn-block"><b>Batalkan Verivikasi</b></a>
                      </div>
                @else
                <!-- <form action="{{ url('peserta/'.$peserta->id) }}" method="POST" enctype="multipart/form-data"> -->
                <form action="{{ url('peserta/'.$peserta->id)}}" method="POST" enctype="multipart/form-data">
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
                              <input class="form-control" type="number" name="n_pai_kel5_sem1" value="{{$peserta->nilai->n_pai_kel5_sem1}}" placeholder="Nilai PAI Kelas 5 Semester 1">
                              @error('n_pai_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_pai_kel5_sem2" value="{{$peserta->nilai->n_pai_kel5_sem2}}" placeholder="Nilai PAI Kelas 5 Semester 2">
                              @error('n_pai_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_pai_kel6_sem1" value="{{$peserta->nilai->n_pai_kel6_sem1}}" placeholder="Nilai PAI Kelas 6 Semester 1">
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
                              <input class="form-control" type="number" name="n_bind_kel5_sem1" value="{{$peserta->nilai->n_bind_kel5_sem1}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 1">
                              @error('n_bind_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_bind_kel5_sem2" value="{{$peserta->nilai->n_bind_kel5_sem2}}" placeholder="Nilai B.Indonesia Kelas 5 Semester 2">
                              @error('n_bind_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_bind_kel6_sem1" value="{{$peserta->nilai->n_bind_kel6_sem1}}" placeholder="Nilai B.Indonesia Kelas 6 Semester 1">
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
                              <input class="form-control" type="number" name="n_bing_kel5_sem1" value="{{$peserta->nilai->n_bing_kel5_sem1}}" placeholder="Nilai B.Inggris Kelas 5 Semester 1">
                              @error('n_bing_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 5 Semster 2: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_bing_kel5_sem2" value="{{$peserta->nilai->n_bing_kel5_sem2}}" placeholder="Nilai B.Inggris Kelas 5 Semester 2">
                              @error('n_bing_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Nilai Kelas 6 Semster 1: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="number" name="n_bing_kel6_sem1" value="{{$peserta->nilai->n_bing_kel6_sem1}}" placeholder="Nilai B.Inggris Kelas 6 Semester 1">
                              @error('n_bing_kel5_sem1')
                                <strong class="text-danger">{{$message}}</strong>
                              @enderror
                            </div>
                          </div><!-- col-4 -->
                        </div><!-- row -->

                        <input type="hidden" name="rata_bing" value="{{$rata_bing}}">
                        <input type="hidden" name="rata_bind" value="{{$rata_bind}}">
                        <input type="hidden" name="rata_pai" value="{{$rata_pai}}">
                        <input type="hidden" name="rata_semua" value="{{$rata_semua}}">

                    <div class="form-layout-footer">
                      <button class="btn btn-info mg-r-5">Verifikasi Nilai</button>
                    </div><!-- form-layout-footer -->
                </form>
                @endif
              </div>
              <!-- /.tab-pane -->
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
