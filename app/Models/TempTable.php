<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TempTable extends Model
{
    use HasFactory;

    public function member(): HasOne
    {
        return $this->hasOne(Member::class);
    }
}
