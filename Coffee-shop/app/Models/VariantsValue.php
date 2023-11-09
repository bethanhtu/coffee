<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantsValue extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ["variant_id", "name"];
}
