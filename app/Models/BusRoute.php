<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    protected $fillable = ['bus_id', 'origin_district_id', 'destination_district_id', 'distance_km', 'fare'];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function originDistrict()
    {
        return $this->belongsTo(District::class, 'origin_district_id');
    }

    public function destinationDistrict()
    {
        return $this->belongsTo(District::class, 'destination_district_id');
    }
}
