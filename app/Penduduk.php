<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'no_kk', 'NIK', 'nohp'];
}
