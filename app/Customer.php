<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nid_no','name','email','address','phone','shopname','photo','account_holder','account_number','bank_name','branch_name','city',
    ];
}
