<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MASUK | SMK MAHADHIKA 4 JAKARTA TIMUR</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/dist/css/AdminLTE.min.css') }}">
  <link rel="shortcut icon" href="{{ asset('AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/plugins/iCheck/square/blue.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  
  <style>
    .login-box, .register-box {
        width: 400px;
        margin: 1% auto;
    }
    .tulisan_sistem {
        color: #0077bd;
    }
  </style>
</head>
<center>
<a href="#"><h1><b class="tulisan_sistem"> SISTEM INFORMASI SEKOLAH</b</h1></a>
</center>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <center><img src="AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png" height="120" width="120"/></center>
    <center style="color: black;"><h2><b>SMK MAHADHIKA 4<br>JAKARTA TIMUR <b></h2></center>
    <center style="color: black;">Jl. Raya Bogor Km.25, Cijantung , Pasar Rebo, Jakarta Timur</center>
    <br>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <div class="col-md-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      &nbsp;Ingat Saya
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-12 offset-md-4">
                <button type="submit" class="btn btn-primary btn-block">
                    Masuk
                </button>
                <br>
                <center>
                    &nbsp;
                    Tidak punya akun ? <a href="{{ route('register') }}">Buat Akun</a>
                </center>
            </div>
        </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('AdminLTE-2.4.5/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>



