<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['name','phone','weight','distance','freight','dropoff','pickup','status','trackingid','transit_time','completed_time','extra1','extra2','created_at','updated_at','email'];
}
