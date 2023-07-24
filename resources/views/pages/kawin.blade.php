@extends('template')
@section('content')
<div class="page-heading">
    <h3>Kawin</h3>
    <a href="{{ url('kawin/create') }}"><button class="btn btn-primary">Tambah Data</button></a>
    
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama Suami</th>
        <th scope="col">Alamat Suami</th>
        <th scope="col">Tanggal Lahir Suami</th>
        <th scope="col">Nama Istri</th>
        <th scope="col">Alamat Istri</th>
        <th scope="col">Tanggal Lahir Istri</th>
        <th scope="col">Tanggal Menikah</th>
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
        <td>{{ $value->nama_suami }}</td>
        <td>{{ $value->alamat_suami }}</td>
        <td>{{ $value->tanggal_lahir_suami }}</td>
        <td>{{ $value->nama_istri }}</td>
        <td>{{ $value->alamat_istri }}</td>
        <td>{{ $value->tanggal_lahir_istri }}</td>
        <td>{{ $value->tanggal_menikah }}</td>
        <td>{{ $value->status_surat }}</td>
        <td>{{ $value->created_at }}</td>
        <td class="">
          <a class="btn btn-success d-inline" href="{{ url('kawin/'.$value->id,'edit') }}"><i class="bi bi-pencil-square"></i></a>
          <form action="{{ url('kawin/'.$value->id) }}" method="POST" class="d-inline">
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