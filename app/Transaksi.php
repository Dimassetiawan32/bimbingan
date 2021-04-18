<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $guarded = [];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
