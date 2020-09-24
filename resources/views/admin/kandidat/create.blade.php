@extends('layouts.admin')
@section('title','Tambah Kandidat')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid mb-5">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Kandidat</h1>
    
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('kandidat.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input required type="text" name="nama" placeholder="Nama kandidat" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}">
                    @error('nama') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input required type="number" name="nim" placeholder="Nim kandidat" class="form-control @error('nim') is-invalid @enderror"
                    value="{{ old('nim') }}">
                    @error('nim') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select required name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan">
                        
                        <option value="sistem informasi">Sistem Informasi</option>
                        <option value="teknik informatika">Teknik Informatika</option>
                    </select>
                    @error('jurusan') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kandidat">Jenis Kandidat</label>
                    <select required name="jenis_kandidat" class="form-control" id="jenis_kandidat">
                        
                        <option value="dpm">Dewan perwakilan mahasiswa</option>
                        <option value="bem">Badan Eksekutif Mahasiswa</option>
                        <option value="himti">Himpunan Mahasiswa Teknik Informatika</option>
                        <option value="himsisfo">Himpunan Mahasiswa Sistem Informasi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Foto Kandidat</label>
                    <input required type="file" class="form-control-file" name="foto" >
                    @error('foto') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label >Visi</label>
                    <textarea required class="form-control @error('visi') is-invalid @enderror" name="visi" id="editor1" rows="3"></textarea>
                    @error('visi') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label >Misi</label>
                    <textarea required class="form-control @error('misi') is-invalid @enderror" name="misi" id="editor2" rows="3"></textarea>
                    @error('misi') <div class="text-danger">{{ $message }}</div>@enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
</script>
@endpush