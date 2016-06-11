<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function stockItems()
    {
        return $this->belongsToMany('App\StockItem','product_stockItem','product_id','stockItem_id')->withPivot('adet');
    }
}
