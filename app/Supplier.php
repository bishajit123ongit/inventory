<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'type','name','email','address','phone','shop','photo','account_holder','account_number','bank_name','branch_name','city',
    ];
}
