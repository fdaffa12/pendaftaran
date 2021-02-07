<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    @yield('tittle')
    <title>PPDB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontend')}}/images/apple-touch-icon.png">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="{{asset('frontend')}}/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<div class="form-group has-feedback">
						<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
						@error('email')
							<span class="help-block">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
						<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
						@error('password')
							<span class="help-block">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal" method="post" action="{{ url('ppdb') }}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Peserta</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Peserta" name="nama">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">NISN</label>
								<input type="text" name="nisn" class="form-control" id="exampleInputPassword1" placeholder="NISN">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Email</label>
								<input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>

							<div class="form-group">
								<label for="exampleInputFile">Photo Peserta</label>
								<input type="file" name="photo" id="exampleInputFile">

								<p class="help-block">Example block-level help text here.</p>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/home')}}">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Bioadata </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('biodata-siswa')}}">Biodata Siswa </a>
								<a class="dropdown-item" href="{{url('biodata-wali')}}">Biodata Wali </a>
								<a class="dropdown-item" href="{{url('dokumen')}}">Dokumen </a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{url('nilai')}}">Nilai</a></li>
					</ul>
					@auth
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="{{url('keluar')}}" ><span>Keluar</span></a></li>
                    </ul>
					@else
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Masuk</span></a></li>
                    </ul>
					@endif
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

@yield('content')

  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>About US</h3>
                      </div>
                      <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
          <div class="footer-right">
            <ul class="footer-links-soi">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul><!-- end links -->
          </div>
                  </div><!-- end clearfix -->
              </div><!-- end col -->

      <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>Information Link</h3>
                      </div>
                      <ul class="footer-links">
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">Pricing</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
                      </ul><!-- end links -->
                  </div><!-- end clearfix -->
              </div><!-- end col -->

              <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>Contact Details</h3>
                      </div>

                      <ul class="footer-links">
                          <li><a href="mailto:#">info@yoursite.com</a></li>
                          <li><a href="#">www.yoursite.com</a></li>
                          <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                          <li>+61 3 8376 6284</li>
                      </ul><!-- end links -->
                  </div><!-- end clearfix -->
              </div><!-- end col -->

          </div><!-- end row -->
      </div><!-- end container -->
  </footer><!-- end footer -->

  <div class="copyrights">
      <div class="container">
          <div class="footer-distributed">
              <div class="footer-center">
                  <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
              </div>
          </div>
      </div><!-- end container -->
  </div><!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

@include('sweetalert::alert')

  <!-- ALL JS FILES -->
  <script src="{{asset('frontend')}}/js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="{{asset('frontend')}}/js/custom.js"></script>
  <script src="{{asset('frontend')}}/js/timeline.min.js"></script>
  <!-- bootstrap datepicker -->
  <script src="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  timeline(document.querySelectorAll('.timeline'), {
    forceVerticalMode: 700,
    mode: 'horizontal',
    verticalStartPosition: 'left',
    visibleItems: 4
  });
</script>
<script>
  //Date picker
  $('.datepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
</script>
</body>
</html>
