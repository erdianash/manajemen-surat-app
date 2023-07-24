@extends('template')
@section('content')
<div class="page-heading">
    <h3>Tambah Asing</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('/asing') }}" >
      @csrf
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" >
        </div>
        <div class="mb-3">
          <label class="form-label">Paspor</label>
          <input type="text" class="form-control" name="paspor" >
        </div>
        <div class="mb-3">
            <label class="form-label">Kitas</label>
            <input type="text" class="form-control" name="kitas" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" >
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Sponsor</label>
            <input type="text" class="form-control" name="nama_sponsor" >
          </div>
          <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" class="form-control" name="nik" >
          </div>
          <div class="mb-3">
            <label class="form-label">Status Surat</label>
            <input type="text" class="form-control" name="status_surat" >
          </div>  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@if(session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
@endSection