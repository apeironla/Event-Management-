<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable =['description','food','photographer','power','decoration','fillable'];
}
