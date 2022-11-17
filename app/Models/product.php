<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =['category_name','product_name','product_title','product_description',
    'product_quantity','product_price','discount_price','image'];
}
