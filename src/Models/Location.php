<?php

namespace Upcoders\LaravelShipping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipping_zone_locations_table';

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }
}
