<?php

namespace IracodeCom\FilamentIranMap\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fips',
        'iso',
        'domain',
        'fa_name',
        'en_name',
        'status'
    ];
}
