<?php

namespace App\Services;

use App\Repositories\OrdersRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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
}