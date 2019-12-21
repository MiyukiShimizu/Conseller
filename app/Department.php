<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    //Product情報を取る
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

}