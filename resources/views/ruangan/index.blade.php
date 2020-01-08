@extends('layouts.app')

@section('content')

<div class="row" style="margin-left:1px;margin-right:2px;">
  <div class="col-sm-6">
    <form action="/ruangan" method="POST">
    @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <strong>nama ruangan</strong>
                    <input type="text" name="nama_ruang" class="form-control" placeholder="nama ruangan">
                </div>
                <div class="form-group">
                    <strong>kode</strong>
                    <input type="text" name="kode_ruang" class="form-control" placeholder="kode_ruang">
                </div>
                <div class="form-group">
                    <strong>keterangan</strong>
                    <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
  </div>


  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ruangan</th>
                        <th scope="col">kode</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($ruang as $ruangan)
                    <tr>
                        <th>{{ ++$i }}</th>
                        <td>{{ $ruangan->nama_ruang}}</td>
                        <td>{{ $ruangan->kode_ruang}}</td>
                        <td>{{ $ruangan->keterangan}}</td>
                        <td>
                            <form action="/ruangan/{{$ruangan->id_ruang}}" method="POST">
                                <a class="btn btn-primary" href="/ruangan/{{$ruangan->id_ruang}}/edit">Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection