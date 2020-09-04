<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @var array */
    protected $fillable = ['name', 'email', 'address'];
}
