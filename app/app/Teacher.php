<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @var array */
    public $fillable = ['name', 'email', 'address'];

    /** @var string */
    protected $hidden = ['deleted_at'];
}
