<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $incrementing=false;
    protected $primaryKey='sku';
    protected $keyType='string';
}
