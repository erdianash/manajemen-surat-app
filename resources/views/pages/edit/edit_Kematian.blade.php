@extends('template')
@section('content')
<div class="page-heading">
    <h3>Edit Kematian</h3>
</div>
<div class="container">
    <form method="POST" action="{{ url('kematian/'.$data->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control" value="{{ $data->tanggal }}" name="tanggal" >
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" >
        </div>
        <div class="mb-3">
          <label class="form-label">Tempat Tanggal Lahir</label>
          <input type="text" class="form-control" value="{{ $data->tempat_tanggal_lahir }}" name="tempat_tanggal_lahir" >
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Meninggal</label>
            <input type="date" class="form-control" value="{{ $data->tanggal_meninggal }}" name="tanggal_meninggal" >
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{ $data->alamat }}" name="alamat" >
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="enum" class="form-control" value="{{ $data->jenis_kelamin }}" name="jenis_kelamin" >
          </div>
          <div class="mb-3">
            <label class="form-label">Ahli Waris</label>
            <input type="text" class="form-control" value="{{ $data->ahli_waris }}" name="ahli_waris" >
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