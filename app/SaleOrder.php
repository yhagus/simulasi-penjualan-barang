<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{
    //
    public $incrementing=false;
    protected $primaryKey='ref';
    protected $keyType='string';
    protected $dates=[
        'date',
        'updated_at',
        'created_at'
    ];

    public function sale_items()
    {
        return $this->hasMany('App\SaleItem');
    }
}
