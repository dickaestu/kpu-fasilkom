@extends('layouts.admin')
@section('title','Data Pemilih')
@section('content')
       <!-- Begin Page Content -->
        <div class="container-fluid">

            @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
            @endif

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Pemilih</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            
            
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pemilih</h6>
            
            <div class="col-md-12" align="right">
            <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> 
              Export
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('export-exportpdf-pemilih') }}">Pdf</a>
              <a class="dropdown-item" href="{{ route('export-export-excel') }}">Excel</a>
          </div>
          </div>
          </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Nim</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->jurusan }}</td>
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