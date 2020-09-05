<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    /** @var array */
    public $fillable = ['name', 'email', 'address'];

    use SoftDeletes;

    /** @var string */
    protected $hidden = ['deleted_at'];
}
