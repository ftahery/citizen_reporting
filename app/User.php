<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";

    protected $hidden = ['created_at', 'updated_at'];
}
