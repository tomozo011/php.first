<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User1 extends Model
{
    protected $table = 'Users1';
    use SoftDeletes;
}
