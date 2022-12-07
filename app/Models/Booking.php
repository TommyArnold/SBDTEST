<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','booking_date','flexibility_option_id','vehicle_size_option_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function flexibility_option(){
        return $this->belongsTo('App\Models\FlexibilityOption');
    }
    public function vehicle_size_option(){
        return $this->belongsTo('App\Models\VehicleSizeOption');
    }
}
