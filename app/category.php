<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory; 

class Category extends Model
{
    public function sub_cat()
    {
        return $this->hasMany('SubCategory::class');
    }
}
