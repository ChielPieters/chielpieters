<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'name',
        'title',

    ];

    protected $table = 'psimage';
}
