@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Show</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Anak</label>
                        <input type="text" name="nama" class="form-control" value="{{ $anak->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control" value="{{ $anak->jenis_kelamin }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Usia</label>
                        <input type="text" name="usia" class="form-control" value="{{ $anak->usia }}" readonly>
                    </div>
                    <div class="form-group">
                        <br>
                        <a href="{{ route('anak-asuh.index') }}" class="btn btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection