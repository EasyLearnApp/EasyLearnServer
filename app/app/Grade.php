<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    /** @var array */
    public $fillable = ['name'];

    use SoftDeletes;

    /** @var string */
    protected $hidden = ['deleted_at'];
}
