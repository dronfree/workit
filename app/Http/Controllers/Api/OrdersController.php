<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrdersService;
use Illuminate\Support\Facades\Log;

class OrdersController extends Controller
{
    protected $service;

    public function __construct(OrdersService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request) 
    {
        $res = $this->service->createOrder($request);
        return $res;
    }

    public function assign(Request $request) 
    {
        $res = $this->service->assignWorker($request);
        return $res;
    }
    
}
