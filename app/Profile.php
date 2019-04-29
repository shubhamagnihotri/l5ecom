<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
