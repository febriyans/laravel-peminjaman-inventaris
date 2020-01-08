@extends('layouts.app')

@section('content')

<form action="" method="POST">
    <div class="row" style="margin-left:1px;margin-right:2px;">
        <div class="col-sm-6">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <strong>ruangan</strong>
                        <input type="text" name="nama_ruang" class="form-control" placeholder="ruangan" value="{{ $ruang->nama_ruang }}">
                    </div>
                    <div class="form-group">
                        <strong>harga</strong>
                        <input type="text" name="harga_tambahan" class="form-control" placeholder="harga" value="{{ $ruang->kode_ruang }}">
                    </div>
                    <div class="form-group">
                        <strong>keterangan</strong>
                        <input type="text" name="keterangan" class="form-control" placeholder="keterangan" value="{{ $ruang->keterangan }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="submit" class="btn btn-primary" href="/ruangan">Batal</button>

                </div>
            </div>
        </div>
    </div>
</form>
@endsection