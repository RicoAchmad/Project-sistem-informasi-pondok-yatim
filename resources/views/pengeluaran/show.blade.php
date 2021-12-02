@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Show</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Catatan Keterangan</label>
                        <input type="text" name="catatan" class="form-control" value="{{ $pengeluaran->catatan }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Total Biaya Pengeluaran</label>
                        <input type="text" name="biaya" class="form-control" value="{{ $pengeluaran->biaya_pengeluaran }}" readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ route('pengeluaran.index') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection