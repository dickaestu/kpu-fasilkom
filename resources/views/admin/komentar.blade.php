@extends('layouts.admin')
@section('title','Komentar')
@section('content')
       <!-- Begin Page Content -->
        <div class="container-fluid">

            @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
            @endif

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Komentar</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Komentar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Isi Komentar</th>
                      <th>Nama Kandidat</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->user->name }}</td>
                      <td>{{ $item->isi_komentar }}</td>
                      <td>{{ $item->kandidat->nama }}</td>
                      <td>
                        
                          <form class="d-inline" action="{{ route('hapus-komentar',$item->id) }}" method="post">
                            @csrf
                            <button onclick="return confirm('Apakah anda yakin?');" type="submit" class="btn btn-sm btn-danger">Hapus</button>
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