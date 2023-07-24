@extends('template')
@section('content')
<div class="page-heading">
    <h3>Edit Asing</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('asing/'.$data->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" disabled value="{{ $data->tanggal }}" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" value="{{ $data->nama }}" disabled name="nama" >
        </div>
        <div class="mb-3">
          <label class="form-label">Paspor</label>
          <input type="text" class="form-control" value="{{ $data->paspor }}" name="paspor" >
        </div>
        <div class="mb-3">
            <label class="form-label">Kitas</label>
            <input type="text" class="form-control" value="{{ $data->kitas }}" name="kitas" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $data->alamat }}" name="alamat" >
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Sponsor</label>
            <input type="text" class="form-control" value="{{ $data->nama_sponsor }}" name="nama_sponsor" >
          </div>
          <div class="mb-3">
            <label class="form-label">NIK</label>
            <input type="text" class="form-control" value="{{ $data->nik }}" name="nik" >
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