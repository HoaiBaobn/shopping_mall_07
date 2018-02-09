<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\BillDetail;

class Bill extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Bill_Detail()
    {
        return $this->belongsTo(BillDetail::class);
    }
}
    