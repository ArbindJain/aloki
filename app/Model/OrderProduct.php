<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    /**
     * Return the order of product.
     *
     */
    public function order()
    {
        return $this->belongsTo('App\Model\Order', 'orders');
    }
}
