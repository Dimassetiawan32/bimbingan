<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'pakets';
    protected $guarded = [];

    public function agen()
    {
        return $this->belongsTo(Agen::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}

