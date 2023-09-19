<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function assign_rooms(){
        return $this->hasMany(BookingRoomList::class, 'booking_id');
    } // this is to create a relationship between booking and booking room list 
    //for us to get the booking id from bopokingroomlist model
}
