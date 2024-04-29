{{-- @extends('layout.main')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <title>Document</title>
</head>
<body>
  
  <div class="container">
    <div class=" text-center mt-5 ">
        <h1 >Tambah Data kegiatan Form</h1>
    </div>
<div class="row ">
  <div class="col-lg-7 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
        <div class = "container">
          <form id="contact-form" role="form">
            @csrf
            <div class="controls">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_name">Nama kegiatan *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="masukan nama surat" required="required" data-error="data surat is required.">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_email">Tanggal *</label>
                        <input id="form_email" type="date" name="tanggal" class="form-control" placeholder="masukan tanggal surat" required="required" data-error="Valid date is required.">     
                    </div>
                </div>
          </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_deskripsi">desktripsi *</label>
                        <input id="form_deskripsi" type="text" name="deskripsi" class="form-control" placeholder="masukan keterangan kegiatan" required="required" data-error="Valid deskripsi is required.">     
                    </div>
                </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">gambar *</label>
                <input type="file" name="foto" id="">
              </div>
                </div>
                  <div class="col-md-6">             
                    <input type="submit" class="btn btn-danger btn-send  pt-2 btn-block" value="cancel" >
                  </div>
                  <div class="col-md-6">             
                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="input data" >
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
{{-- @endsection --}}