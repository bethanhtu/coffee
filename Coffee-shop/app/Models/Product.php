<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ["name", "category_id", "price", "short_description", "short-description", "content", "discount_id", "variant_id", "variant_value_id"];
    public function category() {
        return $this->belongTo(category::class);
    }
}
