@extends('layouts.admin');

@section('title')
Data Pemasukan
@endsection

@section('content')
<div class="container">
    <div class="'row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Pemasukan</div>
                    <a href="{{ route('pemasukan.create') }}" class="btn btn-outline-primary">Tambah Data</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Donatur</th>
                                <th>Jumlah Donasi</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pemasukan as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->donatur->nama }}</td>
                                    <td>{{ $item->jumlah_donasi }}</td>
                                   
                                    <td>
                                        <form action="{{ route('pemasukan.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('pemasukan.edit', $item->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('pemasukan.show', $item->id) }}" class="btn btn-outline-warning">Show</a>
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