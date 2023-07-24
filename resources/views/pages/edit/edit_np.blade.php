@extends('template')
@section('content')
<div class="page-heading">
    <h3>Edit Non Permanen</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('np/'.$data->id) }}">
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
          <label class="form-label">Kelurahan</label>
          <input type="text" class="form-control" value="{{ $data->kelurahan }}" name="kelurahan" >
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $data->alamat }}" name="alamat" >
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