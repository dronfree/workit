<?php

namespace App\Services;

use App\Repositories\OrdersRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Exceptions\OrderException;

class OrdersService {
    
    protected $repository;
    
    public function __construct(OrdersRepository $repository) 
    {
        $this->repository = $repository;
    }
    
    public function createOrder(Request $request) 
    {
        // @TODO validation
        $data = $request->only([
            'type_id',
            'partnership_id',
            'description',
            'date',
            'address',
            'amount',
        ]);
        $data['user_id'] = $request->user()->id;
        return $this->repository->create($data);
    }

    public function assignWorker(Request $request) : void
    {
        $data = $request->only([
            'worker_id',
            'order_id'
        ]);
        $order = $this->repository->get($data['order_id']);
        foreach ($order->workers as $worker) {
            if ($worker->id == $data['worker_id'])
            {
                throw new OrderException('worker already assigned');
            }
        }
        $this->repository->assign($data);
    }
}