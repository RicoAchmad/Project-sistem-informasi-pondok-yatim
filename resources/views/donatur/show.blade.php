@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Show</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Donatur</label>
                        <input type="text" name="nama" class="form-control" value="{{ $donatur->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $donatur->alamat }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Whatsapp</label>
                        <input type="text" name="nomor" class="form-control" value="{{ $donatur->no_whatsapp }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $donatur->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ route('donatur.index') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection