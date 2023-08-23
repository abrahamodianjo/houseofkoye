<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use App\Models\RoomType;
use App\Models\Room;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;


class RoomTypeController extends Controller
{
    public function RoomTypeList()
    {

        $allData = RoomType::orderBy('id', 'desc')->get();
        return view('backend.allroom.roomtype.view_roomtype', compact('allData'));
    } //end method

    public function AddRoomType()
    {
        return view('backend.allroom.roomtype.add_roomtype');
    } //end method

    public function RoomTypeStore(Request $request){

        $roomtype_id = RoomType::insertGetId([
            'name' => $request->name,
            'created_at' => Carbon::now()

        ]);

        Room::insert([
            'roomtype_id' => $roomtype_id,
        ]);

        $notification = array(
            'message' => 'Room Type inserted successfully',
            'alert' => 'success'
        );

        return redirect()->route('room.type.list')->with($notification);


    }//end method
}
