<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OldNames extends Model
{
    protected $fillable = ['user_id', 'first_name','last_name'];
}
