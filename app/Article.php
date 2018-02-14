<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'nama', 'jk', 'ttl', 'agama', 'alamat'
    ];
}
