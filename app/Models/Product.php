<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     *
     */
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'order_products', 'product_id','order_id')->withTimestamps()->withPivot(['quantity', 'price']);
    }
}
