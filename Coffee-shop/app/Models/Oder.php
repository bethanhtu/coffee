<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ["user_id", "total_price", "note"];
}
