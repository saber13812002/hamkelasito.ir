<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiliModel extends Model
{
    use HasFactory;

    protected $table = 'models';
    protected $connection = 'lilimysql';
}
