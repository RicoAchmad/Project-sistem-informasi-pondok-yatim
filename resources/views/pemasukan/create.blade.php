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
                        <label for="">Nama Donatur</label>
                        <select name="donatur_id" class="form-control @error('donatur_id') is invalid @enderror">
                            <option value="">Pilih</option>
                            @foreach ($donatur as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                    </select>
                    @error('donatur_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Donasi</label>
                        <input type="text" name="donasi" class="form-control @error('jk')
                            is-invalid
                        @enderror">
                        @error('jk')
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