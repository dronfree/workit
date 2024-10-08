<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;

class Worker extends Model
{
    use HasFactory;

    public function orders(): BelognsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
