<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'details',
        'client',
        'is_fulfilled',
    ];
}
