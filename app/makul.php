<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makul extends Model
{
    protected $table = 'makul';
    protected $fillable = ['kd_makul', 'nama_makul', 'sks'];
    protected $guarded = [];
    public $timestamps = false; 

}
