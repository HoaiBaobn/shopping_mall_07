<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BillDetail;
use App\Models\Comment;
use App\Models\Size;

class Products extends Model
{
   protected $table="product";

   public function billDetail()
   {
      return $this->belongsTo(BillDetail::class);
   }

   public function comment()
   {
      return $this->hasMany(Comment::class);
   }

   public function size()
   {
      return $this->hasMany(Size::class);
   }
}
