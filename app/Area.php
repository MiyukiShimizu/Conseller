<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = 'area_id';
    //Department情報を取る
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
