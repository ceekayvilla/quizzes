<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Outlet extends Model
{
    use Uuids;
     public $incrementing = false;
     protected $keyType = 'string';
     protected $primaryKey = 'id';
     protected $table = 'outlets';
     protected $fillable = [
        'name',
        'location',
        'happyhour_start',
        'happyhour_end',
     ];
}
