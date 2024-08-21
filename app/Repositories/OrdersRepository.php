<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Log;
use App\Models\Order;

class OrdersRepository {

    protected $order;

    public function __construct(Order $order) 
    {
        $this->order = $order;
    }

    public function get($id)
    {
        return $this->order::find($id);
    }

    public function create(array $data) : Order 
    {
        $order = new $this->order;
        $order->fill($data);
        $order->save();
        return $order->fresh();
    }

    public function assign(array $data) : void
    {
        
    }

}