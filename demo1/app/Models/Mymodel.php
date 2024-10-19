<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mymodel extends Model
{
    protected $table = "playbox";
    protected $fillable = [
        "name","f_name","email","std_id","pass","gender","course"
    ];
}
