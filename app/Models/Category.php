<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //告诉程序哪些字段是支持修改的
    protected $fillable = [
        'name', 'description',
    ];


}
