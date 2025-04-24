<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    protected $table = 'testings';
    protected $fillable = ['name', 'email'];
    public $timestamps = true;
}
