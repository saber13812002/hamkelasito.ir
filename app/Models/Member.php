<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Member extends Model
{
    use HasFactory;

    protected $appends = ['is_new'];

    protected function isNew(): Attribute
    {
        $isNew = Carbon::parse($this->created_at) > Carbon::now()->startOfWeek();
//        dd($isNew);
        return new Attribute(
            get: fn () =>  $isNew
        );
    }

}
