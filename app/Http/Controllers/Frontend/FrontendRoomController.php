<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use App\Models\RoomType;
use App\Models\Room;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class FrontendRoomController extends Controller
{
    public function AllFrontendRoomList(){

        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));

    }//End method

    public function RoomDetailsPage($id){

        $roomdetails = Room::find($id);
        return view('frontend.room.room_details',compact('roomdetails'));
    }//End Method
}
