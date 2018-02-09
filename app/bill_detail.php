<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class BillDetail extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
