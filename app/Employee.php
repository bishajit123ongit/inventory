<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nid_no','name','email','address','phone','experience','photo','salary','vocation','city'
    ];
}
