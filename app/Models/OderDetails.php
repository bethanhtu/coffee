<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderDetails extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'total'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
