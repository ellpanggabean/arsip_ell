@extends('layout.main')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data kegiatan HIMANIKA FT UNP</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row mb-2">
        <div class="col-8">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-primary rounded-pill ml-2">Tambah Data</a>
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
      <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama kegiatan</th>
              <th scope="col">Tanggal kegiatan</th>
              <th scope="col">Foto</th>
              <th scope="col">deskripsis</th>
              <th scope="col">Tools</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)                  
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name ?? '' }}</td>
                <td>{{ $item->tanggal ?? '' }}</td>
                <td>{{ $item->deskripsi ?? '' }}</td>
                <td>
                  <a href="{{ url('/storage', $item->foto) }}" target="_blank">
                    <img src="{{ url('/storage', $item->foto ?? '') }}" alt="" class="img img-fluid" width="150" height="150"></td>
                  </a>
                <td>
                  <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                  <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                  </form>
                  <a href="{{ url('/storage', $item->foto) }}" class="btn btn-sm btn-success" id="printfoto">
                  <i class="fas fa-print"></i></a> 
                  
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
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
<!-- /.content-wrapper -->
<script>
  document.addEventListener('DOMContentLoaded', function(){
    var print = document.getElementById('printfoto');
    print.addEventListener('click', function(e){
      e.preventDefault();
      var newWindow = window.open(this.href, '_blank');

      newWindow.addEventListener('load', function(){
        newWindow.print();
      })
    })
  })
</script>
@endsection