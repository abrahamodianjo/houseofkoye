<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Models\Room;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
class RoomController extends Controller
{
    public function EditRoom($id){

        $basic_facility = Facility::where('rooms_id', $id)->get();
        $editData = Room::find($id);
        return view('backend.allroom.rooms.edit_rooms', compact('editData', 'basic_facility'));

    }//End Method
}
