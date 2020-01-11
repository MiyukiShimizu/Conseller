<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'id';
    //一対多のリレーション
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

