<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Get products of this order.
     *
     */
    public function products()
    {
        return $this->hasMany('App\Model\OrderProduct', 'order_products');
    }
}
