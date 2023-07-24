@extends('template')
@section('content')
<div class="page-heading">
    <h3>Asing</h3>
    <a href="{{ url('asing/create') }}"><button class="btn btn-primary">Tambah Data</button></a>
    
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama</th>
        <th scope="col">Paspor</th>
        <th scope="col">Kitas</th>
        <th scope="col">Alamat</th>
        <th scope="col">Nama Sponsor</th>
        <th scope="col">NIK</th>
        <th scope="col">Status Surat</th>
        <th scope="col">Waktu</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $key=>$value)
      <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->tanggal }}</td>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->paspor }}</td>
        <td>{{ $value->kitas }}</td>
        <td>{{ $value->alamat }}</td>
        <td>{{ $value->nama_sponsor }}</td>
        <td>{{ $value->nik }}</td>
        <td>{{ $value->status_surat }}</td>
        <td>{{ $value->created_at }}</td>
        <td class="">
          <a class="btn btn-success d-inline" href="{{ url('asing/'.$value->id,'edit') }}"><i class="bi bi-pencil-square"></i></a>
          <form action="{{ url('asing/'.$value->id) }}" method="POST" class="d-inline">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
          </form>
          
        </td>
      </tr>
      @endforeach
      
    </tbody>
    {{-- <form action="{{ route('items.index') }}" method="GET"> --}}
    <input type="text" name="search" placeholder="Cari...">
    <button type="submit">Cari</button>
</form>
  </table>
@endSection