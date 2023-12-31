<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class,'user_id','id')->with('dishes');
    }
}
