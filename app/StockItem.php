<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItem extends Model
{
   public $table = 'stockItems'; //
   
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_item',  'product_id', 'Item_id')->withPivot('adet');
    }
   
}
