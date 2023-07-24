@extends('template')
@section('content')
<div class="page-heading">
    <h3>Tambah Kawin</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('/kawin') }}" >
      @csrf
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Suami</label>
          <input type="text" class="form-control" name="nama_suami" >
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat Suami</label>
          <input type="text" class="form-control" name="alamat_suami" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir Suami</label>
            <input type="date" class="form-control" name="tanggal_lahir_suami" >
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Istri</label>
            <input type="text" class="form-control" name="nama_istri" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat Istri</label>
            <input type="text" class="form-control" name="alamat_istri" >
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir Istri</label>
            <input type="date" class="form-control" name="tanggal_lahir_istri" >
          </div> 
          <div class="mb-3">
            <label class="form-label">Tanggal Menikah</label>
            <input type="date" class="form-control" name="tanggal_menikah" >
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