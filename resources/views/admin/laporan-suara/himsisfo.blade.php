@extends('layouts.admin')
@section('title','Laporan Suara HIMSISFO')
@section('content')
       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laporan Suara HIMSISFO</h1>

          <div class="row mb-3">
               
              <div class="col-3 col-md-3">
                  <label for="">Hitung Suara</label>
                  <div style="width: 50px; border:1px solid #b4b4b4; border-radius:4px; background:#fff;" 
                  class="text-center shadow-sm" id="y">0</div>
              </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Suara</h6>
              <div class="col-md-12" align="right">
            <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i> 
              Export
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('export-exportpdf-himsisfo') }}">Pdf</a>
              <a class="dropdown-item" href="{{ route('export-exportexcel-himsisfo') }}">Excel</a>
          </div>
          </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                      <th>Nama Pemilih</th>
                      <th>Nama Calon</th>
                      <th>Foto Calon</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->user->name}}</td>
                      <td>{{ $item->kandidat->nama }}</td>
                      <td><img src="{{ Storage::url($item->kandidat->foto )}}" width="150" class="img-thumbnail" alt=""></td>
                      <td>
                        <input type="checkbox" class="z" onclick="updateCount()" />
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

   <script>
    window.updateCount = function() {
    var x = $(".z:checked").length;
    document.getElementById("y").innerHTML = x;
    };
    </script>
@endpush