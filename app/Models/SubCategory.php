<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table="subcategory";

    public function Category()
    {
        return $this->belongsTo('App\category','cat_id');
    }
}
