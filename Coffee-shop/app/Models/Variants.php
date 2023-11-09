<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variants extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ["name"];
    public function variantValue() {
        return $this->hasMany(variantValue::class);
    }
}
