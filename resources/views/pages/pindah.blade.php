@extends('template')
@section('content')
<div class="page-heading">
    <h3>Pindah</h3>
    <a href="{{ url('pindah/create') }}"><button class="btn btn-primary">Tambah Data</button></a>
    
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat Asal</th>
        <th scope="col">Alamat Tujuan</th>
        <th scope="col">Alasan Pindah</th>
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
        <td>{{ $value->tempat_tanggal_lahir }}</td>
        <td>{{ $value->jenis_kelamin }}</td>
        <td>{{ $value->alamat_asal }}</td>
        <td>{{ $value->alamat_tujuan }}</td>
        <td>{{ $value->alasan_pindah }}</td>
        <td>{{ $value->status_surat }}</td>
        <td>{{ $value->created_at }}</td>
        <td class="">
          <a class="btn btn-success d-inline" href="{{ url('pindah/'.$value->id,'edit') }}"><i class="bi bi-pencil-square"></i></a>
          <form action="{{ url('pindah/'.$value->id) }}" method="POST" class="d-inline">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
          </form>
        </td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
@endSection