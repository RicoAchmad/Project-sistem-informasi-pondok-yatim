@extends('layouts.admin')

@section('title')
Data Pengeluaran
@endsection

@section('content')
<div class="container">
    <div class="'row">
        <div class="col">
            <div class="card">
                <div class="card-header">Data Pengeluaran</div>
                    <a href="{{ route('pengeluaran.create') }}" class="btn btn-outline-primary">Tambah Data</a>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Catatan</th>
                                <th>Biaya Pengeluaran</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pengeluaran as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->catatan }}</td>
                                    <td>{{ $item->biaya_pengeluaran }}</td>
                                   
                                    <td>
                                        <form action="{{ route('pengeluaran.destroy', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('pengeluaran.edit', $item->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('pengeluaran.show', $item->id) }}" class="btn btn-outline-warning">Show</a>
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