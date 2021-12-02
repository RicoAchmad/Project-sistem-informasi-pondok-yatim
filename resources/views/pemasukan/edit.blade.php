@extends('layouts.admin')

@section('header')
<h3>Halaman Edit</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit Pemasukan</div>
                <div class="card-body">
                    <form action="{{ route('pemasukan.update', $pemasukan->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">ID Donatur</label>
                        <input type="text" name="donatur_id" value="{{ $pemasukan->donatur_id }}" class="form-control" readonly>
                    </div>
<br>
                    <div class="form-group">
                        <label for="">Jumlah Donasi</label>
                        <input type="text" name="donasi" value="{{ $pemasukan->jumlah_donasi }}" class="form-control
                        @error('jk')
                            is-invalid
                        @enderror">
                        @error('jumlah_donasi')
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