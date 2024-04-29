@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kegiatan HIMANIKA FT UNP</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
            <div class="col-8">
                <a href="#" class="btn btn-sm btn-primary rounded-pill ml-2">Tambah Data</a href="#">
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-7">
                        <input type="text" class="" placeholder="Cari Data">
                    </div>
                    <div class="col-4">
                        <button class="rounded-pill btn btn-sm btn-secondary">search</button>
                    </div>
                </div>
            </div>
        </div>
        <div><table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Surat</th>
                <th scope="col">Tanggal Surat</th>
                <th scope="col">Foto</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                  <button class="btn btn-sm btn-success"><i class="fas fa-print"></i></button>
                </td>
                  
              </tr>
            </tbody>
          </table></div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection