<?php

namespace IracodeCom\FilamentIranMap\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [ 'province_id', 'name', 'name_en', 'latitude', 'longitude', 'status' ];

    /**
     * @return BelongsTo
     */
    public function province() : BelongsTo
    {
        return $this->belongsTo( Province::class );
    }

}
