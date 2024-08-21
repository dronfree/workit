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
        $res = $this->service->createFromRequest($request);
        return $res;
    }
}
