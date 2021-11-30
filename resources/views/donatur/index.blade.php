@extends('layouts.admin');

@section('title')
Data Diri Donatur
@endsection

@section('content')
<div class="container">
    <div class="'row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Penulis</div>
                    <a href="{{ route('donatur.create') }}" class="btn btn-outline-primary">Tambah Data</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Donatur</th>
                                <th>Alamat</th>
                                <th>Nomor Whatsapp</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->no_whatsapp }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <form action="{{ route('donatur.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('donatur.edit', $item->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('donatur.show', $item->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-outline-danger">
                                            Delete
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection