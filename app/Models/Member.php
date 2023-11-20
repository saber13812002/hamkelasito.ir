<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['is_new'];

    protected function isNew(): Attribute
    {
        $isNew = Carbon::parse($this->created_at) > Carbon::now()->startOfWeek();
//        dd($isNew);
        return new Attribute(
            get: fn() => $isNew
        );
    }


    public function slider(): HasOne
    {
        return $this->hasOne(Slider::class);
    }

    public function tables(): BelongsTo
    {
        return $this->belongsTo(TempTable::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
