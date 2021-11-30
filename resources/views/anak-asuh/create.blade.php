@extends('layouts.admin');


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Add Pemasukan</div>
                <div class="card-body">
                    <form action="{{route('pemasukan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Anak</label>
                        <input type="text" name="nama" class="form-control @error('nama')
                            is-invalid
                        @enderror">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control @error('jk')
                            is-invalid
                        @enderror">
                        @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Usia</label>
                        <input type="text" name="usia" class="form-control @error('usia')
                            is-invalid
                        @enderror">
                        @error('usia')
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