@extends('layouts.admin')
@section('title','Verifikasi')
@section('content')
       <!-- Begin Page Content -->
        <div class="container-fluid">

            @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>    
            @endif

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Verifikasi Akun</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Akun Belum Terverifikasi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Bukti KTM</th>
                      <th>#</th>
                    </tr>
                  </thead>

                  <tbody>
                   @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->nim }}</td>
                      <td>{{ $item->email }}</td>
                      <td>{{ $item->jurusan }}</td>
                      <td><a target="__blank" href="{{ Storage::url($item->bukti_ktm) }}">Lihat Bukti KTM</a></td>
                      <td>
                          <a href="{{ route('verifikasi-akun',$item->id) }}" class="btn btn-sm btn-success" onclick="return confirm('Apakah anda yakin?');">Verifikasi</a>
                          <form class="d-inline" action="{{ route('verifikasi-tolak',$item->id) }}" method="post">
                            @csrf
                            <button onclick="return confirm('Apakah anda yakin?');" type="submit" class="btn btn-sm btn-danger">Tolak</button>
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