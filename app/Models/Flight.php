<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'flight', 'type', 'airline', 'departure', 'departure_gate', 'route', 'destination', 'destination_gate', 'aircraft', 'departure_time', 'arrival_time', 'information', 'user_id'
    ];
}
