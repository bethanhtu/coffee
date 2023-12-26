<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oder extends Model
{
    use HasFactory;
    protected $fillable =['user_id','total_price','note','name','phone','address','method','status'];
}
