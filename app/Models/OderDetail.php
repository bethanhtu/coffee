<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderDetail extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ["order_id", "product_id", "quantity", "price", "total"];
}
