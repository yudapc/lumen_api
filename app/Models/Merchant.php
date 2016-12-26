<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'description', 'address'];

    public function stores()
    {
        return $this->hasMany('Store');
    }
}
