@extends('layouts.app')

@section('content')

<div class="row" style="margin-left:27%;">
  <div class="col-sm-18">
    <form action="/inventaris" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
        <div class="row">
                <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>nama</strong>
                    <input type="text" name="nama" class="form-control" >
                </div>
                </div>

                <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>kondisi</strong>
                    <input type="text" name="kondisi" class="form-control" >
                </div>
                </div>
                <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>keterangan</strong>
                    <input type="text" name="keterangan" class="form-control" >
                </div>
                </div>
        </div>

        <div class="row">

            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>jumlah</strong>
                    <input type="text" name="jumlah" class="form-control" >
                </div>
            </div>

            
            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>id jenis</strong>
                    <select name="id_jenis" id="" class="form-control" >
                    
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="008">008</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>tanggal registrasi</strong>
                    <input type="date" name="tanggal_registrasi" class="form-control" >
                </div>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>id ruangan</strong>
                    <select name="id_ruang" id="" class="form-control" >
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="008">008</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>kode inventaris</strong>
                    <select name="kode_in" id="" class="form-control" >
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="008">008</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-sm-4">
                <div class="form-group">
                    <strong>id petugas</strong>
                    <select name="id_petugas" id="" class="form-control" >
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="008">008</option>
                    </select>
                </div>
            </div>
        </div>

            </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>


<div class="col-sm-12" style="margin-top:2%;">
    <div class="card">
      <div class="card-body">
        <div class="form-group">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">kondisi</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">jumlah</th>
                        <th scope="col">id jenis</th>
                        <th scope="col">tanggal_regis</th>
                        <th scope="col">id_ruang</th>
                        <th scope="col">kode_inventar</th>
                        <th scope="col">id_petugas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection