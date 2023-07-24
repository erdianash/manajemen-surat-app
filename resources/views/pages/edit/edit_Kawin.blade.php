@extends('template')
@section('content')
<div class="page-heading">
    <h3>Edit Kawin</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('kawin/'.$data->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" value="{{ $data->tanggal }}" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Suami</label>
          <input type="text" class="form-control" value="{{ $data->nama_suami }}" name="nama_suami" >
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat Suami</label>
          <input type="text" class="form-control" value="{{ $data->alamat_suami }}" name="alamat_suami" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Lahir Suami</label>
            <input type="text" class="form-control" value="{{ $data->tanggal_lahir_suami }}" name="tanggal_lahir_suami" >
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Istri</label>
            <input type="text" class="form-control" value="{{ $data->nama_istri }}" name="nama_istri" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat Istri</label>
            <input type="text" class="form-control" value="{{ $data->alamat_istri }}" name="alamat_istri" >
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Lahir Istri</label>
            <input type="date" class="form-control" value="{{ $data->tanggal_lahir_istri }}" name="tanggal_lahir_istri" >
          </div> 
          <div class="mb-3">
            <label class="form-label">Tanggal Menikah</label>
            <input type="date" class="form-control" value="{{ $data->tanggal_menikah }}" name="tanggal_menikah" >
          </div>
          <div class="mb-3">
            <label class="form-label">Status Surat</label>
            <input type="text" class="form-control" value="{{ $data->status_surat }}" name="status_surat" >
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