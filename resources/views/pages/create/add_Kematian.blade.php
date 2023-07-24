@extends('template')
@section('content')
<div class="page-heading">
    <h3>Tambah Kematian</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('/kematian') }}" >
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
          <label class="form-label">Tempat Tanggal Lahir</label>
          <input type="text" class="form-control" name="tempat_tanggal_lahir" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Meninggal</label>
            <input type="date" class="form-control" name="tanggal_meninggal" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" >
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jenis_kelamin" >
          </div>
          <div class="mb-3">
            <label class="form-label">Ahli Waris</label>
            <input type="text" class="form-control" name="ahli_waris" >
          </div>
          <div class="mb-3">
            <label class="form-label">Status_surat</label>
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