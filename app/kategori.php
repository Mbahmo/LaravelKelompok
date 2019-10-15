<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table   = 'kategori';
    protected $guarded = ['id','created_at','upadated_at'];
}
