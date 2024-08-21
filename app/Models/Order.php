<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Worker;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'partnership_id',
        'description',
        'date',
        'address',
        'amount',
        'user_id',
    ];

    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class);
    }

}
