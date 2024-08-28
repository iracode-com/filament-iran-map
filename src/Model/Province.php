<?php

namespace IracodeCom\FilamentIranMap\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [ 'title', 'country_id', 'code', 'ip', 'area_code', 'hf_address', 'server_ip', 'serial', 'state', 'status' ];

    /**
     * @return HasMany
     */
    public function cities() : HasMany
    {
        return $this->hasMany( City::class );
    }

}
