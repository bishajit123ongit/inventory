<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'emp_id','att_date','att_year','attendence','edit_date','month',
    ];
}
