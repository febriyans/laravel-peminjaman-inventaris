<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table="peminjaman";
    protected $primaryKey='id_peminjaman';
    protected $fillable =[
        'tanggal_pinjam','tanggal_kembali','sattus_peminjaman','id_pegawai'
    ];
}
