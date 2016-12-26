<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['merchant_id', 'name', 'email', 'phone', 'description', 'address'];

    public function merchant()
    {
        return $this->belongsTo('Merchant');
    }

}
