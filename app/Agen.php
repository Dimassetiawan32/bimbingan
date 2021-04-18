<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Agen extends Model
{
    use AutoNumberTrait;

    protected $table = 'agens';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode_agen' => [
                'format' => 'AG0?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 2 // The number of digits in an autonumber
            ]
        ];
    }

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}
