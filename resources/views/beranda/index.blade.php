@extends ('frontend.master')
@section('tittle')
<title>Profil Anda</title>
@stop

@section('content')

    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
							@if($cek < 1)
                <h3>Harap Melengkapi Biodata Siswa Terlebih Dahulu</h3>
								<p>
                    <center>
                        <a target="_blank" href="{{ url('biodata-siswa') }}" class="btn btn-flat btn-success">Isi Biodata Siswa</a>
                    </center>
                </p>
								@else
								<h3>Biodata Siswa Sudah Lengkap</h3>
								<p> Harap Mengisi Biodata Wali
                    <center>
                        <a target="_blank" href="{{ url('biodata-wali') }}" class="btn btn-flat btn-success">Isi Biodata Wali</a>
                    </center>
                </p>
								<p> Harap Mengisi Dokumen
                    <center>
                        <a target="_blank" href="{{ url('dokumen') }}" class="btn btn-flat btn-success">Isi Dokumen</a>
                    </center>
                </p>
								@if($cek_nilai < 1)
								<p> Harap Mengisi Nilai
                    <center>
                        <a target="_blank" href="{{ url('nilai') }}" class="btn btn-flat btn-success">Isi Nilai</a>
                    </center>
                </p>
								@else
								<p> Harap Cek Kembali Nilai Anda Lalu Konfirmasi
                    <center>
                        <a target="_blank" href="{{ url('nilai') }}" class="btn btn-flat btn-warning">Cek Nilai</a>
                    </center>
                </p>
								@endif
							@endif
            </div><!-- end title -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

@endsection
