<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table        = 'nilai';
    protected $fillable     =['makul_id', 'mahasiswa_id', 'nilai'];
    public    $timestamps   = false;

    public function makul()
    {
        return $this->hasOne(makul::class, 'id', 'makul_id');
    }

    public function mahasiswa()
    {
        return $this->hasOne(mahasiswa::class, 'id', 'mahasiswa_id');
    }
}


