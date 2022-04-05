<?php

namespace Upcoders\LaravelShipping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping_zones_table';

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class);
    }
}
