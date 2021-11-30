@extends('layouts.admin');


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Add Pengeluaran</div>
                <div class="card-body">
                    <form action="{{route('pengeluaran.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <input type="text" name="catatan" class="form-control @error('catatan')
                            is-invalid
                        @enderror">
                    </select>
                    @error('catatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Biaya Pengeluaran</label>
                        <input type="text" name="biaya" class="form-control @error('biaya')
                            is-invalid
                        @enderror">
                        @error('biaya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success">Tambah</button>
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection