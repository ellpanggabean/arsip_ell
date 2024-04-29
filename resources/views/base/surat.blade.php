  @extends('layout.main')
  @section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Surat HIMANIKA FT UNP</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
          <div class="col-8">
              <a href="{{ route('surat.create') }}" class="btn btn-sm btn-primary rounded-pill ml-2">Tambah Data</a>
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
                <th scope="col">Nama Surat</th>
                <th scope="col">Tanggal Surat</th>
                <th scope="col">Foto</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)                  
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->name ?? '' }}</td>
                  <td>{{ $item->tanggal ?? '' }}</td>
                  <td>
                    <a href="{{ Storage::url($item->foto) }}" target="_blank">
                      <img src="{{ Storage::url($item->foto ?? '') }}" alt="" class="img img-fluid" width="150" height="150"></td>
                    </a>
                  <td>
                    <a href="{{ route('surat.edit', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('surat.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{ route('surat.show') }}" class="btn btn-sm btn-success"><i class="fas fa-print"></i></a>
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
  @endsection