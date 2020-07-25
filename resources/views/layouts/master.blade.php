
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Sekolah SMK MAHADHIKA 4</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/dist/css/AdminLTE.min.css') }}">

  <link rel="shortcut icon" href="{{ asset('AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png') }}">
  
  <link rel="stylesheet" href="{{ asset('AdminLTE-2.4.5/dist/css/skins/_all-skins.min.css') }}">
  <style>
    .skin-blue .main-header .logo {
        background-color: #2c6fab;
        color: #fff;
        border-bottom: 0 solid transparent;
    }
    .skin-blue .main-header .navbar {
    background-color: #3379b7;
    }
    .h4, h4 {
        font-size: 24px;
    }
    .h4, .h5, .h6, h4, h5, h6 {
        margin-top: 19px;
        margin-bottom: 10px;
    }
    .h5, h5 {
        font-size: 20px;
    }
    .skin-green .main-header li.user-header {
      background-color: #2ccc21;
    }
    .text-success {
      color: #00a65a;
    }
    .btn-success {
      background-color: #00a65a;
      border-color: #00a65a;
    }
    .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
      background-color: #00a65a !important;
    }
    .skin-green .wrapper, .skin-green .main-sidebar, .skin-green .left-side {
      background-color: #046490;
    }
    .skin-green .sidebar-menu>li>.treeview-menu {
      margin: 0 1px;
      background: #064158;
    }
    .skin-green .main-header .navbar .sidebar-toggle:hover {
      background-color: #046490;
    }
    .skin-green .main-header .logo:hover {
      background-color: #0a5d84;
    }
    .skin-green .main-header li.user-header {
      background-color: #0e91ce;
    }
    .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
      background-color: #333;
    }
    .skin-blue .sidebar a {
      color: #ffffff;
    }
    .skin-blue .sidebar-menu>li:hover>a, .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li.menu-open>a {
      color: #fff;
      background: #3379b7;
    }
    .skin-blue .sidebar-menu>li.header {
      color: #3379b7;
      background: #ffffff;
    }
    .bg-purple {
      background-color: #00c0ef !important;
    }
    
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    {{-- <nav class="nav">
        <br>
        <center><img class="pull-left" src="AdminLTE-2.4.5/dist/img/smk-mahadhika-4-jakarta.png" height="60" width="60"/></center>
        <h4>SMK MAHADHIKA 4 JAKARTA</h4>
    </nav>
    <br> --}}
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="box-shadow:0 0 20px 0 white;">SIS</span>
      <!-- logo for regular state and mobile devices -->
      <h5><b>SIS SMK MAHADHIKA 4</b></h5>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <img src="{{ url('/') }}/galeri/{{ Auth::user()->foto }}" class="user-image">
              <span class="hidden-xs"> {{ Auth::user()->name }} </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                {{-- <img src="AdminLTE-2.4.5/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
                <img src="{{ url('/') }}/galeri/{{ Auth::user()->foto }}" class="img-circle">
                <p>
                    {{ Auth::user()->name }}
                  <small>  
                    User
                  </small>
                </p>
              </li>
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"  class="btn btn-default btn-flat float-right"> 
                      Sign Out
                    </a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="box-shadow:0 0 10px 0 grey;">
        <div class="pull-left image">
          <img src="{{ url('/') }}/galeri/{{ Auth::user()->foto }}" class="img-circle">
        </div>
        <div class="pull-left info">
          <p> {{ Auth::user()->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><b>PILIHAN MENU</b></li>
        <li class="treeview">
          <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </li>

        @role('admin') 
          <li class="treeview">
            <li><a href="{{ route('dataguru.view') }}"><i class="fa fa-circle-o"></i>Master Data Guru</a></li>
            <li><a href="{{ route('datamapel.view') }}"><i class="fa fa-circle-o"></i>Master Data Mata Pelajaran</a></li>
            <li><a href="{{ route('datasiswa.view') }}"><i class="fa fa-circle-o"></i>Master Data Siswa/Siswi</a></li>
            <li><a href="{{ route('datakelas.view') }}"><i class="fa fa-circle-o"></i>Master Data Kelas</a></li>
          </li>
        @endrole

        @role('guru') 
          <li><a href="{{ route('absen.view') }}"><i class="fa fa-circle-o"></i>Monitoring Kehadiran</a></li>
          <li><a href="{{ route('ekskul.view') }}"><i class="fa fa-circle-o"></i>Keaktifan Siswa</a></li>
          @role('guru_Bk') 
          <li><a href="{{ route('bimbinganguru.view') }}"><i class="fa fa-circle-o"></i>BK (guru)</a></li>
          @endrole
          <li><a href="{{ route('raport.view') }}"><i class="fa fa-circle-o"></i>Penilaian Raport</a></li>
        @endrole

     

        @role('siswa') 
          <li><a href="{{ route('jadwalmapel.view') }}"><i class="fa fa-circle-o"></i>Lihat Jadwal Pelajaran</a></li>
          <li><a href="{{ route('siswaraport.view') }}"><i class="fa fa-circle-o"></i>Lihat Nilai Raport</a></li>
          <li><a href="{{ route('bimbingan.view') }}"><i class="fa fa-circle-o"></i>BK (Siswa/Siswi)</a></li>
        @endrole

        @hasanyrole('admin|siswa|kepala_sekolah') 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Beasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('persyaratanbeasiswa') }}"><i class="fa fa-circle-o"></i> Persyaratan</a></li>

            @role('admin') 
              <li><a href="{{ route('inputbeasiswa.index') }}"><i class="fa fa-circle-o"></i> Input Penerima</a></li>
            @endrole

            @role('kepala_sekolah') 
            <li><a href="{{ route('acc') }}"><i class="fa fa-circle-o"></i> Acc Calon Penerima</a></li>
            @endrole

            <li><a href="{{ route('daftarbeasiswa') }}"><i class="fa fa-circle-o"></i> Daftar Penerima</a></li>
      
          </ul>
        </li>
        @endrole

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out"></i>
                      {{ __('Logout') }}
            </a>
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="box-shadow:0 0 15px 0 grey;">
    <marquee>
    <strong>Copyright &copy; 2020 <a href="#">Sistem Informasi Akademik SMK MAHADHIKA 4</a>.</strong> All rights reserved. |
    Telp : (021) 87701953 / (021) 8447061. |
    Email : mahadhika4@yahoo.co.id |
    Website : smk4.mahadhika.or.id
  </marquee>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdons Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-2.4.5/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE-2.4.5/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
@yield('js')
</body>
</html>
