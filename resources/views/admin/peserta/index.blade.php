@extends('admin.layouts.master')
@section('peserta') active @endsection
@section ('tittle')
<title>Data Peserta</title>
@stop

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <h4>Data Peserta</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>

                        <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> All Peserta</a>

                        <a href="{{ url('peserta/verifikasi') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-refresh"></i> Di verfifikasi</a>
                        

                        <a href="{{ url('peserta/belum-verifikasi') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-refresh"></i> Belum Di verfifikasi</a>
                    </p>
                </div>
                <div class="box-body">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Asal Sekolah</th>
                                    <th>Id Registrasi</th>
                                    <th>Melengkapi</th>
                                    <th>Verivikasi</th>
                                    <th>Lulus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $e=>$dt)
                                <tr>
                                    <td>{{ $e+1 }}</td>
                                    <td>
                                            <div style="width:60px">
                                                <a href="{{ url('peserta-edit/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="{{url('peserta/details/'.$dt->id)}}" class="btn btn-success btn-xs btn-info" id="detail"><i class="fa fa-info-circle"></i></a>
                                                <a href="{{ url('peserta-delete/'.$dt->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs btn-info" id="detail"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset($dt->photo) }}" style="width: 100px; height:80px;">
                                    </td>
                                    <td><a href="{{url('peserta/details/'.$dt->name)}}">{{ $dt->name }}</a></td>
                                    <td><a href="{{url('peserta/details/'.$dt->name)}}">{{ $dt->biodata_r->asal_sekolah }}</a></td>
                                    <td>{{ $dt->id_registrasi }}</td>
                                    @if($dt->biodata_r_count > 0)
                                    <td>
                                        <label class="label label-success">Sudah Melengkapi</label>
                                    </td>
                                    @else
                                    <td>
                                        <label class="label label-danger">Belum Melengkapi</label>
                                    </td>
                                    @endif

                                    @if($dt->is_verifikasi == 1)
                                    <td>
                                        <label class="label label-success">Sudah Diverifikasi</label>
                                    </td>
                                    @else
                                    <td>
                                        <label class="label label-danger">Belum Diverifikasi</label>
                                    </td>
                                    @endif

                                    <td>
                                        @if($dt->is_lulus == null)
                                        <a href="{{ url('peserta/'.$dt->id.'/lulus') }}" class="btn btn-xs btn-primary">Luluskan</a>
                                        @else
                                        <label class="label label-info">Sudah Lulus</label> <a href="{{ url('peserta/'.$dt->id.'/lulus-batal') }}" class="btn btn-xs btn-danger"> Batal Lulus</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

@endsection
