<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Log;
use App\Models\Orders;
use App\Models\Order;

class OrdersRepository {

    protected $order;

    public function __construct(Order $order) 
    {
        $this->order = $order;
    }

    public function create(array $data) : Order 
    {
        $order = new $this->order;
        $order->fill($data);
        $order->save();
        return $order->fresh();
    }
}