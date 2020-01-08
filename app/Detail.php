<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table="detail";
    protected $primaryKey='id_detail';

    protected $fillable =[
        'id_inventaris','jumlah'
    ];
}
