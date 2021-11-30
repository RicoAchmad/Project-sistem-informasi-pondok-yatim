@extends('layouts.admin')

@section('header')
<h3>Halaman Edit</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Donatur</div>
                <div class="card-body">
                    <form action="{{ route('donatur.update', $donatur->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Donatur</label>
                        <input type="text" name="nama" value="{{ $donatur->nama }}" class="form-control"
                        @error('nama')
                        is-invalid
                        @enderror>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" value="{{ $donatur->alamat }}" class="form-control"
                        @error('alamat')
                            is-invalid
                        @enderror>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Nomor</label>
                        <input type="text" name="alamat" value="{{ $donatur->no_whatsapp }}" class="form-control"
                        @error('no_whatsapp')
                            is-invalid
                        @enderror>
                        @error('no_whatsapp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">email</label>
                        <input type="text" name="email" value="{{ $donatur->email }}" class="form-control"
                        @error('email')
                            is-invalid
                        @enderror>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection