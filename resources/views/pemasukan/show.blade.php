@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Show</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">ID Donatur</label>
                        <input type="text" name="donatur_id" class="form-control" value="{{ $pemasukan->donatur_id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Donasi</label>
                        <input type="text" name="donasi" class="form-control" value="{{ $pemasukan->jumlah_donasi }}" readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ route('pemasukan.index') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection