@extends('layouts.admin')
@section('title','Kandidat')
@section('content')
       <!-- Begin Page Content -->
        <div class="container-fluid">

            @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
            @endif

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kandidat</h1>
         <a href="{{ route('kandidat.create') }}" class="btn btn-primary shadow-sm px-2 py-1 mb-3 btn-sm">
            Tambah Kandidat
         </a>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kandidat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Jurusan</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Jenis Kandidat</th>
                      <th>Foto</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->nim }}</td>
                      <td>{{ $item->jurusan }}</td>
                      <td>{!! $item->visi !!}</td>
                      <td>{!! $item->misi !!}</td>
                      <td>{{ $item->jenis_kandidat }}</td>
                      <td><img src="{{ Storage::url($item->foto )}}" width="150" class="img-thumbnail" alt=""></td>
                      <td>
                          <a href="{{ route('kandidat.edit',$item->id) }}" class="btn btn-sm btn-info ">Edit</a>
                          <form class="d-inline" action="{{ route('kandidat.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger  ">Hapus</button>
                          </form>
                      </td>
                    </tr>
                   @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->




@endsection

@push('addon-style')
  <link href="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('addon-script')
<!-- Page level plugins -->
  <script src="{{ url('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
   <script src="{{ url('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endpush