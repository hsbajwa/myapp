<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Names extends Model
{
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id', 'first_name','last_name','start_date','end_date'];
}
