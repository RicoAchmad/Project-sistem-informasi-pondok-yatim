@extends('layouts.admin')

@section('header')
<h3>Halaman Edit</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Pengeluaran</div>
                <div class="card-body">
                    <form action="{{ route('pengeluaran.update', $pengeluaran->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Catatan Keterangan</label>
                        <input type="text" name="catatan" value="{{ $pengeluaran->catatan }}" class="form-control
                        @error('catatan')
                            is-invalid
                        @enderror">
                        @error('catatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       
                    </div>
                    <div class="form-group">
                        <label for="">Total Biaya Pengeluaran</label>
                        <input type="text" name="biaya" value="{{ $pengeluaran->biaya_pengeluaran }}" class="form-control
                        @error('jk')
                            is-invalid
                        @enderror">
                        @error('biaya_pengeluaran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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