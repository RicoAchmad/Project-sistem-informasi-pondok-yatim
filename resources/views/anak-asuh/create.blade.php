@extends('layouts.admin');


@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Add Data Anak</div>
                <div class="card-body">
                    <form action="{{route('anak-asuh.store')}}" method="post">
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
                        <label for="">Jenis Kelamin </label>
                       <select name="jk" id="">
                           <option value="">Pilih</option>
                           <option value="Laki-Laki">Laki-Laki</option>
                           <option value="Perempuan">Perempuan</option>
                       </select>
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