@extends('admin.layouts.master')
@section('peserta') active @endsection
@section ('tittle')
<title>Data Peserta</title>
@stop

@section('content')
<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Asal Sekolah</th>
              <th>Rata-Rata PAI</th>
              <th>Rata-Rata B. Indonesia</th>
              <th>Rata-Rata B. Inggris</th>
              <th>Nilai Rata-rata</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $e=>$dt)
            <tr>
              <td>{{ $e+1 }}</td>
              <td>{{$dt->biodata_r->nama}}</td>
              <td>{{$dt->biodata_r->asal_sekolah}}</td>
              <td>{{$dt->rata_pai}}</td>
              <td>{{$dt->rata_bind}}</td>
              <td>{{$dt->rata_bing}}</td>
              <td>{{$dt->rata_semua}}</td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>
@endsection
