<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
    //Department情報を取る
    public function departments()
    {
        return $this->belongsToMany('App\Department');
    }
   //Area情報を取る
    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }
}

