@extends('layouts/admin')

@section('container')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/superadmin')}}" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div id="isi">
    <section class="content">
      <div class="container-fluid">
    <form action="/postregistersuperadmin" method="post">
     {{csrf_field()}}
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-body">
              <div class="form-group"><label>Register Admin</label>
                <input type="text" class="form-control" name="nama" placeholder="nama"> <br>
                <input type="email" class="form-control" name="email" placeholder="email"> <br>
                <!-- <input type="password" class="form-control" name="password" placeholder="password"> -->
                <div class="input-group mb-3">
                <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password" required />
                <span class="input-group-text togglePassword" id="">
                    <i data-feather="eye" style="cursor: pointer"></i>
                </span>
              </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer" style = "position:relative; left:20px; bottom:12px;">
              <input type="submit" name="submit" class="btn btn-success">
              <!-- <button type="submit" name="submit" class="btn btn-success">Submit</button> -->
              <a href="{{url('/superadmin')}}" class="btn btn-primary">Kembali</a>
            </div>
          </div><!-- /.box -->
          <!-- left column -->
        </div>
      </div>
  </form>
    </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.content -->
  </div>

@endsection

@section('footer')

@endsection

</body>
</html>
